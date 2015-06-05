<?php

namespace MegaCastingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MegaCastingBundle:Default:index.html.twig');
    }
    


    public function quiSommesNousAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    
    public function nousContacterAction() 
    {
        return $this->render('MegaCastingBundle:Default:nousContacter.html.twig');
    }
    
    public function rechercheAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    

    
    
    
 
}