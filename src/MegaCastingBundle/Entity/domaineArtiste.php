<?php

namespace MegaCastingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * domaineArtiste
 *
 * @ORM\Table("domaineartiste")
 * @ORM\Entity(repositoryClass="MegaCastingBundle\Repository\domaineArtisteRepository")
 */
class domaineArtiste
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
