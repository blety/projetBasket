<?php

namespace Basket\RencontreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Basket\DatabaseBundle\Entity\RencontreExterieur;
use Symfony\Component\HttpFoundation\Request;
use Basket\DatabaseBundle\Form\RencontreDomicileType;

class RencontreExtController extends Controller
{
    public function indexAction(Request $request)
    {
        $rencontreDom = new RencontreExterieur();
        $form = $this->createForm(new RencontreDomicileType(),$rencontreDom);
        $form->handleRequest($request);
        
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $rencontreDom->setType(0);
          $em->persist($rencontreDom);
          $em->flush();
        }
        
        $em = $this->getDoctrine()->getEntityManager();
        $allRencontreDom = $em->getRepository('BasketDatabaseBundle:RencontreDomicile')->findAll();
        return $this->render('BasketRencontreBundle::index.html.twig', array(
            'form' => $form->createView(),
            'allRencontreDom' => $allRencontreDom,
                ));
    }
}
