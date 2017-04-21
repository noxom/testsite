<?php

class googleApi {

    //search info about city by name
    static function get_place_id($city_name, $key_API) {
        $place_url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?key=" . $key_API . "&types=(cities)&input=" . $city_name;
        $place_json = file_get_contents($place_url);
        $place_id = json_decode($place_json);
        if(strcmp($place_id->status, "OK") == 0)
            return $place_id->predictions[0]->place_id;
        else return NULL;
    }

    //find city location for search items
    static function get_location($place_id, $key_API) {
        $location_url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=" . $place_id . "&key=" . $key_API;
        $location_json = file_get_contents($location_url);
        $location = json_decode($location_json);
        if(strcmp($location->status,"OK") == 0)
            return $location->result->geometry;
        else return NULL;
    }

    static function get_near_places($search_word, $lantitude, $longtitude, $radius, $key_API) {
        $near_url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . $search_word
            . "&types=establishment" . "&location=" . $lantitude . "," . $longtitude .
            "&radius=" . $radius . "&key=" . $key_API;
        $near_json = file_get_contents($near_url);
        $nears = json_decode($near_json);
        if(strcmp($nears->status, "OK") == 0)
            return $nears->predictions;
        else return NULL;
    }

}

class SiteController extends CController
{

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionAutocomplete() {
        $this->render('autocomplete');
    }

    public function actionAutocomplete2() {
        $this->render('autocomplete2');
    }

    public function actionCachetest() {
        $google_key = "AIzaSyDyhxNMydosdPbrh2tnPPLxI-FnVnchpps";
        $radius = 10000;//search priority , meters

        $time_start = microtime(true);

        $memcache = new Memcache;
        $memcache->connect('127.0.0.1', 11211);

        if(isset($_POST['city'])) $city = $_POST['city']; else $this->redirect(array('site/autocomplete'));
        $search_word = $_POST['keyword'];

        if($memcache->get($city)) {
            $loc = $memcache->get($city);
        }
        else {
            $city_place_id = googleApi::get_place_id($city, $google_key);
            $tmp = googleApi::get_location($city_place_id, $google_key);
            $loc = array($tmp->location->lat, $tmp->location->lng,//[0],[1]
                $tmp->viewport->southwest->lat, $tmp->viewport->northeast->lat,//[2],[3]
                $tmp->viewport->southwest->lng, $tmp->viewport->northeast->lng);//[4],[5]
            $memcache->set($city, $loc, false, 600);//10*60sec
        }

        $nears = googleApi::get_near_places($search_word, $loc[0], $loc[1], $radius, $google_key);
        $count = 0;

        foreach($nears as $item) {
            if($memcache->get($item->place_id)) {
                $item_loc = $memcache->get($item->place_id);
            }
            else {
                $item_location = googleApi::get_location($item->place_id, $google_key);
                $item_loc = array($item_location->location->lat, $item_location->location->lng);
                $memcache->set($item->place_id, $item_loc, false, 600);
            }

            if($loc[2] < $item_loc[0] && $item_loc[0] < $loc[3]
                && $loc[4] < $item_loc[1] && $item_loc[1] < $loc[5]) {
                $address = $item->terms[0]->value . ", " . $item->terms[1]->value;
                $longitude = $item_loc[0];
                $latitude = $item_loc[1];
                $arr[$count] = compact("address", "longitude", "latitude");
                $count++;
            }

        }

        if($count > 0) {
        $json_result = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        header('Content-Type: application/json');
        echo $json_result;
        }
         else {
            echo "Результаты не найдены";
         }

        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "Process Time: {$time}";

    }

    public function actionTest() {
        $time_start = microtime(true);
        if(isset($_POST['city'])) $city = $_POST['city']; else $this->redirect(array('site/autocomplete'));
        $search_word = $_POST['keyword'];
        $radius = 10000;//search priority , meters
        $google_key = "AIzaSyDyhxNMydosdPbrh2tnPPLxI-FnVnchpps";//access for API

        $city_place_id = googleApi::get_place_id($city, $google_key);
        if($city_place_id == NULL) echo "Запрос города не удался";
        else {
            $city_location = googleApi::get_location($city_place_id, $google_key);
            if($city_location == NULL)echo "Запрос местоположения города не удался";
            else {
                $nears = googleApi::get_near_places($search_word, $city_location->location->lat, $city_location->location->lng, $radius, $google_key);
                if($nears == NULL) echo "Запрос близлежайщих мест не удался";
                else {
                    $count = 0;

                    //city area
                    $min_lat = $city_location->viewport->southwest->lat;
                    $max_lat = $city_location->viewport->northeast->lat;
                    $min_lng = $city_location->viewport->southwest->lng;
                    $max_lng = $city_location->viewport->northeast->lng;

                    foreach($nears as $item) {
                        $item_location = googleApi::get_location($item->place_id, $google_key);
                        //check the location of places within the city
                        $item_lat = $item_location->location->lat;
                        $item_lng = $item_location->location->lng;

                        //Restrict search within the city
                        if($min_lat < $item_lat && $item_lat < $max_lat
                            && $min_lng < $item_lng && $item_lng < $max_lng) {
                            $address = $item->terms[0]->value . ", " . $item->terms[1]->value;
                            $longitude = $item_lng;
                            $latitude = $item_lat;
                            $arr[$count] = compact("address", "longitude", "latitude");
                            $count++;
                        }
                    }

                    $time_end = microtime(true);
                    $time = $time_end - $time_start;
                    echo "Process Time: {$time}";

                    if($count > 0) {
                        $json_result = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                        header('Content-Type: application/json');
                        echo $json_result;
                    }
                    else echo "Результаты не найдены";

                }

            }

        }

    }

}