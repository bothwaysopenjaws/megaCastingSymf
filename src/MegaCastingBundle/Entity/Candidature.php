<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table("candidature")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\CandidatureRepository")
 */
class Candidature
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="urlCv", nullable=true, type="string", length=255)
     */
    private $urlCv;

    /**
     * @var string
     *
     * @ORM\Column(name="UrlLettreMotive", type="string", length=255)
     */
    private $urlLettreMotive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEmission", type="datetime")
     */
    private $dateEmission;


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
     * Set nom
     *
     * @param string $nom
     * @return Candidature
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Candidature
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set urlCv
     *
     * @param string $urlCv
     * @return Candidature
     */
    public function setUrlCv($urlCv)
    {
        $this->urlCv = $urlCv;

        return $this;
    }

    /**
     * Get urlCv
     *
     * @return string 
     */
    public function getUrlCv()
    {
        return $this->urlCv;
    }

    /**
     * Set urlLettreMotive
     *
     * @param string $urlLettreMotive
     * @return Candidature
     */
    public function setUrlLettreMotive($urlLettreMotive)
    {
        $this->urlLettreMotive = $urlLettreMotive;

        return $this;
    }

    /**
     * Get urlLettreMotive
     *
     * @return string 
     */
    public function getUrlLettreMotive()
    {
        return $this->urlLettreMotive;
    }

    /**
     * Set dateEmission
     *
     * @param \DateTime $dateEmission
     * @return Candidature
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * Get dateEmission
     *
     * @return \DateTime 
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }
}
