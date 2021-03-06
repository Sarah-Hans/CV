<?php
$metaTitle = "CV de Sarah Hans";
$metaDescription ="Spécialisée en webmarketing et développement, découvrez mes compétences et mon expérience professionnelle";

?>

<?php
require 'header.php';
?>

<main>
        <section id="intro">
            <h1>CV Sarah Hans - Développement web et Webmarketing</h1>
            <h2>Informations générales</h2>
            <ul id="motcles">
                <li class="motcles-item">SEO</li>
                <li class="motcles-item">Développement web</li>
                <li class="motcles-item">Rédaction Web</li>
                <li class="motcles-item">SEA</li>
                <li class="motcles-item">Community Management</li>
            </ul>
            <p id="infosgen"><strong>34 ans - Saint-Marcel-Les-Valence (FR) - Permis B - Véhicule personnel</strong></p>
            <p>Bienvenue sur mon CV en ligne. <br>
            Je suis à la recherche de <strong>nouvelles opportunités professionnelles.</strong><br>
            Vous trouverez sur ce site mes domaines de compétences ainsi que le détail de mes expériences professionnelles passées et de mes formations. Sur la page <span id="intro-hobbyelevage"><a href="hobby-elevage.html">Hobby Principal</a></span>, vous pourrez avoir plus d'information sur mon activité accessoire d'élevage de chats de race. </p>
        </section>
        <div id="leftside">
            <section id="skills">
                <h2>Mes compétences</h2>
                <h3>Informatique</h3>
                <ul>
                    <li>Systèmes d'exploitation : MAC OS, Windows</li>
                    <li>Bureautique : Suite Microsoft Office</li>
                    <li>Graphisme : Photoshop, Lightroom</li>
                    <li>Vidéo : </li>
                    <li>CMS : Wordpress, Prestashop, Magento</li>
                </ul>
                <h3>Webmarketing</h3>
                <ul>
                    <li>SEO : maitrise des techniques de référencement naturel</li>
                    <li>SEA : Adwords, Facebook Ads, Adsense, Affiliation</li>
                    <li>SMO : maîtrise des réseaux sociaux (Instagram, Facebook, Twitter, Pinterest, Youtube)</li>
                    <li>Rédaction web</li>
                    <li>Création et envoi d'e-mailings/newsletters</li>
                    <li>...</li>
                </ul>
                <h3>Développement web</h3>
                <ul>
                    <li>HTML / CSS</li>
                    <li>Utilisation de GIT</li>
                    <li>...</li>
                </ul>
            </section>
            <section id="hobbys">
                <h2>Mes hobbys</h2>
                <ol>
                    <li>Élevage de chats</li>
                    <li>Photographie</li>
                    <li>Randonnée</li>
                    <li>Vélo</li>
                    <li>Blogging / réseaux sociaux</li>
                </ol>
            </section>
        </div>
        <div id="rightside">
            <section id="xp">
                <h2>Expériences professionnelles</h2>
                <p>Ci-dessous, voici un récapitulatif de mes expériences professionnelles.</p>
                <table>
                    <tr class="xp-1eligne">
                        <td>Période</td>
                        <td>Poste</td>
                        <td>Entreprise</td>
                        <td>Missions</td>
                    </tr>
                    <tr>
                        <td>05/2018 - 05/2020</td>
                        <td>Community & Product manager</td>
                        <td>Mon-Cheval</td>
                        <td>community management, SEO, SEA, rédaction web, e-mailing, web analytics</td>
                    </tr>
                    <tr>
                        <td>12/2017 - 04/2018</td>
                        <td>Chargée de webmarketing</td>
                        <td>26 Diffusions</td>
                        <td>community management, SEO, SEA, rédaction web, e-mailing, web analytics</td>
                    </tr>
                    <tr>
                        <td>04/2017 - 12/2017</td>
                        <td>Community manager et SEO</td>
                        <td>Vivandis</td>
                        <td>community management, SEO, SEA, rédaction web, e-mailing, web analytics</td>
                    </tr>
                    <tr>
                        <td>06/2015 - 04/2017</td>
                        <td>Community & product manager</td>
                        <td>Mon-Cheval</td>
                        <td>community management, SEO, SEA, rédaction web, e-mailing, web analytics</td>
                    </tr>
                    <tr>
                        <td>09/2014 - 04/2015</td>
                        <td>Webmarketer</td>
                        <td>Valrhona</td>
                        <td>SEO, SEA, Réseaux sociaux, rédaction, stratégie d'acquisition</td>
                    </tr>
                    <tr>
                        <td>01/2013 - 12/2013</td>
                        <td>Responsable webmarketing</td>
                        <td>Too Easy</td>
                        <td>Stratégie web globale, Adwords, Social media management, rédaction web, formations, web analytics, SEO</td>
                    </tr>
                </table>
            </section>
            <section id="formations">
                <h2>Formations</h2>
                <p>Ci-dessous, voici un récapitulatif de mes formations.</p>
                <table>
                    <tr class="xp-1eligne">
                        <td>Période</td>
                        <td>Diplôme</td>
                        <td>Ecole</td>
                        <td>Détails</td>
                    </tr>
                    <tr>
                        <td>2020-en cours</td>
                        <td>Technicien Développeur</td>
                        <td>Campus Numérique in The Alps</td>
                        <td>HTML/CSS, PHP, Javascript, Java, Réseaux...</td>
                    </tr>
                    <tr>
                        <td>2010-2011</td>
                        <td>Master 2 IDEMM</td>
                        <td>Université Lille 3</td>
                        <td>Ingénierie documentaire, édition et médiation multimédia</td>
                    </tr>
                    <tr>
                        <td>2009 -2010</td>
                        <td>Master 1 ICD</td>
                        <td>Université Lille 3</td>
                        <td>Information, communication et document</td>
                    </tr>
                    <tr>
                        <td>2005-2009</td>
                        <td>Licence en Information et Communication</td>
                        <td>Université Libre de Bruxelles</td>
                        <td>Journalisme et communication avec option informatique</td>
                    </tr>
                </table>
            </section>
        </div>

    </main>

<?php
include 'footer.php';
?>