<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    #[Route('/city', name: 'app_city')]

    /**
     * Affiche la liste des villes
     * @Route("/cities", name="city_index", methods={"GET"})
     * 
     */
    public function index(): Response
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }


/**
 * Affiche le détail d'une ville
 * @Route("city/{city}, name="city_show", methods={"GET"})
 * @param City $city
 */
public function show(City $city){

}


/**
 * Traite la requête d'un formulaire de création de ville
 * @Route("/city", name="city_create", methods={"POST"}) 
 */
public function create(){

}

/** Affiche le formulaire d'édition d'une ville (GET)
 * Traite le forumlaire d'édition d'une ville (POST)
 * @Route ("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
 * @param City $city
 */
public function edit(City $city){

}

/** Supprimer une ville
 * @Route ("/city/{city}", name="city_delete", methods={"DELETE"})
 * @param City $city
 */
public function delete(City, $city){
    
}



}
