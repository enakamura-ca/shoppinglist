<?php
session_start();
include("class/Stores.php");
require 'connect.php';

?>
<!DOCTYPE html>
<html>
<title>My Shopping List</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
    class="w3-bar-item w3-button">Close Menu</a>
    <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">List Products</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>
