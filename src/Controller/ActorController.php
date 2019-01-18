<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController
{
  /**
   * @Route("/actors", methods={"GET"})
   */
  function getAllActors() {
    $actors= [
      [
        "firstname" => "Nicolas",
        "lastname" => "Cage"
      ],
      [
        "firstname" => "Ethan",
        "lastname" => "Hawke"
      ],
      [
        "firstname" => "Clint",
        "lastname" => "Eastwood"
      ],
    ];

    $jsonResponse = json_encode($actors);
    return new Response($jsonResponse);
  }

  /**
   * @Route("/actors/id", methods={"GET"})
   */
  function getActor($id) {
    $actor= [
        "id" => $id,
        "firstname" => "Ethan",
        "lastname" => "Hawke"
      ];

    $jsonResponse = json_encode($actor);

    return new Response($jsonResponse);
  }

  /**
   * @Route("/actors", methods={"POST"})
   */
  function createActor() {
    $actor= [
        "firstname" => "Billy",
        "lastname" => "Boy"
    ];

    $jsonResponse = json_encode($actor);

    return new Response($jsonResponse);
  }

  /**
   * @Route("/actors/id", methods={"PUT"})
   */
  function updateActor($id) {
    $actor= [
        "id" => $id,
        "firstname" => "Jude",
        "lastname" => "Law"
    ];

    $jsonResponse = json_encode($actor);

    return new Response($jsonResponse);
  }

  /**
   * @Route("/actors/id", methods={"DELETE"})
   */
  function deleteActor($id) {
    $jsonResponse = json_encode([]);
    return new Response($jsonResponse);
  }
}
