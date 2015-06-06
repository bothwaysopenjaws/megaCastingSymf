<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAbonnement
 *
 * @ORM\Table("TypeAbonnement")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\TypeAbonnementRepository")
 */
class TypeAbonnement
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
     * @var integer
     *
     * @ORM\Column(name="nbOffre", type="integer")
     */
    private $nbOffre;
    
    /**
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="typeAbonnement", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $abonnements;


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
     * @return TypeAbonnement
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
     * Set nbOffre
     *
     * @param integer $nbOffre
     * @return TypeAbonnement
     */
    public function setNbOffre($nbOffre)
    {
        $this->nbOffre = $nbOffre;

        return $this;
    }

    /**
     * Get nbOffre
     *
     * @return integer 
     */
    public function getNbOffre()
    {
        return $this->nbOffre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->abonnements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add abonnements
     *
     * @param \MegaCastingBundle\Entity\Abonnement $abonnements
     * @return TypeAbonnement
     */
    public function addAbonnement(\MegaCastingBundle\Entity\Abonnement $abonnements)
    {
        $this->abonnements[] = $abonnements;

        return $this;
    }

    /**
     * Remove abonnements
     *
     * @param \MegaCastingBundle\Entity\Abonnement $abonnements
     */
    public function removeAbonnement(\MegaCastingBundle\Entity\Abonnement $abonnements)
    {
        $this->abonnements->removeElement($abonnements);
    }

    /**
     * Get abonnements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }
}
