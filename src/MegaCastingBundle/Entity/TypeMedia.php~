<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMedia
 *
 * @ORM\Table("typeMedia")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\TypeMediaRepository")
 */
class TypeMedia
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
     * @ORM\OneToMany(targetEntity="Multimedia", mappedBy="typeMedia", cascade={"persist"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $multimedia;


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
     * @return TypeMedia
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
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add multimedias
     *
     * @param \MegaCastingBundle\Entity\Multimedia $multimedias
     * @return TypeMedia
     */
    public function addMultimedia(\MegaCastingBundle\Entity\Media $multimedias)
    {
        $this->multimedias[] = $multimedias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \MegaCastingBundle\Entity\Multimedias $multimedias
     */
    public function removeMultimedia(\MegaCastingBundle\Entity\Media $multimedias)
    {
        $this->multimedias->removeElement($multimedias);
    }

    /**
     * Get $Multimedias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMultimedias()
    {
        return $this->$multimedias;
    }

    /**
     * Get multimedia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMultimedia()
    {
        return $this->multimedia;
    }
}
