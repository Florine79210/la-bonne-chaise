<?php


        // LISTE DES ARTICLES
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function getArticles() {

    return $liste = [
        "article 1" => ["id" => "1", "name" => "Füt'Hürr", "picture" => "chaise-fut-hurr.jpg", "description" => "Moulée dans un seul bloc de polypropylène, la chaise design Füt'Hürr donnera un aspect résolument moderne et futuriste à votre décoration intérieure.",
                        "descriptionDetaillee" => "Ses courbes associées font de la chaise Füt'Hürr un modèle du genre. La forme ergonomique de son siège vous offre un excellent confort d'assise. Si vous souhaitez meubler un intérieur moderne ou design,
                        cette chaise est faite pour vous !<br>Petit plus, légère et empilable, elle peut également être utilisée sur votre terrasse ou dans votre jardin.",
                        "price" => 149.99],
        "article 2" => ["id" => "2", "name" => "Rusticae", "picture" => "chaise-rusticae.jpg", "description" => "La chaise Rusticae est une création française de qualité. Elle possède un look hors du temps, très nature et élégant qui s'accorde parfaitement avec tous les styles d'interieur.",
                        "descriptionDetaillee" => "Cette chaise française se distingue par sa robustesse. Elle possède un dossier et une assise en lin ainsi qu'une épaisse structure en bois flotté qui se veut rassurente et rustique. 
                        Cette chaise est idéale pour apporter une authenticité accrue à votre déco.",
                        "price" => 249.99],
        "article 3" => ["id" => "3", "name" => "Wave", "picture" => "chaise-wave.jpg", "description" => "Chaleureuse, séduisante et tendance,<br>la chaise en tissu Wave est un fructueux<br>mélange entre modernité et confort.",
                        "descriptionDetaillee" => "Envie de douceur dans votre intérieur ?<br>Ne cherchez pas plus longtemps, la chaise Wave sera votre meuble idéal ! Un dossier haut avec une base entourante pour un maintien optimal, 
                        un tissu agréable et chaleureux ainsi qu'une assise rembourrée ... Tous les atouts sont là pour vous offrir un confort des plus délectables. Cette chaise confortable s'accommodera aisément dans les intérieurs
                        contemporains ou modernes et vous fera passer un bon moment de détente et de convivialité ! A noter que la housse est déhoussable afin de faciliter son entretien.",
                        "price" => 199.99],
        "article 4" => ["id" => "4", "name" => "Whirlwind", "picture" => "chaise_whirlwind.jpg", "description" => "Conçue par notre équipe de designers,<br>la chaise Whirlwind incarne le parfait compromis entre design et confort.",
                        "descriptionDetaillee" => "La chaise design Whirlwind trouvera sa place aussi bien dans un séjour, un salon ou un bureau. La conception de sa coque a été pensée dans les moindres détails afin d'offrir un excellent confort à ses utilisateurs.<br>
                        En effet, moulée dans un bloc de polypropylène, sa coque possède de jolies courbes. Son piétement en granit brut est également pivotant, ce qui garantit une liberté de mouvement.",
                        "price" => 299.99]
    ];
}


        // VOIR LES ARTICLES (PAGE D'ACCUEIL)
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function showArticles($listeArticles){

    foreach ($listeArticles as $article){

        echo "<div class=\"container mt-5 mb-5 p-5 fiche_article\">";
            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6 pl-5\">";

                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12 mb-5 text-center\">";
                            echo "<h2>" .  $article["name"] . "<h2>\n";
                        echo "</div>";
                    echo "</div>";
                        
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12 mb-5\">";    
                            echo "<p>" . $article["description"] . "<p>\n";
                        echo "</div>";
                    echo "</div>";                
                    
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12 mb-5\">";        
                            echo "<p>Prix unitaire : <span>" . $article["price"] . " €</span><p>\n";
                        echo "</div>";
                    echo "</div>";        

                    echo "<div class=\"row\">";

                        echo "<div class=\"col-md-6\">";
                        echo "<form action=\"index.php\" method=\"post\">";         
                            echo "<input type=\"hidden\" name= \"idEnvoiAjoutPanier\" value=\"" . $article["id"] . "\">";
                            echo "<input class=\"mt-3 pt-2 pr-3 pb-2 pl-3 btns btn-ajout-panier\"type=\"submit\" name=\"ajoutPanier\" value=\"Ajouter au panier\">";
                        echo "</form>";
                        echo "</div>";

                        echo "<div class=\"col-md-6\">";
                        echo "<form action=\"produit.php\" method=\"post\">";         
                            echo "<input type=\"hidden\" name= \"idDetailsproduit\" value=\"" . $article["id"] . "\">";
                            echo "<input class=\"mt-3 pt-2 pr-3 pb-2 pl-3 btns btn-details\" type=\"submit\" name=\"detailsProduit\" value=\"Détails du produit\">";
                        echo "</form>";
                        echo "</div>";

                    echo "</div>";

                echo "</div>";  

                echo "<div class=\"col-md-6 text-center\">";
                    echo "<img class=\"image_article\" src=\"images/" . $article["picture"] . "\">";
                echo "</div>"; 
                
            echo "</div>"; 
        echo "</div>";  
    }                
}


        // VOIR LES DETAILS D'UN ARTICLE (PAGE PRODUITS)
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function showArticleDetails($article){

        echo "<div class=\"container mt-5 mb-5 p-5 details_article\">";

            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6 pl-5\">";

                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12 mb-3\">";
                            echo "<h2>" .  $article["name"] . "<h2>\n";
                        echo "</div>";
                    echo "</div>";
                        
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12 mb-3\">";    
                            echo "<p>" . $article["description"] . "<p>\n";
                            echo "<p>" . $article["descriptionDetaillee"] . "<p>\n";
                        echo "</div>";
                    echo "</div>";                       

                echo "</div>";  

                echo "<div class=\"col-md-6\">";
                    echo "<img class=\" mt-4 pt-4 image_article\" src=\"images/" . $article["picture"] . "\">";
                echo "</div>"; 
                
            echo "</div>"; 

            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6  d-flex justify-content-center\">";
                    echo "<form action=\"index.php\" method=\"post\">";         
                        echo "<input type=\"hidden\" name= \"idEnvoiAjoutPanier\" value=\"" . $article["id"] . "\">";
                        echo "<input class=\"mt-3 pt-2 pb-2 text-center btns btn-ajout-panier type=\"submit\" name=\"ajoutPanier\" value=\"Ajouter au panier\">";
                    echo "</form>";
                echo "</div>";

                echo "<div class=\"col-md-6 mt-4 d-flex justify-content-center\">";        
                    echo "<p>Prix unitaire : <span>" . $article["price"] . " €</span><p>\n";
                echo "</div>";

            echo "</div>";

        echo "</div>";                 
}


