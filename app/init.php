<?php

session_start();

$_SESSION['user_id'] = 1;

$dsn = 'mysql:dbname=todo;host=localhost';
$dbUser = 'root';
$dbPassword = '';


try {
  
  $db = new PDO($dsn, $dbUser, $dbPassword);

} catch (PDOException $execption) {
  
    die('Connection failed' .$execption->getMessage());
}







//Handle this in some other way 

if(!isset($_SESSION['user_id'])){
  
  die('You are not signed in.');
}



?>