<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Accueil - Les Kyartes</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['pseudo'])){
            $_SESSION['pseudo'] = $_POST['pseudo'];
        }
    ?>
    <a href="index.php" style="text-decoration: none;">
        <div class="boite">
            <h1>Les Kyartes</h1>
        </div>
    </a>
    <hr>
    <div class="boite" style="background-color:rgb(154, 205, 50, 0.6);">
        <a href="create.html" style="color:black">
            <h2>Creer un deck</h2>
        </a>
        <a href="edit.html" style="color:black">
            <h2>Editer un deck</h2>
        </a>
        <a href="choix.html" style="color:yellow">
            <div class="boite" style="background-color: blueviolet;">
                <h2>Jouer !</h2>
            </div>
        </a>
    </div>
    <div class="boite" style="background-color:rgb(154, 205, 50, 0.6);">
        <h2>Se connecter :</h2>
    </div>
</body>
</html>
