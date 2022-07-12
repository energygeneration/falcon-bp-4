<?php

$serveur = "localhost";
$dbname = "Inscription";
$user = "root";
$pass = "root";

try {
    //connection à la BDD

    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $prenom = $_POST["first_name"];
    $nom = $_POST["last_name"];
    $gen = $_POST["genre"];
    $mail = $_POST["mail"];
    $confmail = $_POST["confirm_mail"];
    $telphone = $_POST["tel"];
    $pays = $_POST["country"];
    $scholarlevel = $_POST["grade"];
    $theme = $_POST["program"];
    $theme = $_POST["campus"];

    if (isset($prenom) && isset($nom) && isset($gen) && isset($mail) && isset($confmail) && isset($telphone) && isset($pays) && isset($scholarlevel) && isset($theme) && isset($theme)) {
        if ($mail === $confmail) {
            // stockage des données
            $sql = "INSERT INTO fiche_inscription (prenom, nom, genre, email,email_confirmation, numero_téléphone, pays, niveau, thématique_choisie, campus_préféré )

            VALUES ('$prenom', '$nom', '$gen', '$mail', '$confmail', '$telphone', '$pays', '$scholarlevel', '$theme', '$camp')";
            $dbco->exec($sql);
            echo "New record created successfully";
        } else {
            //données incorrect
            echo "the emails are not identical";
        }
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$conn = null;