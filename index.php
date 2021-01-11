<?php

if(isset($_GET['page'])) {
    if($_GET['page'] == 'contact') {
        require 'pages/contact.php';
    }
    else if($_GET['page'] == 'hobbyelevage') {
        require 'pages/hobby-elevage.php';
    }
    else {
        require 'pages/404.php';
    }
} else {
    require 'pages/accueil.php';
}