<?php

namespace MagbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 */
class Ville
{
    /**
     * @var integer
     */
    private $idville;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var integer
     */
    private $cp;


    /**
     * Get idville
     *
     * @return integer 
     */
    public function getIdville()
    {
        return $this->idville;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Ville
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }
}
