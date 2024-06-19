<?php 
require "database.php";



if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['supprimer'])){
    $id_stagiaires = $_POST['id_stagiaires'];
    $statment=$pdo->prepare('DELETE FROM stagiaires WHERE id_stagiaires=:id_stagiaires');
    $statment->execute([":id_stagiaires" => $id_stagiaires]);
    header('location:afficher.php');
}
?>
        
    