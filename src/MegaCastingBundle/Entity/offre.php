<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table("offre")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\OffreRepository")
 */
class Offre
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;
     

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="datetime")
     */
    private $datePublication;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="offres", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;
    

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;
    

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;
    
    

    

    /**
     * @ORM\ManyToOne(targetEntity="TypeContrat", inversedBy="offres", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeContrat;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Metier", inversedBy="offres", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $metier;

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
     * Set description
     *
     * @param string $description
     * @return Offre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Offre
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
    
   

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datePublication
     * @return Offre
     */
    public function setDatePublication($datePublication)
    {
        $this->datefin = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getdatePublication()
    {
        return $this->datePublication;
    }
    
    

    /**
     * Set duree
     *
     * @param string $duree
     * @return Offre
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }


    public function setMetier(\MegaCastingBundle\Entity\Metier $metier = null)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \MegaCastingBundle\Entity\Metier 
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set typeContrat
     *
     * @param \MegaCastingBundle\Entity\typeContrat $typeContrat
     * @return Offre
     */
    public function setTypeContrat(\MegaCastingBundle\Entity\typeContrat $typeContrat = null)
    {
        $this->typeContrat = $typeContrat;
    
        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return \MegaCastingBundle\Entity\typeContrat 
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Offre
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Offre
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set utilisateur
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateur
     * @return Offre
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
}
