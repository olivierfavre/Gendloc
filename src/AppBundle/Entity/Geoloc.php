<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_geoloc")
 */
class Geoloc
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\Column(name="sms_id", type="integer")
     */
    private $sms_id;

    /**
     * @ORM\Column(name="prec", type="integer")
     */
    private $precision;

    /**
     * @ORM\Column(name="useragent", type="string", length=200)
     */
    private $useragent;

    private $coordinates;
    
    

    

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Geoloc
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
     * Set smsId
     *
     * @param integer $smsId
     *
     * @return Geoloc
     */
    public function setSmsId($smsId)
    {
        $this->sms_id = $smsId;

        return $this;
    }

    /**
     * Get smsId
     *
     * @return integer
     */
    public function getSmsId()
    {
        return $this->sms_id;
    }

    /**
     * Set precision
     *
     * @param integer $precision
     *
     * @return Geoloc
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * Get precision
     *
     * @return integer
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Set validity
     *
     * @param integer $validity
     *
     * @return Geoloc
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Get validity
     *
     * @return integer
     */
    public function getValidity()
    {
        return $this->validity;
    }


    public function setCordinates($coordinates)
    {
        $this->coordinates = $coordinates;
        
        return $this;
    }
    
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     *
     * @return Geoloc
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string
     */
    public function getUseragent()
    {
        return $this->useragent;
    }
}
