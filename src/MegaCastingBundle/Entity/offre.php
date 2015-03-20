<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * offre
 *
 * @ORM\Table("offre")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\offreRepository")
 */
class offre
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
     * @ORM\Column(name="description", nullable=true, type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="datedebut", type="string", length=255)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="string", length=255)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;


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
     * @return offre
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
     * Set datedebut
     *
     * @param string $datedebut
     * @return offre
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param string $datefin
     * @return offre
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return string 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return offre
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
}
