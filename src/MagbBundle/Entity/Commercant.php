<?php

namespace MagbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercant
 */
class Commercant
{
    /**
     * @var integer
     */
    private $idcommercant;

    /**
     * @var integer
     */
    private $idville;

    /**
     * @var integer
     */
    private $idsouscat;

    /**
     * @var string
     */
    private $nomcommerce;

    /**
     * @var string
     */
    private $adressecommercant;

    /**
     * @var string
     */
    private $telcommercant;

    /**
     * @var string
     */
    private $faxcommercant;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $emailcommercant;

    /**
     * @var string
     */
    private $sitecommerce;


    /**
     * Get idcommercant
     *
     * @return integer 
     */
    public function getIdcommercant()
    {
        return $this->idcommercant;
    }

    /**
     * Set idville
     *
     * @param integer $idville
     * @return Commercant
     */
    public function setIdville($idville)
    {
        $this->idville = $idville;

        return $this;
    }

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
     * Set idsouscat
     *
     * @param integer $idsouscat
     * @return Commercant
     */
    public function setIdsouscat($idsouscat)
    {
        $this->idsouscat = $idsouscat;

        return $this;
    }

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
     * Set nomcommerce
     *
     * @param string $nomcommerce
     * @return Commercant
     */
    public function setNomcommerce($nomcommerce)
    {
        $this->nomcommerce = $nomcommerce;

        return $this;
    }

    /**
     * Get nomcommerce
     *
     * @return string 
     */
    public function getNomcommerce()
    {
        return $this->nomcommerce;
    }

    /**
     * Set adressecommercant
     *
     * @param string $adressecommercant
     * @return Commercant
     */
    public function setAdressecommercant($adressecommercant)
    {
        $this->adressecommercant = $adressecommercant;

        return $this;
    }

    /**
     * Get adressecommercant
     *
     * @return string 
     */
    public function getAdressecommercant()
    {
        return $this->adressecommercant;
    }

    /**
     * Set telcommercant
     *
     * @param string $telcommercant
     * @return Commercant
     */
    public function setTelcommercant($telcommercant)
    {
        $this->telcommercant = $telcommercant;

        return $this;
    }

    /**
     * Get telcommercant
     *
     * @return string 
     */
    public function getTelcommercant()
    {
        return $this->telcommercant;
    }

    /**
     * Set faxcommercant
     *
     * @param string $faxcommercant
     * @return Commercant
     */
    public function setFaxcommercant($faxcommercant)
    {
        $this->faxcommercant = $faxcommercant;

        return $this;
    }

    /**
     * Get faxcommercant
     *
     * @return string 
     */
    public function getFaxcommercant()
    {
        return $this->faxcommercant;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Commercant
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set emailcommercant
     *
     * @param string $emailcommercant
     * @return Commercant
     */
    public function setEmailcommercant($emailcommercant)
    {
        $this->emailcommercant = $emailcommercant;

        return $this;
    }

    /**
     * Get emailcommercant
     *
     * @return string 
     */
    public function getEmailcommercant()
    {
        return $this->emailcommercant;
    }

    /**
     * Set sitecommerce
     *
     * @param string $sitecommerce
     * @return Commercant
     */
    public function setSitecommerce($sitecommerce)
    {
        $this->sitecommerce = $sitecommerce;

        return $this;
    }

    /**
     * Get sitecommerce
     *
     * @return string 
     */
    public function getSitecommerce()
    {
        return $this->sitecommerce;
    }
}
