<?php
require 'database.php';
$statement = $pdo->prepare('SELECT * FROM stagiaires');
$statement->execute([]);
$stagiaires = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Stagiaires</title>
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
                  <a href="s'inscrire.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">s'inscrire</a>
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
                  <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
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
        <div class="sm:hidden" id="mobile-menu">
          <div  class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
          </div>
        </div>
      </nav>
<div class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Liste des Stagiaires</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-200 border border-green-200">
                <thead>
                    <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID Stagiaires</th>
                        <th class="py-3 px-6 text-left">Nom</th>
                        <th class="py-3 px-6 text-left">Prénom</th>
                        <th class="py-3 px-6 text-left">CIN</th>
                        <th class="py-3 px-6 text-left">Âge</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">mot de passe</th>
                        <th class="py-3 px-6 text-left">Adresse</th>
                        <th class="py-3 px-6 text-left">Téléphone</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                </thead>
                  
                <tbody class="text-o-600 text-sm font-light">
                    <?php foreach($stagiaires as $stagiaire):?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['id_stagiaires']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['nom']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['prenom']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['cin']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['age']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['email']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['pwd']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['adress']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo  $stagiaire['tele']; ?></td>
                        <td><form action="supprimer.php" method="post">
                            <input type="hidden" name="id_stagiaires" value="<?php echo $stagiaire['id_stagiaires']?>">
                            <button onclick="confermation(event)"  class="bg-red-400 hover:bg-red-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="supprimer" >Supprimer</button>
                            </form>
                            <form action="modification.php" method="POST">
                              <input type="hidden" name="id_stagiaires" value="<?php echo $post['id_stagiaires']; ?>">
                              <input type="hidden" name="_method" value="update">
                              <input type="submit"  class="text-white bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="modifier">

            </form>

                        </td>
                    </tr>
                   <?php endforeach;?>
                    <!-- Ajoutez d'autres lignes ici -->
                </tbody>
            </table>
            <button class="bg-green-500 hover:bg-green-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            <a href="s'inscrire.php">Ajouter</a>
                        </button>
        </div>
    </div>
</div>
<script>
  function confermation(event){
    if(!confirm("confermer la suppression des informations")){
      event.preventDefault()
    }
  }
</script>

</body>
</html>
