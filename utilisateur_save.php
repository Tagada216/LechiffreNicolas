<?php 
$username = $_POST['user'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
try{
    $dbh = new PDO ('mysql:host=localhost;dbname=userdb','root');
    $sth = $dbh -> prepare('INSERT INTO users (username, pass ) VALUES (:username, :pass)');
    $sth->bindValue(':username', $username, PDO::PARAM_STR_CHAR);
    $sth->bindValue(':pass', $pass, PDO::PARAM_STR);
    $sth->execute();
}
catch(PDOException $e){
    echo "Erreur : ". $e->getMessage()." Line ".$e->getLine()." File  ".$e->getFile();
    die();
}

?>