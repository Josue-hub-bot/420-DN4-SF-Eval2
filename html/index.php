<?php
// Vérifie la connexion à la base de données MySQL
$servername = "mysql";
$username = "user";
$password = "userpassword";
$dbname = "testdb";

try {
    // Créer une connexion
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode de gestion des erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbStatus = "Connexion réussie à la base de données!";
}
catch(PDOException $e) {
    $dbStatus = "La connexion a échoué: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Evaluation 2 </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 2rem auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bienvenue sur notre application PHP et MySQL</h1>
    </header>

    <div class="container">
        <h2>Status de la connexion à la base de données</h2>
        <p><?php echo $dbStatus; ?></p>
    </div>

    <footer>
        <p>&copy; 2026 Mon Projet PHP</p>
    </footer>

</body>
</html>
