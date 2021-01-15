<?php
session_start();

$date = date('Y-m-d-H:i:s');

if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] = $date;
}

if (!isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage'] = 0;
} else {
    $_SESSION['countViewPage']++;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script&family=Overlock&display=swap" rel="stylesheet">
    <title><?=$metaTitle?></title>
    <meta name="description" content="<?=$metaDescription?>">
</head>

<body>
<header>
    <div id="header-textheader">
        <a href="index.php">
            <p id="header-nomprenom">Sarah Hans</p>
            <p id="header-baseline">Développement web & Webmarketing</p>
        </a>
    </div>
    <div id="header-profilpicture">
        <img src="../images/sarah-hans.jpg" alt="photo de profil" title="Photo de Sarah Hans">
    </div>
</header>
<nav class="nav">
    <ul class="menu">
        <li><a href="/">Accueil</a></li>
        <li><a href="index.php?page=hobbyelevage">Hobby principal</a></li>
        <li><a href="index.php?page=contact">Contactez-moi</a></li>
    </ul>
</nav>
