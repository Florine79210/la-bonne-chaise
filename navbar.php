               <!-- NAVBAR -->
<!-- =========================================================================================================================================================================================================== -->

<nav class="navbar navbar-expand-lg fixed-top d-flex">

    <h1 class="p-3 mr-3 ml-3">La Bonne Chaise</h1>

    <button class="navbar-toggler" id="hamburger" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link p-3 mr-4 ml-4" href="index.php"><span>Acceuil</span></a>
            <a class="nav-link p-3 mr-4 ml-4" href="panier.php"><span>Panier<span>(<?php echo nbrArticlesPanier(); ?>)</span></span></a>
        </div>
    </div>

</nav>
