<?php
require('database.php');
$post = ['id_stagiaires' => '', 'nom' => '', 'prenom' => '','cin' => '', 'age' => '', 'email' => '','pwd' => '', 'adress' => '', 'tele' => ''];
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['_method']) && $_POST['_method'] === 'update') {
    $statement = $pdo->prepare('SELECT * FROM stagiaires WHERE id_stagiaires = :id_stagiaires');
    $statement->execute([':id_stagiaires' => $_POST['id_stagiaires']]);
    $post = $statement->fetch(PDO::FETCH_ASSOC);
} 


?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="heading text-center font-bold text-3xl m-5 text-yellow-500">New Post</div>
    <style>
        body {background:white !important;}
    </style> 
                                                                                                                           
    <form action="modification.php" method="POST">
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
        <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="id_stagiaires" type="number" name="id_stagiaires" value="<?php echo $post['id_stagiaires']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="nom" type="text" name="nom" value="<?php echo $post['nom']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="prenom" type="text" name="prenom" value="<?php echo $post['prenom']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="cin" type="text" name="cin" value="<?php echo $post['cin']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="age" type="number" name="age" value="<?php echo $post['age']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="email" type="email" name="email" value="<?php echo $post['email']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="pwd" type="password" name="pwd" value="<?php echo $post['pwd']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="adress" type="text" name="adress" value="<?php echo $post['adress']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="tele" type="number" name="tele" value="<?php echo $post['tele']; ?>">
           

            <!-- icons -->
            <div class="icons flex text-gray-500 m-2">
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
                <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
            </div>
            <!-- buttons -->
            <div class="buttons flex">
                <input type="submit" class="btn border bg-blue-500 hover:bg-blue-600 border-blue-300 p-1 px-4 font-semibold cursor-pointer ml-auto" value="Save" name="save">
                <input class="btn border border-yellow-500 hover:bg-yellow-700 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-yellow-500" type="submit" value="Post">
            </div>
        </div>
    </form>
</body>
</html>