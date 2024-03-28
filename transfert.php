<?php
// Vérifier si des données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données soumises du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Afficher les données soumises
    echo "<h2>Données soumises :</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>E-mail :</strong> $email</p>";
    echo "<p><strong>Message :</strong> $message</p>";

    // Vous pouvez ajouter ici le code pour traiter les données (envoi par e-mail, enregistrement dans une base de données, etc.)
} else {
    // Si aucune donnée n'a été soumise, afficher un message d'erreur
    echo "<h2>Erreur :</h2>";
    echo "<p>Aucune donnée soumise.</p>";
}
?>