<?php

$page = ;

if ($_GET['page'] == '/hobby-elevage.php') {
    include '/pages/hobby-elevage.php';
}

else if ($_GET['page'] == '/contact.php') {
    include '/pages/contact.php';
}

else if ($_GET['page'] == '/') {
    include '/pages/accueil.php';
}

else {
    include '/pages/404.php';
}