<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index()
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'Projects',
            'sites' => [ 
                [
                    'index' => 1,
                    'image' =>'/img/screen_wordpress.png',
                    'gif' =>'/img/screen_wordpress.png',
                    'name' =>'Wordpress',
                    'desc' =>'Voici un exemple d\'installation Wordpress que j\'ai effectué avec des plugins personnalisez !',
                    'icon' =>'fab fa-wordpress',
                    'link' =>'http://nicolas-gretten.fr:8081'
                ],
                [
                    'index' => 2,
                    'image' =>'/img/screen_boutique.png',
                    'gif' => '/img/screen_boutique.png',
                    'name' =>'E-boutique',
                    'desc' =>'Je vous présente la boutique réaliser lors de ma formation de développeur web et web mobile.',
                    'icon' =>'fas fa-shopping-cart',
                    'link' =>'http://nicolas-gretten.fr:8082'
                ],
                [
                    'index' => 3,
                    'image' => '/img/screen.png',
                    'gif' => '/img/avoizejotatttoo.gif',
                    'name' =>'Avoizejotattoo.lu',
                    'desc' =>'Lors de mon stage j\'ai eu la chance de pouvoir réaliser le site internet pour le salon de tatouage Avoize & Jo Tatto Studio',
                    'icon' =>'fas fa-code',
                    'link' =>'https://avoizejotattoo.lu'
                ],
            ],
            'games' => [ 
                [
                    'index' => 1,
                    'image' =>'https://dummyimage.com/600x400/28d6a5/fff',
                    'name' =>'Mastermind',
                    'desc' =>'Mastermind en JavaScript',
                    'icon' =>'fas fa-dice-one',
                    'link' =>'#'
                ],
                [
                    'index' => 2,
                    'image' =>'https://dummyimage.com/600x400/28d6a5/fff',
                    'name' =>'Morpion',
                    'desc' =>'Morpion en JavaScript',
                    'icon' =>'fas fa-dice-two',
                    'link' =>'#'
                ],
                [
                    'index' => 3,
                    'image' =>'https://dummyimage.com/600x400/28d6a5/fff',
                    'name' =>'To Do List',
                    'desc' =>'To do list en JavaScript',
                    'icon' =>'fas fa-dice-three',
                    'link' =>'#'
                ],
            ],
            'designs' => [ 
                [
                    'index' => 1,
                    'image' =>'https://dummyimage.com/600x400/2685eb/fff',
                    'name' =>'Leduc guitar',
                    'desc' =>'Premier maquettage sur InDesign, maquettage d\'une application de gestion de commandes pour un luthier.',
                    'icon' =>'fas fa-palette',
                    'link' =>'#'
                ],
                [
                    'index' => 2,
                    'image' =>'https://dummyimage.com/600x400/2685eb/fff',
                    'name' =>'avoizejotattoo.lu',
                    'desc' =>'Maquettage du Front End pour le site avoizejotattoo.lu avec dialogue écrans',
                    'icon' =>'fas fa-palette',
                    'link' =>'#'
                ],
                [
                    'index' => 3,
                    'image' =>'https://dummyimage.com/600x400/2685eb/fff',
                    'name' =>'avoizejotattoo.lu',
                    'desc' =>'Maquettage du Panel admin pour le site avoizejotattoo.lu avec dialogue écrans',
                    'icon' =>'fas fa-palette',
                    'link' =>'#'
                ],
            ],

        ]);
    }
}
