<?php

class AdminController{
      public function __construct(){
            $file="View/admin/admin.html.php";
            $myFct=new MyFct();
            $myFct->generatePage($file,[],"View/base-bs-admin.html.php");
      }
}