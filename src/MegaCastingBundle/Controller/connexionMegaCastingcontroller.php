<?php



namespace MegaCastingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class connexionController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MegaCastingBundle:Default:index.html.twig', array('name' => $name));
    }
}
