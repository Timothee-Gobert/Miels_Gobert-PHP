<?php

require_once("./Config/parametres_serveur.php");

class MyFct{

    function isAdmin(){
        
    }
    function notGranted($role_libelle){
        $granted=self::isGranted($role_libelle); // comme isGranted() est static utilise self:: au lieu de $this
        if($granted){
            return false ;
        }else{
            return true;
        }
    }
    
    static function isGranted($role_libelle){
        $user_roles=$_SESSION['roles'];          //format JSON
        $user_roles=json_decode($user_roles);   //transformation en php
        // echo printr($user_roles)
        if(in_array($role_libelle,$user_roles)){//in_array — Checks if a value exists in an array
            return true;
        }else{
            return false;
        }
    }
    function throwMessage($message){
        $variables=['message'=>$message];
        $file="View/erreur/erreur.html.php";
        $this->generatePage($file,$variables);
    }

    function crypter($password,$iteration=404){
        for($i=0;$i<=$iteration;$i++){
            $password=sha1($password);
        }
        return $password;
    }
    

    function generatePage($file,$variables=[],$base="View/base-bs.html.php"){  
        if(file_exists($file)){
            extract($variables);
            ob_start();             // Ouvrir   la memoire tampon pour contenir lfichier $file à transformer en texte
            require_once($file);
            $content=ob_get_clean();
            ob_start();             // Ouvrir à nouveau la memoire tampon pour recevoir le fichier $base avec la variable $content
            require_once($base);
            $page=ob_get_clean();
            echo $page;
        }else{
            echo "<h1>Desolé! Le fichier $file n'existe pas!</h1>"; 
            die;
        }
    }
    public function printr($tableau){
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
    }
    static function sprintr($tableau){
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
    }
}
?>