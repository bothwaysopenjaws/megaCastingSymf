<?php

namespace MegaCastingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MegaCastingBundle\Form\Type\candidatureArtiste;
use MegaCastingBundle\Entity\Candidature;

class MainController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MegaCastingBundle:Default:index.html.twig');
    }
    
    public function listeOffresAction() 
    {
         $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('MegaCastingBundle:Offre')->findBy(
    array('isActive' => '1'));

        return $this->render('MegaCastingBundle:Default:listeOffres.html.twig', array('offres' => $offres));
    }


    public function quiSommesNousAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    
    public function nousContacterAction() 
    {
        return $this->render('MegaCastingBundle:Default:nousContacter.html.twig');
    }
    
    public function candidatureArtisteAction()
    {
        $form = $this->createForm(new candidatureArtiste());
        
        if($this->get('request')->getMethod() == 'POST')
        {       $date = new \DateTime();
                 
            $form->bind($this->get('request'));
            $candidature = new Candidature();
            $candidature->setNom($form['Nom']->getData());
            $candidature->setPrenom($form['Prenom']->getData());
            $candidature->setUrlCv($form['CV']->getData());
            $candidature->setUrlLettreMotivation($form['Lettre_de_motivation']->getData());
            $candidature->setDate($date);
            $candidature->setEmail($form['Email']->getData());
            $candidature->setTelephone($form['Telephone']->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidature);
            $em->flush();
            
            ?>
             <a> Félicitation Votre candidature à bien été prise en compte !! </a>
            <?php
        }
        
        return $this->render('MegaCastingBundle:Default:candidature.html.twig',array('form'=> $form->createView()));       
        
    }
   
    
    
    public function candidatureOffreAction() 
    {
        return $this->render('MegaCastingBundle:Default:CandidatureArtiste.html.twig');
    }
    
    public function rechercheAction()
    {
        return $this->render('MegaCastingBundle:Default:quiSommesNous.html.twig');
    }
    
       
    public function detailOffreAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $offre = $em->getRepository('MegaCastingBundle:Offre')->find(array('id' => $id));
        if (!$offre) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('MegaCastingBundle:Default:detailOffre.html.twig', array('offre' => $offre));
    }  
    
    
    public function fluxOffreAction ()
    {
        $format = $this->getRequest()->getRequestFormat();
 
        return $this->render('EnsJobeetBundle:Category:show.'.$format.'.twig', array(
            'category' => $category,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_jobs' => $total_jobs,
            'feedId' => sha1($this->get('router')->generate('EnsJobeetBundle_category', array('slug' =>  $category->getSlug(), '_format' => 'atom'), true)),
        ));
    }
    

}