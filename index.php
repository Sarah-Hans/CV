<?php

if ($_GET['page'] == '/hobby-elevage.php') {
    require 'pages/hobby-elevage.php';
}

else if ($_GET['page'] == '/contact.php') {
    require 'pages/contact.php';
}

else if ($_GET['page'] == '/index.php') {
    require 'pages/accueil.php';
}

else {
    require 'pages/index.php';
}