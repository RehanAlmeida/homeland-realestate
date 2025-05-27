<?php

//host
define("HOSTNAME","localhost");

//DBNAME
define("DBNAME","homeland");

//user
define("USER","root");

//pass
define("PASS","");

$conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);

if($conn == true) {
    echo "db connected";
} else{
    echo "error";
}