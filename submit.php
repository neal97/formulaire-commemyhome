<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation des données
    
    $name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : '';
    $prenom = isset($_POST["prenom"]) ? htmlspecialchars(trim($_POST["prenom"])) : '';
    $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) : '';
    $password = isset($_POST["password"]) ? htmlspecialchars(trim($_POST["password"])) : '';

    // Vérification de la validité de l'e-mail
    if ($email === false) {
        // Gérer l'erreur d'e-mail invalide
        $_SESSION['error'] = 'email';
        header("Location: index.html");
        exit();
    }

    // Stockage des données dans la session
    
    $_SESSION['name'] = $name;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;


    // Redirection vers une autre page après le traitement du formulaire
    header("Location: confirmation.php");
    exit();
}
?>
