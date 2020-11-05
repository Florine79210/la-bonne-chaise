<?php

function getArticles() {

    return $liste = [
        "article 1" => ["name" => "Füt'Hürr", "picture" => "chaise-fut-hurr.jpg", "descrciption" => "description", "price" => "149,99€"],
        "article 2" => ["name" => "Rusticae", "picture" => "chaise-rusticae.jpg", "descrciption" => "description", "price" => "249,99€"],
        "article 3" => ["name" => "Wave", "picture" => "chaise-wave.jpg", "descrciption" => "description", "price" => "199,99€"],
        "article 4" => ["name" => "Whirlwind", "picture" => "chaise_whirlwind.jpg", "descrciption" => "description", "price" => "299,99€"]
    ];
}

function showArticles($listeArticles){

    foreach ($listeArticles as $article){
        echo "<div class=\"col-md-4 text-center\">";
        echo "<form method=\"post\">";
        echo "<img src=\"images/" . $article["picture"] . "\">";
        echo $article["name"] . "\n";
        echo $article["description"] . "\n";
        echo $article["price"] . "\n";

        echo "<input type=\"submit\" name=\"ajPanier\" value=\"Ajouter au panier\">";
        // echo "<input"

        echo "</form>";
        echo "</div>";

        
        
        
    }                
}



?>