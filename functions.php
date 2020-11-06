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
        echo "<form action=\"index.php\" method=\"post\">";

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
                            echo "<input type=\"submit\" name=\"ajoutPanier\" value=\"Ajouter au panier\">";
                            echo "<input type=\"hidden\" name= \"idEnvoiAjoutPanier\" value=\"" . $article["id"] . "\">";
                        echo "</div>";
                    echo "</div>";

                echo "</div>";  

                echo "<div class=\"col-md-6\">";
                    echo "<img src=\"images/" . $article["picture"] . "\">";
                echo "</div>"; 
                
            echo "</div>"; 

        echo "</form>";
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
        $article["quantité"] = 1;
        array_push($_SESSION["panier"], $article);
    }
  
}

function showPanier(){

    foreach ($_SESSION["panier"] as $article){

        echo "<div class=\"container\">";

            echo "<div class=\"row\">";

                echo "<div class=\"col-md-10\">";

                    echo "<div class=\"row\">";
                        echo "<form action=\"index.php\" method=\"post\">";

                            echo "<div class=\"col-md-5\">";
                                echo "<h2>" .  $article['name'] . "<h2>\n";
                                echo "<img src=\"images/" . $article['picture'] . "\">";
                            echo "</div>";
                             
                            echo "<div class=\"col-md-5\">";
                                echo "<p>Prix unitaire : " . $article["price"] . "<p>\n";  
                                echo "<input type=\"number\" name=\"quantité\" min=\"1\" max=\"12\" value= \"" . $article ["quantité"] . "\">";
                                echo "<input type=\"hidden\" name=\"idmodifierQuantité\" value=\"?\">";      
                            echo "</div>";

                        echo "</form>";
                    echo "</div>";

                echo "<div class=\"col-md-2\">";
                    echo "<form action=\"index.php\" method=\"post\">";
                        echo "<input type=\"submit\" name=\"suprimer\" value=\"Suprimer l'article\">";
                        echo "<input type=\"hidden\" name=\"idSuprimerArticle\" value=\"?\">";
                    echo "</form>";
                echo "</div>";  

            echo "</div>"; 

        echo "</div>";  

    }
}

function afficherBoutons(){

        if (!empty($_SESSION["panier"])){

            echo "<div class=\"container\">";

                echo "<div class=\"row\">";
                    echo "<div class=\"col-md-6\">";
                        echo "<a>";
                            echo "<button> type=button Valider le panier </button>";
                        echo "</a>";   
                    echo "</div>";
                echo "</div>";

                echo "<div class=\"row\">";
                    echo "<div class=\"col-md-6\">";
                    echo "<form action=\"index.php\" method=\"post\">";
                        echo "<input type=\"submit\" name=\"viderderPanier\" value=\"Vider le panier\">";
                        echo "<input type=\"hidden\" name=\"idViderPanier\" value=\"?\">";
                    echo "</form>";
                    echo "</div>";
                echo "</div>";

            echo "</div>";  
        }
}

        


?>