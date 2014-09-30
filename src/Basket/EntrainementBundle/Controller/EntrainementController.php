<?php

namespace Basket\EntrainementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Basket\DatabaseBundle\Entity\Entrainement;
use Symfony\Component\HttpFoundation\Request;
use Basket\DatabaseBundle\Form\EntrainementType;

class EntrainementController extends Controller
{
    public function indexAction(Request $request)
    {
        $entrainement = new Entrainement();
        $form = $this->createForm(new EntrainementType(),$entrainement);
        $form->handleRequest($request);
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          //$personne_repository = $em->getRepository('BasketDatabaseBundle:Personne');
          $em->persist($entrainement);
          $em->flush();
        }
        
        return $this->render('BasketEntrainementBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
