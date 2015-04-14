<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table("contrat")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="clause", type="string", length=255)
     */
    private $clause;
   
    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="contrat", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $offres;
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeContrat", inversedBy="contrats", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeContrat;
    
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
     * @return Contrat
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
     * Set clause
     *
     * @param string $clause
     * @return Contrat
     */
    public function setClause($clause)
    {
        $this->clause = $clause;

        return $this;
    }

    /**
     * Get clause
     *
     * @return string 
     */
    public function getClause()
    {
        return $this->clause;
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
     * @param \megaCasting\MegaCastingBundle\Entity\Offre $offres
     * @return Contrat
     */
    public function addOffre(\megaCasting\MegaCastingBundle\Entity\Offre $offres)
    {
        $this->offres[] = $offres;

        return $this;
    }

    /**
     * Remove offres
     *
     * @param \megaCasting\MegaCastingBundle\Entity\Offre $offres
     */
    public function removeOffre(\megaCasting\MegaCastingBundle\Entity\Offre $offres)
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
     * Set typeContrat
     *
     * @param \MegaCastingBundle\Entity\TypeContrat $typeContrat
     * @return Contrat
     */
    public function setTypeContrat(\MegaCastingBundle\Entity\TypeContrat $typeContrat = null)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return \MegaCastingBundle\Entity\TypeContrat 
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }
}
