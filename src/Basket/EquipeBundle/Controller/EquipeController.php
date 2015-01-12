<?php

namespace Basket\EquipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipeController extends Controller
{
    public function indexAction()
    {
        return $this->render('BasketEquipeBundle::index.html.twig');
    }
}
