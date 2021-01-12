<?php

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL;

if(isset($page)) {
    if($page == 'contact') {
        require 'pages/contact.php';
    }
    else if($page == 'hobbyelevage') {
        require 'pages/hobby-elevage.php';
    }
    else {
        require 'pages/404.php';
    }
} else {
    require 'pages/accueil.php';
}