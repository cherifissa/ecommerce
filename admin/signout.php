<?php

session_destroy();

header('Location: adminconnect.php');
session_start();
$_SESSION['admin']= "Non connecté";
?>