// <-----Ajouter un article via son ID ---------------->

function getArticleFromId($listeArticles, $id){

    foreach ($listeArticles as $article){

        if ($article["id"] == $id){
            return $article;
        }
    }
}


// <-----Ajouter un article au panier ---------------->

function ajoutPanier($article){

    $articleAjoute = false;

    foreach ($_SESSION["panier"] as $articlePanier){
        if ($articlePanier ["id"] == $article ["id"]){
            echo "<script> alert(\"Article déjà présent dans le panier !\");</script>";
            $articleAjoute = true;
        }
    }

    if (!$articleAjoute){
        $article['quantite'] = 1;
        array_push($_SESSION['panier'], $article);
    }
}


        // VOIR LE PANIER (PAGE PANIER & VALIDATION)
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function showPanier($nomDePage){

    foreach ($_SESSION["panier"] as $article){

        echo "<div class=\"container mt-5 mb-5 pt-3 pb-3 voir_panier\">";
            echo "<div class=\"row align-items-center\">";
                
                echo "<div class=\"col-md-4 text-center\">";
                    
                    echo "<h2 class=\"mb-3\">" .  $article['name'] . "<h2>\n";
                    echo "<img class=\"image_article\" src=\"images/" . $article['picture'] . "\">";

                echo "</div>";
                             
                echo "<div class=\"col-md-4\">";

                    echo "<div class=\"row mb-4 justify-content-center\">";       
                            echo "<p>Prix unitaire : <span>" . $article["price"] . " €</span><p>\n"; 
                    echo "</div>";

                    
                    
                    echo "<div class=\"row justify-content-center\">";
                        echo "<form class=\"form-row\" action=\"".$nomDePage."\" method=\"post\">";
                                echo "<p class=\"mt-2 mr-2\" >Quantité :<p>";
                                echo "<input type=\"hidden\" name=\"idModifierQuantite\" value=\"" .$article['id']. "\">"; 
                                echo "<input class=\"mr-3 btn-saisie-nbr\" type=\"number\" name=\"nouvelleQuantite\" min=\"1\" max=\"12\" value=\"" .$article['quantite']. "\">";   
                                echo "<button class=\" pt-2 pr-3 pb-2 pl-3 btns btn_modif\" type=\"submit\"> Modifier </button>";
                        echo "</form>";    
                    echo "</div>";

                echo "</div>";

                echo "<div class=\"col-md-4 text-center\">";
                    echo "<form action=\"".$nomDePage."\" method=\"post\">";
                        echo "<input type=\"hidden\" name=\"idSupprimerArticle\" value=\"" .$article['id']. "\">";  
                        echo "<button class=\" pt-2 pr-3 pb-2 pl-3 btns btn_suppr\" type=\"submit\"> Supprimer l'article </button>"; 
                    echo "</form>";
                echo "</div>"; 
                    
            echo "</div>"; 
        echo "</div>";  
    }
}


