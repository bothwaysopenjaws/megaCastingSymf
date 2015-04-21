<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateur
 *
 * @ORM\Table("typeUtilisateur")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\TypeUtilisateurRepository")
 */
class TypeUtilisateur
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
     * @ORM\OneToMany(targetEntity="Utilisateur", mappedBy="typeUtilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateurs;
    
   
    /**
     * @ORM\OneToMany(targetEntity="Historique", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $historiques;


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
     * @return TypeUtilisateur
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
     * @return TypeUtilisateur
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
     * Add historiques
     *
     * @param \MegaCastingBundle\Entity\Historique $historiques
     * @return TypeUtilisateur
     */
    public function addHistorique(\MegaCastingBundle\Entity\Historique $historiques)
    {
        $this->historiques[] = $historiques;

        return $this;
    }

    /**
     * Remove historiques
     *
     * @param \MegaCastingBundle\Entity\Historique $historiques
     */
    public function removeHistorique(\MegaCastingBundle\Entity\Historique $historiques)
    {
        $this->historiques->removeElement($historiques);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }
}
