<?php
$servername = "localhost";
$dbase = "newsletter";
$username = "root";
$password = "root";


try {
    $conn = new PDO("mysql:host=$servername;dbname=newsletter", $username, $password);
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
            echo "<a href= './accueil.html'>Aller à la page d'accueil'</a> ";
        }
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>