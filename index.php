<?php
session_start();
include('functions.php');
?>

<!DOCTYPE html>
    <html lang="fr">

        <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

            <title>La Bonne Chaise</title>
        
        

        </head>

        <body>

            <header>



                <h1>La Bonne Chaise</h1>

            </header>

            <main>

            <?php
                $listeArticles = getArticles();

                showArticles($listeArticles);
                    
                

            ?>



            </main>
        
        </body>
 
 </html>