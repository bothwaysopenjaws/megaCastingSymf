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
     * @ORM\Column(name="urlCv", type="string", length=255)
     */
    private $urlCv;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    
    /**
     * @var string
     *
     * @ORM\Column(name="urlLettreMotivation", type="string", length=255)
     */
    private $urlLettreMotivation;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Set urlLettreMotivation
     *
     * @param string $urlLettreMotivation
     * @return Candidature
     */
    public function setUrlLettreMotivation($urlLettreMotivation)
    {
        $this->urlLettreMotivation = $urlLettreMotivation;

        return $this;
    }

    /**
     * Get urlLettreMotivation
     *
     * @return string 
     */
    public function getUrlLettreMotivation()
    {
        return $this->urlLettreMotivation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Candidature
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Candidature
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Candidature
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
