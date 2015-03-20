<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement
 *
 * @ORM\Table("abonnement")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\abonnementRepository")
 */
class abonnement
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
     * @ORM\Column(name="restant", type="string", length=255)
     */
    private $restant;


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
     * Set restant
     *
     * @param string $restant
     * @return abonnement
     */
    public function setRestant($restant)
    {
        $this->restant = $restant;

        return $this;
    }

    /**
     * Get restant
     *
     * @return string 
     */
    public function getRestant()
    {
        return $this->restant;
    }
}
