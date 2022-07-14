<?php
$servername = "mysql-groupefalcon.alwaysdata.net";
$dbase = "groupefalcon_egrefonte";
$username = "275800";
$password = "dw97171391";


try {
    $conn = new PDO("mysql:host=$servername;dbname=groupefalcon_egrefonte", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

    //recuperation des valeurs saisie par le user
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $condition = $_POST['condition'];

    if (isset($conn)) {
        if (empty($nom && $email && $condition )) {
            echo 'vous devez remplir tous les champs';
        } else {
            $sql = "INSERT INTO membres (names, email, nos_conditions)
            VALUES ('$nom', '$email', '$condition')";
            $conn->exec($sql);
            echo "Merci de vous être abonné!";
            echo "<a href= './index.html'>Revenir sur la page d'accueil</a> ";
        }
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>