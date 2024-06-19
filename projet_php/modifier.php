<?php
require('database.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['save'])) {
    $statement = $pdo->prepare('UPDATE stagiaires SET :id_stagiaires,:nom,:prenom,:cin,:age,:email,:adress,:pwd,:tele WHERE id_stagiaires = :id_stagiaires');
    $statement->execute([
        ':id_stagiaires'=>$id_stagiaires,
        ':nom'=>$nom,
        ':prenom'=>$prenom,
        ':cin'=>$cin,
        ':age'=>$age,
        ':email'=>$email,
        ':adress'=>$adress,
        ':pwd'=>$pwd,
        ':tele'=>$tele,
        
    ]);
    
    header('Location:afficher.php');


} 