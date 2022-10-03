<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    #[Route('/home', name: 'games')]
    public function index(): Response
    {
        $games = $this->manager->getRepository(Game::class)->findAll();

        return $this->render('game/index.html.twig', [
            'games' => $games
        ]);
    }
}
