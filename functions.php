<?php

function getArticles() {

    return $liste = [
        "article 1" => ["id" => "1", "name" => "Füt'Hürr", "picture" => "chaise-fut-hurr.jpg", "description" => "Moulée dans un seul bloc de polypropylène, la chaise design Füt'Hürr donnera un aspect résolument moderne et futuriste à votre décoration intérieure.",
                        "descriptionDetaillee" => "Ses courbes associées font de la chaise Füt'Hürr un modèle du genre. La forme ergonomique de son siège vous offre un excellent confort d'assise. Si vous souhaitez meubler un intérieur moderne ou design,
                        cette chaise est faite pour vous ! Petit plus, légère et empilable, elle peut également être utilisée sur votre terrasse ou dans votre jardin.",
                        "price" => 149.99],
        "article 2" => ["id" => "2", "name" => "Rusticae", "picture" => "chaise-rusticae.jpg", "description" => "La chaise Rusticae est une création française de qualité. Elle possède un look hors du temps, très nature et élégant qui s'accorde parfaitement avec tous les styles d'interieur.",
                        "descriptionDetaillee" => "Cette chaise française se distingue par sa robustesse. Elle possède un dossier et une assise en lin ainsi qu'une épaisse structure en bois flotté qui se veut rassurente et rustique. 
                        Cette chaise est idéale pour apporter une authenticité accrue à votre déco.",
                        "price" => 249.99],
        "article 3" => ["id" => "3", "name" => "Wave", "picture" => "chaise-wave.jpg", "description" => "Chaleureuse, séduisante et tendance, la chaise en tissu Wave est un fructueux mélange entre modernité et confort.",
                        "descriptionDetaillee" => "Envie de douceur dans votre intérieur ? Ne cherchez pas plus longtemps, la chaise Wave sera votre meuble idéal ! Un dossier haut avec une base entourante pour un maintien optimal, 
                        un tissu agréable et chaleureux ainsi qu'une assise rembourrée ... Tous les atouts sont là pour vous offrir un confort des plus délectables. Ses lignes épurées ne vous décevront pas non plus. Cette chaise 
                        confortable s'accommodera aisément dans les intérieurs contemporains ou modernes et vous fera passer un bon moment de détente et de convivialité ! A noter que la housse est déhoussable afin de faciliter son entretien.",
                        "price" => 199.99],
        "article 4" => ["id" => "4", "name" => "Whirlwind", "picture" => "chaise_whirlwind.jpg", "description" => "Conçue par notre équipe de designers, la chaise Whirlwind incarne le parfait compromis entre design et confort.",
                        "descriptionDetaillee" => "La chaise design Whirlwind trouvera sa place aussi bien dans un séjour, un salon ou un bureau. La conception de sa coque a été pensée dans les moindres détails afin d'offrir un excellent confort à ses utilisateurs.
                        En effet, moulée dans un bloc de polypropylène, sa coque possède de jolies courbes. Son piétement en granit brut est également pivotant, ce qui garantit une liberté de mouvement.",
                        "price" => 299.99]
    ];
}

function showArticles($listeArticles){

    foreach ($listeArticles as $article){

        echo "<div class=\"container mt-5 mb-5 p-3 fiche_article\">";
            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6\">";

                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";
                            echo "<h2>" .  $article["name"] . "<h2>\n";
                        echo "</div>";
                    echo "</div>";
                        
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";    
                            echo "<p>" . $article["description"] . "<p>\n";
                        echo "</div>";
                    echo "</div>";                
                    
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";        
                            echo "<p>Prix unitaire : " . $article["price"] . " €<p>\n";
                        echo "</div>";
                    echo "</div>";        

                    echo "<div class=\"row\">";

                        echo "<div class=\"col-md-6\">";
                        echo "<form action=\"index.php\" method=\"post\">";         
                            echo "<input type=\"hidden\" name= \"idEnvoiAjoutPanier\" value=\"" . $article["id"] . "\">";
                            echo "<input type=\"submit\" name=\"ajoutPanier\" value=\"Ajouter au panier\">";
                        echo "</form>";
                        echo "</div>";

                        echo "<div class=\"col-md-6\">";
                        echo "<form action=\"produits.php\" method=\"post\">";         
                            echo "<input type=\"hidden\" name= \"idDetailsproduit\" value=\"" . $article["id"] . "\">";
                            echo "<input type=\"submit\" name=\"detailsProduit\" value=\"Détails du produit\">";
                        echo "</form>";
                        echo "</div>";

                    echo "</div>";

                echo "</div>";  

                echo "<div class=\"col-md-6\">";
                    echo "<img class=\"image_article\" src=\"images/" . $article["picture"] . "\">";
                echo "</div>"; 
                
            echo "</div>"; 
        echo "</div>";  
    }                
}

