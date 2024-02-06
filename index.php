<?php

session_start();
error_reporting(E_ALL); ini_set("display_errors", 1);
if(!$_SESSION){ //On test si la variable global $_SESSION est encore vide ===> $_SESSION=[];
      $_SESSION['username']='user';
      $_SESSION['admin']=0;
}

require_once("./Service/extra.php");

spl_autoload_register('charger'); // charge automatiqument la fonction indiqué en paramètre (ici la fonction 'charger')
// $MyFct=new MyFct;
// echo $MyFct->crypter('isnt');die;
$path='home';
extract($_GET); 
//printr([$_GET]);die;// generation de variable via les indices de la variable global $_GET (ex : $path, $action, ...)
$nameController=ucfirst($path)."Controller";
$fileController="Controller/$nameController.php";
if(file_exists($fileController)){
      $page=new $nameController(); // ici on vient donner le paramètre de la fonction charger ???? ////HELP
}else{
      echo "Le fichier $nameController n'existe pas. ";
}