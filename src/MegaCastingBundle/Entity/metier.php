<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table("metier")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\MetierRepository")
 */
class Metier
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Utilisateur", cascade={"persist"})
     */
    private $utilisateurs;
    
    /**
     * @ORM\ManyToOne(targetEntity="Domaine", inversedBy="metiers", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $domaine;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="metier", cascade={"persist"}, orphanRemoval=true)
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
     * @return Metier
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
     * Set description
     *
     * @param string $description
     * @return Metier
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
     * Set domaine
     *
     * @param \MegaCastingBundle\Entity\Domaine $domaine
     * @return Metier
     */
    public function setDomaine(\MegaCastingBundle\Entity\Domaine $domaine = null)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \MegaCastingBundle\Entity\Domaine 
     */
    public function getDomaine()
    {
        return $this->domaine;
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
     * @return Metier
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

    /**
     * Add utilisateurs
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateurs
     * @return Metier
     */
    public function addUtilisateur(\MegaCastingBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;
    
        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateurs
     */
    public function removeUtilisateur(\MegaCastingBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
