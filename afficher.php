<?php
// Paramètres de connexion à la base de données
$serveur = "localhost"; // Serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motdepasse = ""; // Mot de passe MySQL
$base = "Demande"; // Nom de la base de données


// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}

// Requête SQL pour sélectionner toutes les données de la table Etudiant
$sql = "SELECT * FROM Collie  ";

// Exécuter la requête
$resultat = mysqli_query($connexion, $sql);

// Vérifier s'il y a des résultats
if ($resultat) {
    // Afficher les données sous forme de tableau HTML
    "<link rel='stylesheet' href='apropos.css'>";
    echo "<center><font color='white'><h1>Liste des collis</font></h1>";
    echo "<table border='1' >";
    echo "<tr><th><font color='lightskyblue'>Nom</font></th><th><font color='lightskyblue'>Type</font></th><th><font color='lightskyblue'>Description</font></th><th><font color='lightskyblue'>Depart</font></th><th><font color='lightskyblue'>Arriver</font></th><th><font color='lightskyblue'>Demande</font></th></font><th><font color='lightskyblue'>Collis</font></th></tr>";
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td><font color='whitesmoke'>" . $row["Nom"] . "</font></td>";
        echo "<td><font color='whitesmoke'>" . $row["email"] . "</font></td>";
        echo "<td><font color='whitesmoke'>" . $row["password"] . "</font></td>";
        echo "</tr>";
    }
    echo "</table>
    </center>";
} else {
    echo "Aucun collis trouvé dans la base de données.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>