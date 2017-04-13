<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2000/REC-xhtml1-200000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<title><?php echo $this->pageTitle; ?></title>
</head>

<body>
<div id="page">

<div id="header">
<div id="logo">Google Api</div>
<div id="mainmenu">
<?php $this->widget('application.components.MainMenu',array(
	'items'=>array(
		array('label'=>'Home', 'url'=>array('site/index')),
		array('label'=>'Autocomplete', 'url'=>array('site/autocomplete')),
		array('label'=>'Autocomplete2', 'url'=>array('site/autocomplete2')),
	),
)); ?>
</div><!-- mainmenu -->
</div><!-- header -->

<div id="content">
<?php echo $content; ?>
</div><!-- content -->

<div id="footer">
Copyright &copy; 2017 noxom.<br/>
</div><!-- footer -->

</div><!-- page -->
</body>

</html>