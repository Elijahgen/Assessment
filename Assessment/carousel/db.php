<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'myshop';

$conn = new mysqli ($host, $username, $password,$database);
if($conn->connect_error){
    die ('Connect error: ' .$conn->connect_error);
}
?>
