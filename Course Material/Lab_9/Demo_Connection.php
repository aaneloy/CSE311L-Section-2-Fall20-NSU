<?php

$mysqli_connection = new MySQLi('localhost', 'root', '', 'cse311_section_8');

if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>