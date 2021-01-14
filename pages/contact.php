<?php
$metaTitle = "Contacter Sarah Hans";
$metaDescription ="N'hésitez pas à me contacter pour avoir davantage d'informations sur mon profil, mon parcours et mes compétences.";

//appelle le header
require 'header.php';

$choix = filter_input(INPUT_POST, 'choix');
$user_name = filter_input(INPUT_POST, 'user_name');
$user_firstname = filter_input(INPUT_POST, 'user_firstname');
$user_email = filter_input(INPUT_POST, 'user_email', FILTER_VALIDATE_EMAIL);
$raison = filter_input(INPUT_POST, 'raison');
$user_msg = filter_input(INPUT_POST, 'user_msg');

$envoyer = filter_input(INPUT_POST, 'envoyer');

//création du fichier de contact dynamique
$datecourante = date('Y-m-d-H-i-s');
$file = "contact/contact_$datecourante.txt";
$formulaireok = true;

$formErrors = [
  "Choix" =>  "",
  "Nom" =>   "",
    "Prénom" => "",
    "E-mail" => "",
    "Raison" => "",
    "Message" => "",
];

//validation des données du formulaire
if(isset($envoyer)){
    if(!$choix) {
        $formulaireok = false;
        $formErrors['Choix'] = "Veuillez sélectionner votre civilité svp.";
    }
    if(!$user_name) {
        $formulaireok = false;
        $formErrors['Nom'] = "Veuillez remplir votre nom svp.";
    }
    if(!$user_firstname) {
        $formulaireok = false;
        $formErrors['Prénom'] = "Veuillez remplir votre prénom svp.";
    }
    if(!$user_email) {
        $formulaireok = false;
        $formErrors['E-mail'] = "L'adresse e-mail n'est pas valide";
    }
    if(!$raison) {
        $formulaireok = false;
        $formErrors['Raison'] = "Veuillez sélectionner la raison de votre prise de contact svp.";
    }
    if(strlen($user_msg) < 5) {
        $formulaireok = false;
        $formErrors['Message'] = "Veuillez rédiger un message de plus de 5 caractères svp.";
    }
    if ($formulaireok == true) {
        file_put_contents($file, $choix, FILE_APPEND | LOCK_EX);
        file_put_contents($file, $user_name, FILE_APPEND | LOCK_EX);
        file_put_contents($file, $user_firstname, FILE_APPEND | LOCK_EX);
        file_put_contents($file, $user_email, FILE_APPEND | LOCK_EX);
        file_put_contents($file, $raison, FILE_APPEND | LOCK_EX);
        file_put_contents($file, $user_msg, FILE_APPEND | LOCK_EX);
    }
}

?>

<main>
            <h1>Contactez-moi</h1>
            <div id="contact">
                <section id="formulaire">
                    <h2>Formulaire de contact</h2>
                    <p>Si vous souhaitez me contacter, n'hésitez pas à m'envoyer un message en utilisant le formulaire ci-dessous.</p>
                    <form action="index.php?page=contact" method="post">
                        <div id="liste-choix">
                            <?php
                                if(isset($formErrors['Choix'])) {
                                    echo '<span class="erreur">' . $formErrors['Choix'] . '</span><br>';
                                }
                            ?>
                            <label for="choix">Civilité :</label>
                            <select name ="choix" id="choix">
                                <option value="" selected disabled hidden>Choisissez :</option>
                                <option value="monsieur">Monsieur</option>
                                <option value="madame">Madame</option>
                            </select>
                        </div>
                        <div id="nom-prenom" class="form-item">
                            <div id="nom">
                                <?php
                                if(isset($formErrors['Nom'])) {
                                    echo '<span class="erreur">' . $formErrors['Nom'] . '</span><br>';
                                }
                                ?>
                                <label for="name">Nom<em>*</em> :</label>
                                <input type="text" id="name" name="user_name" placeholder="Votre nom">
                            </div>
                            <div id="prenom">
                                <?php
                                if(isset($formErrors['Prénom'])) {
                                    echo '<span class="erreur">' . $formErrors['Prénom'] . '</span><br>';
                                }
                                ?>
                                <label for="firstname">Prénom<em>*</em> :</label>
                                <input type="text" id="firstname" name="user_firstname" placeholder="Votre prénom">
                            </div>
                        </div>

                        <div id="champs-email" class="form-item">
                            <?php
                            if(isset($formErrors['E-mail'])) {
                                echo '<span class="erreur">' . $formErrors['E-mail'] . '</span><br>';
                            }
                            ?>
                            <label for="mail">Adresse e-mail<em>*</em> :</label>
                            <input type="email" id="mail" name="user_email" placeholder="Votre e-mail">
                        </div>
                        <div id="genre" class="form-item">
                            <?php
                            if(isset($formErrors['Raison'])) {
                                echo '<span class="erreur">' . $formErrors['Raison'] . '</span><br>';
                            }
                            ?>
                            <label for="raison">Raison du contact :</label><br>
                            <input type="radio" id="emploi" name="raison" value="proposition d'emploi">
                            <label for="emploi">Proposition d'emploi</label>
                            <input type="radio" id="info" name="raison" value="demande d'info">
                            <label for="info">Demande d'informations</label>
                            <input type="radio" id="prestations" name="raison" value="demande de prestations">
                            <label for="prestations">Prestations</label>
                        </div>
                        <div id="champs-msg">
                            <?php
                            if(isset($formErrors['Message'])) {
                                echo '<span class="erreur">' . $formErrors['Message'] . '</span>';
                            }
                            ?>
                            <label for="msg">Votre message :</label>
                            <textarea id="msg" name="user_msg" rows="5" placeholder="Votre message ici"></textarea>
                        </div>
                        <div class="bouton">
                            <button type="submit" name="envoyer">Envoyer</button>
                        </div>
                    </form>
                </section>

                <?php

                ?>

                <section id="infospratiques">
                    <h2>Infos pratiques</h2>
                    <p><strong>Adresse : </strong><br>
                    70 chemin du Château - 26320 Saint Marcel Les Valence</p>
                    <p><strong>Téléphone :</strong> 06 59 96 65 84</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d176.4230377665115!2d4.933132401128772!3d44.96869527848632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDU4JzA3LjQiTiA0wrA1NSc1OS43IkU!5e0!3m2!1sfr!2sfr!4v1607092285228!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </section>

            </div>
            

    </main>

<?php
include 'footer.php';
?>