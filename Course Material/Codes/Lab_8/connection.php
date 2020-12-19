<?php

$mysqli_connection = new MySQLi("Localhost","root","","project_test");


if($mysqli_connection->connect_error)
{
    echo "Not Connected, error:" .$mysqli_connection->connect_error;
}
else{
    echo "Connected";
}


?>