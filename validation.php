<?php

session_start();
include('functions.php');

if (isset ($_POST['idModifierQuantite'])){
    modifierQuantite();
}

if (isset ($_POST['idSupprimerArticle'])){
    supprArticle();

// var_dump ($_POST['idSupprimerArticle']);
}

if (isset ($_POST["annulerCommande"])){
    annulerLaCommande();
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
                
                    showPanier("validation.php");
                    affichageTotalArticles();
                    affichageTotalFraisPort();
                    affichageTotalARegler();

                ?>


    <!-- BTN VALIDER LA COMMANDE -->
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalValidation">
                  Valider la commande
                </button>

                <div class="modal" id="modalValidation" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Félicitation !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <p>La commande à été validée.</p>
                                <br>
                                <?php
                                    echo "<p>Votre commande sera expédié <br> le ". date('d-m-Y', strtotime(date('d-m-Y') . ' + 3 days')). "</p>"
                                ?>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">

                                <form action="index.php" method="post">
                                    <input type="hidden" name="validerCommande">
                                    <button type="submit" class="btn btn-primary">Revenir à l'Accueil</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>               


    <!-- BTN ANNULER LA COMMANDE -->
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAnnulation">
                  Annuler la commande
                </button>

                <div class="modal" id="modalAnnulation" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> ! Attention !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Êtes-vous sûr de vouloir<br>ANNULER la commande ?</p>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">

                            <form action="validation.php" method="post">
                                    <input type="hidden" name="nePasAnnulerCommande">
                                    <button type="submit" class="btn btn-primary">Non<br>Revenir à la Commande</button>
                                </form>

                                <form action="index.php" method="post">
                                    <input type="hidden" name="annulerCommande">
                                    <button type="submit" class="btn btn-primary">Oui<br>Revenir à l'Accueil</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>               

            </main>
        
        </body>

        <!-- BOOTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </html>