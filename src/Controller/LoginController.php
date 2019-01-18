<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/login", methods={"POST"})
 */
class LoginController
{
    function login() {
        $login= [
            "username" => "John",
            "password" => "1234"
        ];
        $jsonResponse = json_encode($login);
        return new Response($jsonResponse);
    }
}
