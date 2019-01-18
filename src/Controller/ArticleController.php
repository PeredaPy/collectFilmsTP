<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/articles",methods={"GET", "DELETE"})
 */
class ArticleController
{
    function getAllArticles() {
        $articles= [
            ["name" => "Article 1"],
            ["name" => "Article 2"],
            ["name" => "Article 3"],
        ];
        $jsonResponse = json_encode($articles);
        return new Response($jsonResponse);
    }

    function getArticle($id) {
        $article= [
            "id" => $id,
            "name" => "Article ".$id
        ];

        $jsonResponse = json_encode($article);

        return new Response($jsonResponse);
    }

    function deleteArticle($id) {
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }
}
