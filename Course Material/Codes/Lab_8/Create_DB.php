<?php

$link = mysqli_connect("Localhost","root","");


if($link == false){
    die("ERROR: Could not Connect. ".mysqli_connect_error());
}

$sql = "CREATE DATABASE PROJECT_TEST";

if(mysqli_query($link, $sql)){
    echo "Database Created Successfully";
}
else{
    echo "Error: Couldn't connect sql. ". mysqli_error($link);
}


?>