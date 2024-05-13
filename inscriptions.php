<?php
// Connexion à la base de données
$servername = "localhost"; // Changez ceci si votre base de données est hébergée ailleurs
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données (laissez vide s'il n'y en a pas)
$database = "esso_plus"; // Le nom de votre base de données

// Connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
  die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les valeurs du formulaire
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Préparation de la requête SQL pour insérer les données dans la table
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    // Redirection vers une page de confirmation
    header("Location: retour.php");
    exit();
  } else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
  }
}

// Fermer la connexion à la base de données
$conn->close();
?>
