<?php

class HomeController{
      public function __construct(){
            $file="View/home/home.html.php";
            $myFct=new MyFct();
            $myFct->generatePage($file);
      }
}