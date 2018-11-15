<?php

namespace Controllers;

class ArticleController extends PostController {
    const TYPE = "article";

    // Propriétés $articles
    // Tableau de la liste des articles
    private $articles = [];

    /**
     * Boucle sur la liste des articles et les affiche
     */
    public function viewAll()
    {
        foreach ($this->articles as $article) {

        }
    }
}