<?php
//$connection=mysqli_connect(dbserver,dbuser,dbpassword,dbname);

$connection = new mysqli('localhost', 'root', '', 'abc');

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
/*
else{
    echo "Connection successful";
}*/

?>