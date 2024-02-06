<?php

require_once("Config/database_settings.php");

function connexion($dbhost=HOST,$dbname=DBNAME,$dbuser=USER,$dbpass=PASSWORD){
      try{
            $connexion = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8,$dbuser,$dbpass");
      }catch(Exception $e){
            echo "<h1> Connexion  ! Vérifiez les paramètres!</h1>";
            die;
      }
      return $connexion;
}
?>