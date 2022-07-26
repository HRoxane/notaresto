<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantPictureController extends AbstractController
{
    #[Route('/restaurant/picture', name: 'app_restaurant_picture')]


     /**
     * @Route("/restaurants/pictures", name="restaurant_picture_index")
     */
    public function index(): Response
    {
        return $this->render('restaurant_picture/index.html.twig', [
            'controller_name' => 'RestaurantPictureController',
        ]);
    }

    /**
     * Affiche le détail d'une picture
     * @Route("/picture/{picture}", name="picture_show", methods={"GET"})
     * @param RestaurantPicture $picture
     */
    public function show(RestaurantPicture $picture)
    {
    }

    /**
     * Traite la requête d'un formulaire de création de picture
     * @Route("/picture", name="picture_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'une picture (GET)
     * Traite le formulaire d'édition d'une picture (POST)
     * @Route("/picture/{picture}/edit", name="picture_edit", methods={"GET", "POST"})
     * @param RestaurantPicture $picture
     */
    public function edit(RestaurantPicture $picture)
    {
    }

    /**
     * Supprime une picture
     * @Route("/picture/{picture}", name="picture_delete", methods={"DELETE"})
     * @param RestaurantPicture $picture
     */
    public function delete(RestaurantPicture $picture)
    {
    }
}
