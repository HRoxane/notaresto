<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    #[Route('/restaurant', name: 'app_restaurant')]
    
    
    /**
     * Afficher la liste des restaurants
     * @Route("/restaurants", name="restaurant_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }


    /**
     * Affiche un restaurant
     * {restaurant} est un paramètre 
     * @Route("restaurant/{restaurant}", name="restaurant_show", methods={"GET"}, requirements="restaurant"="\d+"})
     * @param Restaurant $restaurant
     */

    public function show(Restaurant $restaurant){
    }

    /**
     * Création d'un nouveau restaurant : afficher le formulaire
     * @Route("restaurant/new", name="restaurant_new", methods={"GET"})
     */
    public function new(){

    }

    /**
     * Traite la requête d'un formulaire de création de restaurant
     * @Route("/restaurant", name="restaurant_create", methods={"POST"})
     */
    public function create(){

    }

    /**
     * Affiche le forumaire d'édition d'un restaurant(GET)
     * Traite le forumlaire d'édition d'un restaurant(POST) 
     * @Route("/restaurant/{restaurant}/edit", name="restaurant_edit", methods={"GET", "POST"})
     * @param Restaurant $restaurant
     */

     public function edit(Restaurant $restaurant){

     }

     /**
      * Supprime un restaurant
      * @Route("restaurant/{restaurant}/delete", name="restaurant_delete", methods={"DELETE"})
      * @param Restaurant $restaurant
      */

      public function delete(Restaurant $restaurant) {

      }






}
