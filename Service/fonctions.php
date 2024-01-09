<?php

require_once("config.php");

function connexion($host=HOST,$dbname=DBNAME,$user=USER,$password=PASSWORD){
      $dns="mysql:host=$host;dbname=$dbname;charset=utf8";
      try{
            $connexion = new PDO($dns,$user,$password);
      }catch(Exception $e){
            echo "<h1> Connexion imposible ! Vérifiez les paramètres! </h1>"
            die;
      }
      return $connexion;
}
?>