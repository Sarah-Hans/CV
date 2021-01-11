<?php
include 'header.php';
?>

<main>
            <h1>Contactez-moi</h1>
            <div id="contact">
                <section id="formulaire">
                    <h2>Formulaire de contact</h2>
                    <p>Si vous souhaitez me contacter, n'hésitez pas à m'envoyer un message en utilisant le formulaire ci-dessous.</p>
                    <form action="https://httpbin.org/post" method="post">
                        <div id="genre">
                            <input type="radio" id="madame" name="genre" value="madame">
                            <label for="madame">Mme</label>
                            <input type="radio" id="monsieur" name="genre" value="monsieur">
                            <label for="madame">Mr</label>
                        </div>
                        <div id="nom-prenom" class="form-item">
                            <div id="nom">
                                <label for="name">Nom<em>*</em> :</label>
                                <input type="text" id="name" name="user_name" placeholder="Votre nom" required>
                            </div>
                            <div id="prenom">
                                <label for="firstname">Prénom<em>*</em> :</label>
                                <input type="text" id="firstname" name="user_firstname" placeholder="Votre prénom" required>
                            </div>
                        </div>
                        <div id="champs-email" class="form-item">
                            <label for="mail">Adresse e-mail<em>*</em> :</label>
                            <input type="email" id="mail" name="user-mail" placeholder="Votre e-mail" required>
                        </div>
                        <div id="liste-choix" class="form-item">
                            <label for="choix">Motif de contact :</label>
                            <select id="choix">
                                <option value="">-----Sélectionnez une option-----</option>
                                <option value="contact">Prise de contact</option>
                                <option value="proposition-poste">Proposition de poste</option>
                                <option value="renseignements">Besoin de renseignements</option>
                            </select>
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