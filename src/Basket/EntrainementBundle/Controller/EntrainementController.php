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
        // On créé un nouvel entrainement vide
        $entrainement = new Entrainement();
        // On créé un formulaire EntrainementType, qui hydratera notre entrainement
        $form = $this->createForm(new EntrainementType(),$entrainement);
        // Le formulaire est complété par les données du POST
        $form->handleRequest($request);
        // On vérifie que le formulaire est valide
        if ($form->isValid()){
          // On utilise un Entity Manager
          $em = $this->getDoctrine()->getManager();
          // On sauvegarde notre entrainement en BDD
          $em->persist($entrainement);
          $em->flush();
        }
        // On récupère le contenu du repositoty EntrainementRepository, pour pouvoir effectuer des requêtes dessus
        // et accéder aux données déjà sauvegardées en BDD
        $em = $this->getDoctrine()->getManager()->getRepository('BasketDatabaseBundle:Entrainement');
        // On récupère tous les entrainements
        $allEntrainement = $em->findAll();
        // On retourne la vue index, à laquelle on passe en paramètres le formulaire ainsi que le tableau de tous les 
        // entrainements
        return $this->render('BasketEntrainementBundle::index.html.twig', array(
            'form' => $form->createView(),
            'allEntrainement' => $allEntrainement,
                ));
    }
}
