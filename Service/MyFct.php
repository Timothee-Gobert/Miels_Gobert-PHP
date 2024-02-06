<?php

require_once("./Config/database_settings.php");

class MyFct{
    
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
    
    // TODO : verifier si on peut simplifier en mrttant if session en première ligne
    // 35 lignes de code avant la modification
    // suppression de 12 lignes de code ailleur
    function generatePage($file,$variables=[]){ 
        if($_SESSION['admin']==1){
            $base="View/base-bs-admin.html.php";
        }else{
            $base="View/base-bs.html.php";
        }
        if(file_exists($file)){
            extract($variables);
            ob_start(); 
            require_once($file);
            $content=ob_get_clean();
            ob_start();
            require_once($base);
            $page=ob_get_clean();
            echo $page;
        }else{
            header('location:home');; 
            die;
        }
    }

    public function printr($tableau){
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
    }
}
?>