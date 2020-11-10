<?php

session_start();
include('functions.php');

if (empty ($_SESSION['panier'])){
    echo "Le panier est vide.";
}

if (isset ($_POST['idModifierQuantite'])){
    modifierQuantite();
}

if (isset ($_POST['idSupprimerArticle'])){
    supprArticle();

// var_dump ($_POST['idSupprimerArticle']);
}

if (isset ($_POST["viderPanier"])){
    viderPanier();
}

// var_dump ($_SESSION["panier"]);



?>

<!DOCTYPE html>
    <html lang="fr">

        <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

            <title>La Bonne Chaise</title>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
        
        

        </head>

        <body>

            <header>

                <?php
                    include("navbar.php");
                ?>

            </header>

            <main>

                <?php

                    showPanier("panier.php");
                    afficherBoutons();
                    affichageTotalArticles();
                     
                ?>



            </main>
        
        </body>

        <!-- BOOTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 
 </html>