function showArticleDetails($article){

        echo "<div class=\"container\">";
            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6\">";

                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";
                            echo "<h2>" .  $article["name"] . "<h2>\n";
                        echo "</div>";
                    echo "</div>";
                        
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";    
                            echo "<p>" . $article["description"] . "<p>\n";
                            echo "<p>" . $article["descriptionDetaillee"] . "<p>\n";
                        echo "</div>";
                    echo "</div>";                
                    
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";        
                            echo "<p>Prix unitaire : " . $article["price"] . " €<p>\n";
                        echo "</div>";
                    echo "</div>";        

                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";
                        echo "<form action=\"index.php\" method=\"post\">";         
                            echo "<input type=\"hidden\" name= \"idEnvoiAjoutPanier\" value=\"" . $article["id"] . "\">";
                            echo "<input type=\"submit\" name=\"ajoutPanier\" value=\"Ajouter au panier\">";
                        echo "</form>";
                        echo "</div>";
                    echo "</div>";

                echo "</div>";  

                echo "<div class=\"col-md-6\">";
                    echo "<img src=\"images/" . $article["picture"] . "\">";
                echo "</div>"; 
                
            echo "</div>"; 
        echo "</div>";                 
}


function getArticleFromId($listeArticles, $id){

    foreach ($listeArticles as $article){

        if ($article["id"] == $id){
            return $article;
        }
    }
}

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

function showPanier($nomDePage){

    foreach ($_SESSION["panier"] as $article){

        echo "<div class=\"container\">";
            echo "<div class=\"row\">";
                
                echo "<div class=\"col-md-8\">";
                    
                    echo "<h2>" .  $article['name'] . "<h2>\n";
                    echo "<img src=\"images/" . $article['picture'] . "\">";

                echo "</div>";
                             
                echo "<div class=\"col-md-4\">";

                    echo "<div class=\"row\">";       
                        echo "<div class=\"col-md-12\">";
                            echo "<p>Prix unitaire : " . $article["price"] . " €<p>\n"; 
                        echo "</div>";
                    echo "</div>";

                    echo "<div class=\"row\">";
                        echo "<form action=\"".$nomDePage."\" method=\"post\">";
                            echo "<div class=\"col-md-12\">";
                                echo "<input type=\"number\" name=\"nouvelleQuantite\" min=\"1\" max=\"12\" value=\"" .$article['quantite']. "\">";
                                echo "<input type=\"hidden\" name=\"idModifierQuantite\" value=\"" .$article['id']. "\">";    
                                echo "<button type=\"submit\"> modifier </button>";  
                            echo "</div>";
                        echo "</form>";    
                    echo "</div>";

                    echo "<div class=\"row\">";       
                        echo "<div class=\"col-md-12\">";
                            echo "<form action=\"".$nomDePage."\" method=\"post\">";
                                echo "<input type=\"hidden\" name=\"idSupprimerArticle\" value=\"" .$article['id']. "\">";  
                                echo "<button type=\"submit\"> Supprimer l'article </button>"; 
                            echo "</form>";
                        echo "</div>"; 
                    echo "</div>"; 
                        
                echo "</div>";

            echo "</div>"; 
        echo "</div>";  

    }
}



function modifierQuantite(){

    $idModifierQuantite = $_POST["idModifierQuantite"];

        for ($i = 0; $i < count($_SESSION['panier']); $i++){

            if ($_SESSION['panier'][$i]['id'] == $idModifierQuantite){
                $_SESSION['panier'][$i]['quantite'] = $_POST['nouvelleQuantite'];
            }
        }
}
 

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


function afficherBoutons(){

        if (!empty($_SESSION["panier"])){

            echo "<div class=\"container\">";
                echo "<div class=\"row\">";

                    echo "<div class=\"col-md-6\">";
                        echo "<a href=\"validation.php\">";
                            echo "<button> Valider le panier </button>"; 
                        echo "</a>";   
                    echo "</div>";

                    echo "<div class=\"col-md-6\">";
                        echo "<form action=\"index.php\" method=\"post\">";
                            echo "<input type=\"hidden\" name=\"viderPanier\" value=\"true\">";
                            echo "<button type=\"submit\"> Vider le panier </button>";    
                        echo "</form>";
                    echo "</div>";

                echo "</div>";
            echo "</div>";  
        }
}



function viderPanier(){

        $_SESSION['panier'] = array();
       
        echo "<script> alert(\"Le panier est vide.\");</script>";   

}


function annulerLaCommande(){

    $_SESSION['panier'] = array();  
}

function validerLaCommande(){

    $_SESSION['panier'] = array();
}


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
        echo "Total des achats : " . $totalArticles . " €\n";
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
        echo "Total des frais de port : " . $totalFraisPort . " €\n";
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
        echo "Total à régler : " . $totalARegler . " €\n";
    }
}

?>