<?php

namespace MegaCastingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MegaCastingBundle:Default:listeOffres.html.twig');
    }
    
    
    public function quiSommesNousAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    
    public function rechercheAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    
    
        public function detailOffreAction($id)
    {
        return $this->render('MegaCastingBundle:Default:detailOffre.html.twig', array('id' => $id));
    }
}