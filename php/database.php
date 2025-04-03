<?php
$link = mysqli_connect("localhost", "root", "");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if(mysqli_query($link,$sql)){
    echo "Database created successfully";
}else{
    echo "ERROR;Could not able to execute $sql".mysqli_error($link);
}
// close connection
mysqli_close($link);

// Print host information
echo "Connected successfully. Host info: " . mysqli_get_host_info($link);
// Close connection
mysqli_close($link);
?>