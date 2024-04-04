<?php 

$user ='root';
$pass = '';
$db = 'todolist';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

?>