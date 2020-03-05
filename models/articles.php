<?php
// La variable data est une liste contenant l'ensemble des données. 1 élément = 1 donnée.
// A terme, les données seront récupérées depuis une db et injectées dans des objets php
$data = [
    ['Pomme', 12],
    ['Poire',25],
    ['Peche', 12],
    ['Ananas', 5],
    ['Banane', 11],
    ['Kumkwat', 2]
];

// La fonction getArticles retourne l'ensemble des données.
function getArticles() {
    global $data; // portée globale afin de disposer de la liste. Sans le mot clé global, la variable data sera locale et donc null
    return $data;
}


// La fonction getArticle retourne un article sur base d'un filtre.
function getArticleById($id) {

    $articles = getArticles();
    foreach ($articles as $article) {
        
        if (strtolower($id) == strtolower($article['nom'])) {
           return $article;
        }
    }
}

?>
