<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table("abonnement")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\AbonnementRepository")
 */

class Abonnement
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateSouscription", type="date")
     */
    private $dateSouscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="restant", type="integer")
     */
    private $restant;
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeAbonnement", inversedBy="abonnements", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeAbonnement;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="abonnements", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

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
     * Set restant
     *
     * @param integer $restant
     * @return Abonnement
     */
    public function setRestant($restant)
    {
        $this->restant = $restant;

        return $this;
    }

    /**
     * Get restant
     *
     * @return integer 
     */
    public function getRestant()
    {
        return $this->restant;
    }

    /**
     * Set typeAbonnement
     *
     * @param \MegaCastingBundle\Entity\TypeAbonnement $typeAbonnement
     * @return Abonnement
     */
    public function setTypeAbonnement(\MegaCastingBundle\Entity\TypeAbonnement $typeAbonnement = null)
    {
        $this->typeAbonnement = $typeAbonnement;

        return $this;
    }

    /**
     * Get typeAbonnement
     *
     * @return \MegaCastingBundle\Entity\TypeAbonnement 
     */
    public function getTypeAbonnement()
    {
        return $this->typeAbonnement;
    }

    /**
     * Set dateSouscription
     *
     * @param \DateTime $dateSouscription
     * @return Abonnement
     */
    public function setDateSouscription($dateSouscription)
    {
        $this->dateSouscription = $dateSouscription;

        return $this;
    }

    /**
     * Get dateSouscription
     *
     * @return \DateTime 
     */
    public function getDateSouscription()
    {
        return $this->dateSouscription;
    }

    /**
     * Set utilisateur
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateur
     * @return Abonnement
     */
    public function setUtilisateur(\MegaCastingBundle\Entity\Utilisateur $utilisateur)
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
