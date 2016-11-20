<?php

session_start();
$GLOBALS['config']= array(
          'mysql'=>array(
            'host'=>'127.0.0.1',
            'username'=>'root',
            'password'=>'',
            'db'=>'loc_find'
          ),
          'pagetitle'=>array(
            'pagename'=>'MyApp'
          ),
);


spl_autoload_register(function($class){
	//echo $class;
	//echo $_SERVER['DOCUMENT_ROOT'].'/classes/'.$class.'.php';
	//require_once $_SERVER['DOCUMENT_ROOT'].'site/classes/'.$class.'.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/bustracker/classes/'.$class.'.php';
});

//require_once 'functions/sanitize.php';

 ?>
