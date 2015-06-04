<?php

namespace MegaCastingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArtisteController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MegaCastingBundle:Default:listeArtiste.html.twig');
    }
}


