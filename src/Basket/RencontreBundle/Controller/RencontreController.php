<?php

namespace Basket\RencontreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Basket\DatabaseBundle\Entity\RencontreDomicile;
use Symfony\Component\HttpFoundation\Request;
use Basket\DatabaseBundle\Form\RencontreDomicileType;

class RencontreController extends Controller
{
    public function indexAction(Request $request)
    {
        $rencontreDom = new RencontreDomicile();
        $form = $this->createForm(new RencontreDomicileType(),$rencontreDom);
        $form->handleRequest($request);
        
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($rencontreDom);
          $em->flush();
        }
        
        $em = $this->getDoctrine()->getManager();
        $allRencontreDom = $em->getRepository('BasketDatabaseBundle:RencontreDomicile')->findAll();
        return $this->render('BasketRencontreBundle::rencontreDom.html.twig', array(
            'form' => $form->createView(),
            'allRencontreDom' => $allRencontreDom,
                ));
    }
    
    public function popupAction()
    {
      
    }
}
