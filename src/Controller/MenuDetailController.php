<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MenuDetailController extends AbstractController
{
    #[Route('/menu/detail', name: 'app_menu_detail')]
    public function index(): Response
    {
        $menu = [
            'name' => 'Menu gourmand',
            'description' => 'Un menu généreux composé de produits frais et de saison.',
            'price' => 25.00,
            'minPersons' => 10,
            'starter' => 'Velouté de saison',
            'mainCourse' => 'Suprême de volaille et ses légumes',
            'dessert' => 'Fondant au chocolat',
            'deliveryFee' => 5.00,
            'discount' => 10,
        ];

        return $this->render('menu_detail/index.html.twig', [
            'menu' => $menu,
        ]);
    }
}
