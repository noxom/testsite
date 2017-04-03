<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>Google Places API</title>
    <script type="text/javascript">
        function validate()
        {
            var error="";
            var name = document.getElementById( "keyword" );
            if( name.value == "" )
            {
                error = " Введите слово для поиска ";
                document.getElementById( "errors" ).innerHTML = error;
                return false;
            }

            else
            {
                //document.getElementById( "errors" ).innerHTML = "";
                return true;
            }
        }

    </script>
</head>
<body>
<div id="errors"></div>
<div id="searchForm">
    <form action="index.php?r=site/test" onsubmit="return validate();" method="Post">
        <input id="keyword" name="keyword" type="text" size="60">
        <select id="city" name="city" size="1">
            <option selected value="Ангарск">	Ангарск
            <option value="Архангельск">	Архангельск
            <option value="Астрахань">	Астрахань
            <option value="Балаково">	Балаково
            <option value="Балашиха">	Балашиха
            <option value="Барнаул">	Барнаул
            <option value="Белгород">	Белгород
            <option value="Бийск">	Бийск
            <option value="Благовещенск">	Благовещенск
            <option value="Братск">	Братск
            <option value="Брянск">	Брянск
            <option value="Великий Новгород">	Великий Новгород
            <option value="Владивосток">	Владивосток
            <option value="Владикавказ">	Владикавказ
            <option value="Владимир">	Владимир
            <option value="Волгоград">	Волгоград
            <option value="Волжский">	Волжский
            <option value="Вологда">	Вологда
            <option value="Воронеж">	Воронеж
            <option value="Грозный">	Грозный
            <option value="Дзержинск">	Дзержинск
            <option value="Екатеринбург">	Екатеринбург
            <option value="Иваново">	Иваново
            <option value="Ижевск">	Ижевск
            <option value="Йошкар-Ола">	Йошкар-Ола
            <option value="Иркутск">	Иркутск
            <option value="Казань">	Казань
            <option value="Калининград">	Калининград
            <option value="Калуга">	Калуга
            <option value="Кемерово">	Кемерово
            <option value="Киров">	Киров
            <option value="Комсомольск-на-Амуре">	Комсомольск-на-Амуре
            <option value="Королёв">	Королёв
            <option value="Кострома">	Кострома
            <option value="Краснодар">	Краснодар
            <option value="Красноярск">	Красноярск
            <option value="Курган">	Курган
            <option value="Курск">	Курск
            <option value="Липецк">	Липецк
            <option value="Магнитогорск">	Магнитогорск
            <option value="Махачкала">	Махачкала
            <option value="Москва">	Москва
            <option value="Мурманск">	Мурманск
            <option value="Мытищи">	Мытищи
            <option value="Набережные Челны">	Набережные Челны
            <option value="Нальчик">	Нальчик
            <option value="Нижневартовск">	Нижневартовск
            <option value="Нижнекамск">	Нижнекамск
            <option value="Нижний Новгород">	Нижний Новгород
            <option value="Нижний Тагил">	Нижний Тагил
            <option value="Новокузнецк">	Новокузнецк
            <option value="Новороссийск">	Новороссийск
            <option value="Новосибирск">	Новосибирск
            <option value="Омск">	Омск
            <option value="Орёл">	Орёл
            <option value="Оренбург">	Оренбург
            <option value="Орск">	Орск
            <option value="Пенза">	Пенза
            <option value="Пермь">	Пермь
            <option value="Петрозаводск">	Петрозаводск
            <option value="Подольск">	Подольск
            <option value="Прокопьевск">	Прокопьевск
            <option value="Псков">	Псков
            <option value="Ростов-на-Дону">	Ростов-на-Дону
            <option value="Рыбинск">	Рыбинск
            <option value="Рязань">	Рязань
            <option value="Самара">	Самара
            <option value="Санкт-Петербург">	Санкт-Петербург
            <option value="Саранск">	Саранск
            <option value="Саратов">	Саратов
            <option value="Севастополь">	Севастополь
            <option value="Симферополь">	Симферополь
            <option value="Смоленск">	Смоленск
            <option value="Сочи">	Сочи
            <option value="Ставрополь">	Ставрополь
            <option value="Старый Оскол">	Старый Оскол
            <option value="Стерлитамак">	Стерлитамак
            <option value="Сургут">	Сургут
            <option value="Сыктывкар">	Сыктывкар
            <option value="Таганрог">	Таганрог
            <option value="Тамбов">	Тамбов
            <option value="Тверь">	Тверь
            <option value="Тольятти">	Тольятти
            <option value="Томск">	Томск
            <option value="Тула">	Тула
            <option value="Тюмень">	Тюмень
            <option value="Улан - Удэ">	Улан - Удэ
            <option value="Ульяновск">	Ульяновск
            <option value="Уфа">	Уфа
            <option value="Хабаровск">	Хабаровск
            <option value="Химки">	Химки
            <option value="Чебоксары">	Чебоксары
            <option value="Челябинск">	Челябинск
            <option value="Череповец">	Череповец
            <option value="Чита">	Чита
            <option value="Шахты">	Шахты
            <option value="Энгельс">	Энгельс
            <option value="Южно-Сахалинск">	Южно-Сахалинск
            <option value="Якутск">	Якутск
            <option value="Ярославль">	Ярославль
        </select>
        <input name="Submit"  type="submit" value="Искать"/>
    </form>
</div>
</body>
</html>