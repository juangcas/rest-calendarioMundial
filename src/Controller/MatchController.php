<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Match;
use App\Entity\Selection;
use App\Entity\Stadium;
use \Datetime;
/**
 * Brand controller.
 *
 * @Route("/")
 */
class MatchController extends Controller
{
    /**
     * Lists all Matches.
     * @FOSRest\Get("/matches")
     *
     * @return array
     */
    public function getMatchAction()
    {
        $repository = $this->getDoctrine()->getRepository(Match::class);
        
        // query for all Matches by its primary key (usually "id")
        $matches = $repository->findall();
        
        return View::create($matches, Response::HTTP_OK , []);
    }
    /**
     * Create Match.
     * @FOSRest\Post("/match")
     *
     * @return array
     */
    public function postMatchAction(Request $request)
    {
        $repositoryStadiums = $this->getDoctrine()->getRepository(Stadium::class);
        $repositorySelections = $this->getDoctrine()->getRepository(Selection::class);
 
        $game = new Match();
        $game->setDateHour(DateTime::createFromFormat('d/m/Y H','14/06/2018 10'));
        $game->setPhase('Group A    ');
        $game->setStadium($repositoryStadiums->find(02));
        $game->setSelA($repositorySelections->find(01));
        $game->setGoalsSelA(0);
        $game->setSelB($repositorySelections->find(02));
        $game->setGoalsSelB(0);
        $game->setComments('');
        $game->setEdited(false);
        if (substr($game->getPhase(),0,5) == "Group") {
            $game->setPenalties(null);
        } else {
            $game->setPenalties(false);
        }
        $game->setPenSelA(null);
        $game->setPenSelB(null);

        $em = $this->getDoctrine()->getManager();
        $em->persist($game);
        $em->flush();

        return View::create($game, Response::HTTP_CREATED , []);   
    }
}
