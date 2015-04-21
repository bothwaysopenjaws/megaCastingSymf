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
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;
    
    /*
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
     * @ORM\ManyToOne(targetEntity="Contrat", inversedBy="offres", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $contrat;
    
    
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
     * @param \DateTime $datefin
     * @return Offre
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
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

    /**
     * Set contrat
     *
     * @param \megaCasting\MegaCastingBundle\Entity\Contrat $contrat
     * @return Offre
     */
    public function setContrat(\megaCasting\MegaCastingBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \megaCasting\MegaCastingBundle\Entity\Contrat 
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set metier
     *
     * @param \MegaCastingBundle\Entity\Metier $metier
     * @return Offre
     */
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
}
