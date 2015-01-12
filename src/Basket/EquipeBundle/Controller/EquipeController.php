<?php

namespace Basket\EquipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Basket\DatabaseBundle\Entity\Equipe;
use Basket\DatabaseBundle\Form\EquipeType;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller
{
    public function indexAction(Request $request)
    {
      $equipe = new Equipe();
      $form = $this->createForm(new EquipeType(),$equipe);
      $form->handleRequest($request);
      if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($equipe);
          $em->flush();
        }
        
        $em = $this->getDoctrine()->getEntityManager()->getRepository('BasketDatabaseBundle:Equipe');
        $allEquipe = $em->findAll();
        return $this->render('BasketEquipeBundle::index.html.twig', array(
            'form' => $form->createView(),
            'allEquipe' => $allEquipe,
                ));
    }
}
