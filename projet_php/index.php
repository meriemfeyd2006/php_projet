<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      .img img{
        width: 1300px;
        height: 530px;
      }
      .cont{
        position: relative;
      }
      .para1{
        position: absolute;
         bottom: 380px;
         color: white;
         left: 60px;
         font-size: 50px;
         font-family: Arial Rounded MT Bold;
         font-weight: 600;

        }
        span{
          color: rgb(104, 236, 163);
        }
        .para2{
        position: absolute;
         bottom: 250px;
         color: white;
         left: 70px;
         font-family: Arial Rounded MT Bold;
        }
        p{
          position: absolute;
          bottom: 220px;
          color: white;
          left: 80px;
        }
      
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-black">
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
    <div class="cont">
      <div class="img"><img src="img/Green.jpg" alt="" >
          <div class="para1"><span>Intern</span>Management</div>
          <div class="para2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum <br>
            praesentium nulla reprehenderit sunt, tenetur atque, est natus <br>
          delectus odit quod quo id quidemnihil exercitationem numquam <br>
          iste omnis? Dolores, reprehenderit.</div>
        
      </div>
    </div>
    <p class="text-center text-gray-500 text-xs">
            &copy;2024 Votre Société. Tous droits réservés.
        </p>
</body>
</html>