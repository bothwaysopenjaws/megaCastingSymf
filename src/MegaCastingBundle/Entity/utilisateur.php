<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table("utilisateur")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;
    
    /**
     * @ORM\OneToMany(targetEntity="Historique", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $historiques;
    
    /**
     * @ORM\OneToOne(targetEntity="Adresse", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresse;
    
    /**
     * @ORM\OneToMany(targetEntity="Competence", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $competences;
    
    /**
     * @ORM\OneToMany(targetEntity="Multimedia", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $multimedias;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="utilisateur", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $abonnements;
    
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
     * @ORM\ManyToOne(targetEntity="TypeUtilisateur", inversedBy="utilisateurs", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeUtilisateur;
    
    
    


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
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }


    /**
     * Add competences
     *
     * @param \MegaCastingBundle\Entity\Competence $competences
     * @return Utilisateur
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

    /**
     * Add medias
     *
     * @param \MegaCastingBundle\Entity\Media $medias
     * @return Utilisateur
     */
    public function addMedia(\MegaCastingBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \MegaCastingBundle\Entity\Media $medias
     */
    public function removeMedia(\MegaCastingBundle\Entity\Media $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add abonnements
     *
     * @param \MegaCastingBundle\Entity\Abonnement $abonnements
     * @return Utilisateur
     */
    public function addAbonnement(\MegaCastingBundle\Entity\Abonnement $abonnements)
    {
        $this->abonnements[] = $abonnements;

        return $this;
    }

    /**
     * Remove abonnements
     *
     * @param \MegaCastingBundle\Entity\Abonnement $abonnements
     */
    public function removeAbonnement(\MegaCastingBundle\Entity\Abonnement $abonnements)
    {
        $this->abonnements->removeElement($abonnements);
    }

    /**
     * Get abonnements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }

    /**
     * Set typeUtilisateur
     *
     * @param \MegaCastingBundle\Entity\TypeUtilisateur $typeUtilisateur
     * @return Utilisateur
     */
    public function setTypeUtilisateur(\MegaCastingBundle\Entity\TypeUtilisateur $typeUtilisateur)
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }

    /**
     * Get typeUtilisateur
     *
     * @return \MegaCastingBundle\Entity\TypeUtilisateur 
     */
    public function getTypeUtilisateur()
    {
        return $this->typeUtilisateur;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->competences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->abonnements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add historiques
     *
     * @param \MegaCastingBundle\Entity\Historique $historiques
     * @return Utilisateur
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

    /**
     * Add multimedias
     *
     * @param \MegaCastingBundle\Entity\Multimedia $multimedias
     * @return Utilisateur
     */
    public function addMultimedia(\MegaCastingBundle\Entity\Multimedia $multimedias)
    {
        $this->multimedias[] = $multimedias;

        return $this;
    }

    /**
     * Remove multimedias
     *
     * @param \MegaCastingBundle\Entity\Multimedia $multimedias
     */
    public function removeMultimedia(\MegaCastingBundle\Entity\Multimedia $multimedias)
    {
        $this->multimedias->removeElement($multimedias);
    }

    /**
     * Get multimedias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMultimedias()
    {
        return $this->multimedias;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
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
     * @return Utilisateur
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



    /**
     * Set adresse
     *
     * @param \MegaCastingBundle\Entity\Adresse $adresse
     * @return Utilisateur
     */
    public function setAdresse(\MegaCastingBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \MegaCastingBundle\Entity\Adresse 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
