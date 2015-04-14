<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table("domaine")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\DomaineRepository")
 */
class Domaine
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
     * @ORM\ManyToMany(targetEntity="Utilisateur", cascade={"persist"})
     */
    private $utilisateurs;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Metier", mappedBy="domaine", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $metiers;


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
     * @return Domaine
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
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add utilisateurs
     *
     * @param \MegaCastingBundle\Entity\Utilisateur $utilisateurs
     * @return Domaine
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

    /**
     * Add metiers
     *
     * @param \MegaCastingBundle\Entity\Metier $metiers
     * @return Domaine
     */
    public function addMetier(\MegaCastingBundle\Entity\Metier $metiers)
    {
        $this->metiers[] = $metiers;

        return $this;
    }

    /**
     * Remove metiers
     *
     * @param \MegaCastingBundle\Entity\Metier $metiers
     */
    public function removeMetier(\MegaCastingBundle\Entity\Metier $metiers)
    {
        $this->metiers->removeElement($metiers);
    }

    /**
     * Get metiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMetiers()
    {
        return $this->metiers;
    }
}
