<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/actors", methods={"GET"})
 */
class ActorController
{
    function getAllActors() {
        $actors= [
            ["name" => "Actor 1"],
            ["name" => "Actor 2"],
            ["name" => "Actor 3"],
        ];
        $jsonResponse = json_encode($actors);
        return new Response($jsonResponse);
    }

    function getActor($id) {
        $actor= [
            "id" => $id,
            "name" => "Auteur ".$id
        ];

        $jsonResponse = json_encode($actor);

        return new Response($jsonResponse);
    }

    function createActor(Request $request) {


    }
}
