// Paramètres de connexion 
$serveur = 'localhost';
$utilisateur = "root"; 
$motdepasse = ""; 
$base = "Demande"; 


// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// Vérifier la connexion
if (!$connexion) {
    die("Erreur : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}

$nom = $_POST['name']; 
$email = $_POST['email']; 
$password = $_POST['password']; 

// Requête SQL pour insérer les données dans la table Collie
$sql = "INSERT INTO Collie(Nom, tel, Email, Depart, Arriver, Description, Type) 
        VALUES('$nom', '$email', '$password')";

// Exécution de la requête SQL
if (mysqli_query($connexion, $sql)) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($connexion);
}

// Fermeture de la connexion
mysqli_close($connexion);
?>