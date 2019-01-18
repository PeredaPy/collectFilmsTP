<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{

  /**
   * @Route("/movies", methods={"GET"})
   */
  function getAllMovies() {
    $movies= [
      [
        "id" => "1",
        "title" => "Matrix",
        "year" => "1999",
        "poster" => "https://imgc.allpostersimages.com/img/print/u-g-F4S5W20.jpg",
        "synopsis" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ?"
      ],
      [
        "id" => "2",
        "title" => "Predestination",
        "year" => "2014",
        "poster" => "https://m.media-amazon.com/images/M/MV5BMTAzODc3NjU1NzNeQTJeQWpwZ15BbWU4MDk5NTQ4NTMx._V1_SY1000_CR0,0,677,1000_AL_.jpg",
        "synopsis" => "Un agent spécial, qui fait partie d'une équipe de onze individus, possède la capacité exceptionnelle de voyager dans le temps pour traquer des criminels. Sa prochaine mission consiste à se rendre à New York, en 1975, pour arrêter un tueur fou, qui projette de faire sauter tout un quartier de la ville."
      ],
      [
        "id" => "3",
        "title" => "Willow",
        "year" => "1988",
        "poster" => "http://img2.picup.co/di/A4IZB/f471bb12e504d8f0a0347d60518804d2.jpg",
        "synopsis" => "La cruelle reine Bavmorda règne sur le peuple des Daïkinis. Lorsqu'une prédiction annonce la naissance imminente d'une princesse qui la détrônera, Bavmorda donne l'ordre de tuer tous les nouveau-nés du royaume. Elora, le bébé de la prophétie, échappe au massacre. Elle est recueillie par Willow, un homme de petite taille qui fait partie de la race des Nelwyns. Ce dernier est chargé de ramener l'enfant au pays des Daïkinis."
      ]
    ];

    return $this->render('movies/movies.html.twig', [
        'movies' => $movies,
    ]);

    // $jsonResponse = json_encode($movies);
    // return new Response($jsonResponse);
  }

  /**
   * @Route("/movies/id", methods={"GET"})
   */
  function getMovie($id) {
    $movie= [
      "id" => $id,
      "title" => "Matrix",
      "year" => "1999",
      "poster" => "https://imgc.allpostersimages.com/img/print/u-g-F4S5W20.jpg",
      "synopsis" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ?"
    ];

    // $jsonResponse = json_encode($movie);
    //
    // return new Response($jsonResponse);
    return $this->render('movies/movie.html.twig', [
        'movie' => $movie,
    ]);
  }

  /**
   * @Route("/movies", methods={"POST"})
   */
  function createMovie() {
    $movie= [
      "title" => "Matrix",
      "year" => "1999",
      "poster" => "https://imgc.allpostersimages.com/img/print/u-g-F4S5W20.jpg",
      "synopsis" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ?"
    ];

    $jsonResponse = json_encode($movie);
    return new Response($jsonResponse);
  }

  /**
   * @Route("/movies/id", methods={"PUT"})
   */
  function updateMovie($id) {
    // $movie= [
    //   "id" => $id,
    //   "title" => "Matrix",
    //   "year" => "1999",
    //   "poster" => "https://imgc.allpostersimages.com/img/print/u-g-F4S5W20.jpg",
    //   "synopsis" => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ?"
    // ];
    //
    // $jsonResponse = json_encode($movie);
    // return new Response($jsonResponse);
    $form = $this->createFormBuilder($task)
            ->setAction($this->generateUrl('categories/categories'))
            ->setMethod('GET')
            ->add('title', TextType::class)
            ->add('year', TextType::class)
            ->add('title', TextType::class)
            ->add('poster', TextType::class)
            ->getForm();
  }

  /**
   * @Route("/movies/id", methods={"DELETE"})
   */
  function deleteMovie($id) {
    $jsonResponse = json_encode([]);
    return new Response($jsonResponse);
  }
  /**
   * @Route("/titleSort", methods={"GET"})
   */
  function titleSort($id){

    return $this->createQueryBuilder('title')
            ->addWhere('movie.id = :id')
            ->setParameter('movie.id', $id)
            ->orderBy('movie.title', 'desc')
            ->getQuery()
            ->getResult();
  }
}
