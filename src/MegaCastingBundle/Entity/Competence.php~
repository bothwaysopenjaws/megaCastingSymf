<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table("competence")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeCompetence", inversedBy="competences", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeCompetence;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="competences", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Niveau", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $niveau;
   



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeCompetence
     *
     * @param \MegaCastingBundle\Entity\TypeCompetence $typeCompetence
     * @return Competence
     */
    public function setTypeCompetence(\MegaCastingBundle\Entity\TypeCompetence $typeCompetence = null)
    {
        $this->typeCompetence = $typeCompetence;

        return $this;
    }

    /**
     * Get typeCompetence
     *
     * @return \MegaCastingBundle\Entity\TypeCompetence 
     */
    public function getTypeCompetence()
    {
        return $this->typeCompetence;
    }


    /**
     * Set utilisateur
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateur
     * @return Competence
     */
    public function setUtilisateur(\MegaCastingBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \MegaCastingBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set niveau
     *
     * @param \MegaCastingBundle\Entity\Niveau $niveau
     * @return Competence
     */
    public function setNiveau(\MegaCastingBundle\Entity\Niveau $niveau = null)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \MegaCastingBundle\Entity\Niveau 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
