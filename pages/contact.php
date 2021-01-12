<?php
$metaTitle = "Contacter Sarah Hans";
$metaDescription ="N'hésitez pas à me contacter pour avoir davantage d'informations sur mon profil, mon parcours et mes compétences.";

?>

<?php
require 'header.php';
?>

<main>
            <h1>Contactez-moi</h1>
            <div id="contact">
                <section id="formulaire">
                    <h2>Formulaire de contact</h2>
                    <p>Si vous souhaitez me contacter, n'hésitez pas à m'envoyer un message en utilisant le formulaire ci-dessous.</p>
                    <form action="index.php?page=contact" method="post">
                        <div id="liste-choix">
                            <label for="choix">Civilité :</label>
                            <select id="choix">
                                <option value="monsieur">Monsieur</option>
                                <option value="madame">Madame</option>
                            </select>
                        </div>
                        <div id="nom-prenom" class="form-item">
                            <div id="nom">
                                <label for="name">Nom<em>*</em> :</label>
                                <input type="text" id="name" name="user_name" placeholder="Votre nom">
                            </div>
                            <div id="prenom">
                                <label for="firstname">Prénom<em>*</em> :</label>
                                <input type="text" id="firstname" name="user_firstname" placeholder="Votre prénom">
                            </div>
                        </div>
                        <div id="champs-email" class="form-item">
                            <label for="mail">Adresse e-mail<em>*</em> :</label>
                            <input type="email" id="mail" name="user-mail" placeholder="Votre e-mail">
                        </div>
                        <div id="genre" class="form-item">
                            <label for="raison">Raison du contact :</label><br>
                            <input type="radio" id="emploi" name="raison" value="emploi">
                            <label for="emploi">Proposition d'emploi</label>
                            <input type="radio" id="info" name="raison" value="info">
                            <label for="info">Demande d'informations</label>
                            <input type="radio" id="prestations" name="raison" value="prestations">
                            <label for="prestations">Prestations</label>
                        </div>
                        <div id="champs-msg">
                            <label for="msg">Votre message :</label>
                            <textarea id="msg" name="user-msg" rows="5" placeholder="Votre message ici"></textarea>
                        </div>
                        <div class="bouton">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>
                </section>

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