<?php

namespace MagbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscategorie
 */
class Souscategorie
{
    /**
     * @var integer
     */
    private $idsouscat;

    /**
     * @var string
     */
    private $nomsouscat;

    /**
     * @var integer
     */
    private $idcat;


    /**
     * Get idsouscat
     *
     * @return integer 
     */
    public function getIdsouscat()
    {
        return $this->idsouscat;
    }

    /**
     * Set nomsouscat
     *
     * @param string $nomsouscat
     * @return Souscategorie
     */
    public function setNomsouscat($nomsouscat)
    {
        $this->nomsouscat = $nomsouscat;

        return $this;
    }

    /**
     * Get nomsouscat
     *
     * @return string 
     */
    public function getNomsouscat()
    {
        return $this->nomsouscat;
    }

    /**
     * Set idcat
     *
     * @param integer $idcat
     * @return Souscategorie
     */
    public function setIdcat($idcat)
    {
        $this->idcat = $idcat;

        return $this;
    }

    /**
     * Get idcat
     *
     * @return integer 
     */
    public function getIdcat()
    {
        return $this->idcat;
    }
}
