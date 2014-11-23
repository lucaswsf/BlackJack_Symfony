<?php

namespace Acme\BlackJackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function playAction()
    {
        $session = new session();

        if (!$session->get('game')) {
            $game = new Game();
        }
        else {
            $game = unserialize($session->get('game'));
        }

        if (!$game->getRunningRound()) {
            $round = new Round();
            $game-> addRound($round);
        }

        // $player <-- à définir

        $em = $this->getDoctrine()->getManager();
        $em->persist($player);
        $em->flush();
    }
}
