<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/categories", methods={"GET", "DELETE", "POST", "PUT"})
 */
class CategoryController extends AbstractController
{
    /**
      * @Route("/categories", methods={"GET"})
      */
    function getAllCategories() {
        $categories= [
            ["name" => "Animation"],
            ["name" => "Comedie"],
            ["name" => "Policier"],
            ["name" => "Romantique"],
            ["name" => "Guerre"],
            ["name" => "Action"],
            ["name" => "Aventure"],
            ["name" => "Science-fiction"],
        ];
        // $jsonResponse = json_encode($categories);
        // return new Response($jsonResponse);

        return $this->render('categories/categories.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
      * @Route("/categories/{id}", methods={"GET"})
      */
    function getCategory($id) {
        $category= [
            "id" => $id,
            "name" => "Catégorie ".$id
        ];

        $jsonResponse = json_encode($category);

        return new Response($jsonResponse);
    }
    /**
      * @Route("/categories/id", methods={"DELETE"})
      */
    function deleteCategory($id) {

        if(!null == $id){
          $jsonResponse = json_encode([]);
        }

        return new Response($jsonResponse);
    }

    /**
      * @Route("/categories", methods={"POST"})
      */
    function createCategory(Request $request) {

        $category= [
            "name" => "Horreur"
        ];

        $responseJson = json_encode($category);

        return new Response($responseJson, 201);
    }

    /**
      * @Route("/categories/id", methods={"PUT"})
      */
    function updateCategory($id) {

      $category= [
          "name" => "Guerre"
      ];
      $jsonResponse = json_encode($category);
      return new Response($jsonResponse);
    }
}
