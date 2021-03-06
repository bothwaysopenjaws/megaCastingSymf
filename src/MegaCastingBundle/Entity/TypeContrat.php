<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeContrat
 *
 * @ORM\Table("TypeContrat")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\TypeContratRepository")
 */
class TypeContrat
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="typeContrat", cascade={"persist"}, orphanRemoval=false)
     * @ORM\JoinColumn(nullable=true)
     */
    private $offres;


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
     * Set libelle
     *
     * @param string $libelle
     * @return TypeContrat
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
    }




    /**
     * Add offres
     *
     * @param \MegaCastingBundle\Entity\Offre $offres
     * @return TypeContrat
     */
    public function addOffre(\MegaCastingBundle\Entity\Offre $offres)
    {
        $this->offres[] = $offres;
    
        return $this;
    }

    /**
     * Remove offres
     *
     * @param \MegaCastingBundle\Entity\Offre $offres
     */
    public function removeOffre(\MegaCastingBundle\Entity\Offre $offres)
    {
        $this->offres->removeElement($offres);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffres()
    {
        return $this->offres;
    }
}
