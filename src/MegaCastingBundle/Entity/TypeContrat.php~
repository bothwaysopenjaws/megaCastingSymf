<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeContrat
 *
 * @ORM\Table("typeContrat")
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
     * @ORM\OneToMany(targetEntity="Contrat", mappedBy="typeContrat", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $contrats;


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
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrats
     *
     * @param \MegaCastingBundle\Entity\Contrat $contrats
     * @return TypeContrat
     */
    public function addContrat(\MegaCastingBundle\Entity\Contrat $contrats)
    {
        $this->contrats[] = $contrats;

        return $this;
    }

    /**
     * Remove contrats
     *
     * @param \MegaCastingBundle\Entity\Contrat $contrats
     */
    public function removeContrat(\MegaCastingBundle\Entity\Contrat $contrats)
    {
        $this->contrats->removeElement($contrats);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContrats()
    {
        return $this->contrats;
    }
}
