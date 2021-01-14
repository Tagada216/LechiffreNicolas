<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Découverte PHP</title>
    <meta charset="utf-8">
    <?php require("Morpionfunctions.php") ?>
</head>

<body>


    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <form action="utilisateur_save.php" method="post">
                    <div class="form-group">
                        <p>Nom : <input type="text" name="nom" /></p>
                        <p>Prénom : <input type="text" name="prenom" /></p>
                        <p>Utilsateur : <input type="text" name="user" /></p>
                        <p>Mot de passe: <input type="password" name="password" /></p>
                    </div>
                    <p><input class="btn btn-primary" type="submit" value="Se connecter"></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>