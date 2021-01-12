<?php
$metaTitle = "Page introuvable";
$metaDescription = "La page que vous recherchez n'existe pas.";

require 'header.php';

echo 'Erreur 404 - la page que vous cherchez est introuvable.';
echo '<br>';
echo '<a href="/">Revenez en page accueil</a>';

require 'footer.php';



