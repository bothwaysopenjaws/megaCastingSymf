<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCompetence
 *
 * @ORM\Table("typeCompetence")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\TypeCompetenceRepository")
 */
class TypeCompetence
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
     * @ORM\OneToMany(targetEntity="Competence", mappedBy="typeCompetence", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $competences;



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
     * @return TypeCompetence
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
        $this->competences = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add competences
     *
     * @param \MegaCastingBundle\Entity\Competence $competences
     * @return TypeCompetence
     */
    public function addCompetence(\MegaCastingBundle\Entity\Competence $competences)
    {
        $this->competences[] = $competences;

        return $this;
    }

    /**
     * Remove competences
     *
     * @param \MegaCastingBundle\Entity\Competence $competences
     */
    public function removeCompetence(\MegaCastingBundle\Entity\Competence $competences)
    {
        $this->competences->removeElement($competences);
    }

    /**
     * Get competences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompetences()
    {
        return $this->competences;
    }
}
