<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table("media")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeMedia", inversedBy="medias", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeMedia;
    
    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="medias", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;
    


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
     * @return Media
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
     * Set url
     *
     * @param string $url
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set typeMedia
     *
     * @param \MegaCastingBundle\Entity\TypeMedia $typeMedia
     * @return Media
     */
    public function setTypeMedia(\MegaCastingBundle\Entity\TypeMedia $typeMedia = null)
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    /**
     * Get typeMedia
     *
     * @return \MegaCastingBundle\Entity\TypeMedia 
     */
    public function getTypeMedia()
    {
        return $this->typeMedia;
    }

    /**
     * Set utilisateur
     *
     * @param \MegaCastingBundle\Entity\utilisateur $utilisateur
     * @return Media
     */
    public function setUtilisateur(\MegaCastingBundle\Entity\utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \MegaCastingBundle\Entity\utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
