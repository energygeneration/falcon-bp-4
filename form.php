<?php
$servername = "mysql-groupefalcon.alwaysdata.net";
$dbase = "groupefalcon_egrefonte";
$username = "275800";
$password = "dw97171391";

try {
    //connection à la BDD

    $dbco = new PDO("mysql:host=$servername;dbname=groupefalcon_egrefonte", $username, $password);
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

    if ($dbco) {
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
