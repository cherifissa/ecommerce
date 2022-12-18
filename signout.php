<?php

session_destroy();

header('Location: index.php');
session_start();
$_SESSION['name']= "Non connecté";
?>