<?php
session_start();

if(!$_SESSION){ //On test si la variable global $_SESSION est encore vide ===> $_SESSION=[];
      $_SESSION['username']='user';
      $_SESSION['roles']=json_encode(['ROLE_USER']);
}