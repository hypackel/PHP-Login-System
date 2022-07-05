<?php
    try{
        require '../vendor/autoload.php'; // include Composer's autoloader
        $m = new MongoDB\Client("_______YOUR_MONGODB_STRING_______");
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->loginreg;
    //echo "Databse loginreg selected";
    $collection = $db->userdata; 
    //echo "Collection userdata Selected Successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       session_start();
?>