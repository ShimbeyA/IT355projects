<?php

include 'db.php';
include 'db_functions.php';

//get the desired action

if(isset($_POST['action'])){
    $action =$_POST['action'];
}
else if(isset($_GET['action'])){
  $action = $_GET['action'];  
}
else{
    $action="display";
    
}

switch($action){
    case "edit":
        $sid =$_GET['sid'];
        $classid=$_GET['classid'];
        $
}