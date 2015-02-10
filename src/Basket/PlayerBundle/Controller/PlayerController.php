<?php

namespace Basket\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Basket\DatabaseBundle\Form\PersonneType;
use Basket\DatabaseBundle\Entity\Personne;

class PlayerController extends Controller
{
    public function indexAction(Request $request)
    {
        $player = new Personne();
        $form = $this->createForm(new PersonneType(),$player);
        $form->handleRequest($request);
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          //$personne_repository = $em->getRepository('BasketDatabaseBundle:Personne');
          $em->persist($player);
          $em->flush();
        }
        $em = $this->getDoctrine()->getManager();
        $allPlayers = $em->getRepository('BasketDatabaseBundle:Personne')->findAll();
        //var_dump($allPlayers);
        return $this->render('BasketPlayerBundle::index.html.twig', array(
            'form' => $form->createView(),
            'allPlayers'=>$allPlayers
                ));
    }
    
    public function homepageAction()
    {
      $securityContext = $this->container->get('security.context');

        // Si l'utilisateur n'est PAS identifié, on ne peut pas appeler la méthode getProject
        
        if (!$securityContext->isGranted('ROLE_ADMIN')) {

          return $this->render('BasketPlayerBundle::pageUser.html.twig');
            }               
        
        // Si on est connecté en tant qu'admin, on définit la page d'accueil de l'admin 
        // comme la gestion des utilisateurs. 
        else {
            return $this->render('BasketPlayerBundle:player:pageAdmin.html.twig');
        }
    }
}
