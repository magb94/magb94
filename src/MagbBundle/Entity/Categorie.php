<?php

namespace MagbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var integer
     */
    private $idcat;

    /**
     * @var string
     */
    private $nomcat;


    /**
     * Get idcat
     *
     * @return integer 
     */
    public function getIdcat()
    {
        return $this->idcat;
    }

    /**
     * Set nomcat
     *
     * @param string $nomcat
     * @return Categorie
     */
    public function setNomcat($nomcat)
    {
        $this->nomcat = $nomcat;

        return $this;
    }

    /**
     * Get nomcat
     *
     * @return string 
     */
    public function getNomcat()
    {
        return $this->nomcat;
    }
}
