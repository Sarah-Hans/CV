<footer>
    <div id="menufooter">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="index.php?page=hobbyelevage">Hobby principal</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </div>
    <div id="reseaux">
        <p>Suivez-moi :</p>
        <div id="img-reseaux">
            <a href="https://fr.linkedin.com/in/sarahans"><img src="../images/icone-linkedin.png" alt="Profil LinkedIn" title="Profil Twitter"></a>
            <a href="https://twitter.com/lageekette"><img src="../images/icone-twitter.png" alt="Profil Twitter" title="Profil LinkedIn"></a>
        </div>
        <p id="majcv">CV mis à jours le 07/01/2021</p>
        <p>Date de la première visite : <?php echo $_SESSION['dateFirstVisit']; ?></p>
        <p>Nombre de pages vues : <?php echo $_SESSION['countViewPage']; ?></p>
    </div>
</footer>
</body>

</html>
