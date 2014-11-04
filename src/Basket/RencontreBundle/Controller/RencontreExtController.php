<?php

namespace Basket\RencontreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Basket\DatabaseBundle\Entity\RencontreExterieur;
use Symfony\Component\HttpFoundation\Request;
use Basket\DatabaseBundle\Form\RencontreExterieurType;

class RencontreExtController extends Controller
{
    public function indexAction(Request $request)
    {
        $rencontreExt = new RencontreExterieur();
        $form = $this->createForm(new RencontreExterieurType(),$rencontreExt);
        $form->handleRequest($request);
        
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($rencontreExt);
          $em->flush();
        }
        
        $em = $this->getDoctrine()->getEntityManager();
        $allRencontreExt = $em->getRepository('BasketDatabaseBundle:RencontreExterieur')->findAll();
        return $this->render('BasketRencontreBundle::rencontreExt.html.twig', array(
            'form' => $form->createView(),
            'allRencontreExt' => $allRencontreExt,
                ));
    }
}