// <-----Modifier la quantité d'un article ---------------->

function modifierQuantite(){

    $idModifierQuantite = $_POST["idModifierQuantite"];

        for ($i = 0; $i < count($_SESSION['panier']); $i++){

            if ($_SESSION['panier'][$i]['id'] == $idModifierQuantite){
                $_SESSION['panier'][$i]['quantite'] = $_POST['nouvelleQuantite'];
            }
        }
}
 

// <-----Supprimer un article ---------------->

 function supprArticle(){

        for ($i = 0; $i < count($_SESSION['panier']); $i++){

            if ($_SESSION['panier'][$i]['id'] == $_POST["idSupprimerArticle"]){
                array_splice($_SESSION['panier'], $i, 1);
                
                echo "<script> alert(\"Article retiré du panier\");</script>";
            } 

            if (empty ($_SESSION['panier'])){
                echo "Le panier est vide.";
            }
        }
 }


// <-----Afficher les boutons Valider & Vider le panier (PAGE PANIER) ---------------->

function afficherBoutons(){

        if (!empty($_SESSION["panier"])){

            echo "<div class=\"container mt-5 mb-5 valider_vider\">";
                echo "<div class=\"row\">";

                    echo "<div class=\"col-md-6 text-center\">";
                        echo "<a href=\"validation.php\">";
                            echo "<button class=\"pt-2 pr-3 pb-2 pl-3 btns btn_valider\"> Valider le panier </button>"; 
                        echo "</a>";   
                    echo "</div>";

                    echo "<div class=\"col-md-6 text-center\">";
                        echo "<form action=\"index.php\" method=\"post\">";
                            echo "<input type=\"hidden\" name=\"viderPanier\" value=\"true\">";
                            echo "<button  class=\"pt-2 pr-3 pb-2 pl-3 btns btn_vider\"type=\"submit\"> Vider le panier </button>";    
                        echo "</form>";
                    echo "</div>";

                echo "</div>";
            echo "</div>";  
        }
}


// <-----Vider le Panier ---------------->

function viderPanier(){

        $_SESSION['panier'] = array();
       
        echo "<script> alert(\"Le panier est vide.\");</script>";   

}


// <-----Annuler & Valider la commande ---------------->

function annulerLaCommande(){

    $_SESSION['panier'] = array();  
}

function validerLaCommande(){

    $_SESSION['panier'] = array();
}


// <-----Calculs et affichages pour le Panier ---------------->

function nbrArticlesPanier(){

    $nbrArticlesPanier = 0;

    for ($i = 0; $i < count($_SESSION['panier']); $i++){
        $nbrArticlesPanier += intval($_SESSION['panier'][$i]['quantite']);
    }
    return $nbrArticlesPanier;
}

function totalArticles(){

    $totalArticles = 0;

    for ($i = 0; $i < count($_SESSION['panier']); $i++){
        $totalArticles += $_SESSION['panier'][$i]['price'] * intval($_SESSION['panier'][$i]['quantite']);
    }
    return $totalArticles;
}

function affichageTotalArticles(){
    $totalArticles = totalArticles();

    if ($_SESSION['panier']) {
        $totalArticles = number_format($totalArticles, 2, ',', ' ');
        echo "<p class=\"text-center totals total_articles\">Total des achats : <span>" . $totalArticles . " €</span></p>";
    }
}

function totalFraisPort(){
    $totalFraisPort = 0;

    for ($i = 0; $i < count($_SESSION['panier']); $i++){
        $totalFraisPort += 12.49 * intval($_SESSION['panier'][$i]['quantite']);
    }
    return $totalFraisPort;
}

function affichageTotalFraisPort(){
    $totalFraisPort = totalFraisPort();

    if ($_SESSION['panier']) {
        $totalFraisPort = number_format($totalFraisPort, 2, ',', ' ');
        echo "<p class=\"text-center totals\">Total des frais de port : <span>" . $totalFraisPort . " €</span></p>";
    }
}

function totalARegler(){
    
    $totalArticles = totalArticles();
    $totalFraisPort = totalFraisPort();

    return $totalArticles + $totalFraisPort;
}

function affichageTotalARegler(){
    $totalARegler = totalARegler();

    if ($_SESSION['panier']) {
        $totalARegler = number_format($totalARegler, 2, ',', ' ');
        echo "<p class=\"text-center total_a_regler\">Total à régler : <span>" . $totalARegler . " €</span></p>";
    }
}

?>