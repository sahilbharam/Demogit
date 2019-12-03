<?php
try{
    $con=new PDO("mysql:host=192.168.100.26;dbname=group039","group039","welcome");
    //echo "connected";
}
catch(PDOException $ex){
    echo $ex->getMessage();
}