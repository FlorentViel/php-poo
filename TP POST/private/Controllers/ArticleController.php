<?php

namespace Controllers;

use \Models\ArticleModel;

class ArticleController extends PostController {
    const TYPE = "article";

    // Propriétés $articles
    // Tableau de la liste des articles
    private $articles = [];

    private $model;

    public function __construct()
    {
        $this->model = new ArticleModel;

        // var_dump( $this->model->getAll() );
    }

    /**
     * Boucle sur la liste des articles et les affiche
     */
    public function viewAll()
    {
        foreach ($this->articles as $article) {

        }
    }
}