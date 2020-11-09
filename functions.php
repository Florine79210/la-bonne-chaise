<?php

function getArticles() {

    return $liste = [
        "article 1" => ["id" => "1", "name" => "Füt'Hürr", "picture" => "chaise-fut-hurr.jpg", "description" => "description", "price" => "149,99€"],
        "article 2" => ["id" => "2", "name" => "Rusticae", "picture" => "chaise-rusticae.jpg", "description" => "description", "price" => "249,99€"],
        "article 3" => ["id" => "3", "name" => "Wave", "picture" => "chaise-wave.jpg", "description" => "description", "price" => "199,99€"],
        "article 4" => ["id" => "4", "name" => "Whirlwind", "picture" => "chaise_whirlwind.jpg", "description" => "description", "price" => "299,99€"]
    ];
}

function showArticles($listeArticles){

    foreach ($listeArticles as $article){

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
                        echo "</div>";
                    echo "</div>";                
                    
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-md-12\">";        
                            echo "<p>" . $article["price"] . "<p>\n";
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
                            echo "<p>Prix unitaire : " . $article["price"] . "<p>\n"; 
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
                        echo "<form action=\"panier.php\" method=\"post\">";
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

function validerVider(){

    if (!empty($_SESSION["panier"])){

        echo "<div class=\"container\">";
            echo "<div class=\"row\">";

                echo "<div class=\"col-md-6\">";
                    echo "<a href=\"validation.php\">";
                        echo "<button> Valider la commande </button>"; 
                    echo "</a>";   
                echo "</div>";

                echo "<div class=\"col-md-6\">";
                    echo "<form action=\"validation.php\" method=\"post\">";
                        echo "<input type=\"hidden\" name=\"annulerCommande\" value=\"true\">";
                        echo "<button type=\"submit\"> Annuler la commande </button>";    
                    echo "</form>";
                echo "</div>";

            echo "</div>";
        echo "</div>";  
    }
}

function annulerLaCommande(){

    $_SESSION['panier'] = array();
   
    echo "<script> alert(\"Vous avez annulé la commande.\");</script>";   

}



//  function totalProduit(){

//     for ($i = 0; $i < count($_SESSION['panier']); $i++){

//         $_SESSION['panier'][$i]['quantite'] * $_SESSION['panier'][$i]['price'];

//     }
// }




function totalPanier(){

    for ($i = 0; $i < count($_SESSION['panier']); $i++){
        $_SESSION['panier'][$i]['price'] + $_SESSION['panier'][$i]['price'];

        echo

}

// function totalARegler(){

// }

        


?>