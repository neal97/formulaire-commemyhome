<?php
session_start();

// Récupérer les données de la session
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

// Supprimer les données de la session après utilisation
unset($_SESSION['prenom']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>

    <h1>Merci !</h1>

    <p>Prénom : <?php echo $prenom; ?></p>
    <p>Nom : <?php echo $name; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <p>Mot de passe : <?php echo $password; ?></p>

</body>
</html>
