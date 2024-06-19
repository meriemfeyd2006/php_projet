<?php 
require "database.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajouter'])){
        $id_stagiaires=$_POST['id_stagiaires'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $cin=$_POST['cin'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $adress=$_POST['adress'];
        $pwd=$_POST['pwd'];
        $tele=$_POST['tele'];
      
        
        if(!empty($id_stagiaires) || !empty($nom)|| !empty($prenom) || !empty($cin) || !empty($age) || !empty($email) || !empty($adress) || !empty($pwd) || !empty($tele) ){
            $statment = $pdo->prepare('INSERT INTO stagiaires (id_stagiaires,nom,prenom,cin,age,email,adress,pwd,tele) VALUES (:id_stagiaires,:nom,:prenom,:cin,:age,:email,:adress,:pwd,:tele)');
            $statment->execute([
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
            header('location:afficher.php');
            
        }
        
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center text-green-300 font-medium">Intern management</div>
             
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="connection.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">se connecter</a>
                  <a href="deconnecter.php" onclick="return confirm('voler vous deconnecter?')" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">se déconnecter</a>
                  <a href="s'inscrire.php"  class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">s'inscrire</a>
                  <a href="afficher.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">liste stagiaires</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
      
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" name="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="img/Ofppt.jpg" alt="">
                  </button>
                </div>
      
                
               
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
       
      </nav>
    <div class="flex items-center justify-center min-h-screen bg-gray-400">
    <div class="w-full max-w-lg">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_stagiaires">
                    ID Stagiaires
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="id_stagiaires" type="text" placeholder="ID Stagiaires">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                    Nom
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nom" type="text" placeholder="Nom">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">
                    Prénom
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="prenom" type="text" placeholder="Prénom">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cin">
                    CIN
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cin" type="text" placeholder="CIN">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                    Âge
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="age" type="number" placeholder="Âge">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pwd">
                    mot de passe
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="pwd" type="password" placeholder="*******">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse">
                    Adresse
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="adress" type="text" placeholder="Adresse">
            </div>
          
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tele">
                    Téléphone
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tele" type="text" placeholder="Téléphone">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="ajouter">
                    Ajouter
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2024 Votre Société. Tous droits réservés.
        </p>
    </div>
    </div>
</body>
</html>
