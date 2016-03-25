<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_smsloc")
 */
class Smsloc
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="operator_id", type="integer")
     */
    private $operator_id;

    /**
     * @ORM\Column(name="tel_number", type="string", length=15)
     */
    private $tel_number;

    /**
     * @ORM\Column(name="date", type="string", length=20)
     */
    private $date;

    /**
     * @ORM\Column(name="heure", type="string", length=10)
     */
    private $heure;

    /**
     * @ORM\Column(name="sms_token", type="string", length=10)
     */
    private $sms_token;

    /**
     * @ORM\Column(name="statut", type="string", length=25)
     */
    private $statut;

    /**
     * @ORM\Column(name="validite", type="integer")
     */
    private $validite;

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
     * Set operatorId
     *
     * @param integer $operatorId
     *
     * @return Smsloc
     */
    public function setOperatorId($operatorId)
    {
        $this->operator_id = $operatorId;

        return $this;
    }

    /**
     * Get operatorId
     *
     * @return integer
     */
    public function getOperatorId()
    {
        return $this->operator_id;
    }

    /**
     * Set smsToken
     *
     * @param string $smsToken
     *
     * @return Smsloc
     */
    public function setSmsToken($smsToken)
    {
        $this->sms_token = $smsToken;

        return $this;
    }

    /**
     * Get smsToken
     *
     * @return string
     */
    public function getSmsToken()
    {
        return $this->sms_token;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Smsloc
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set telNumber
     *
     * @param string $telNumber
     *
     * @return Smsloc
     */
    public function setTelNumber($telNumber)
    {
        $this->tel_number = $telNumber;

        return $this;
    }

    /**
     * Get telNumber
     *
     * @return string
     */
    public function getTelNumber()
    {
        return $this->tel_number;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Smsloc
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param string $heure
     *
     * @return Smsloc
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set validite
     *
     * @param integer $validite
     *
     * @return Smsloc
     */
    public function setValidite($validite)
    {
        $this->validite = $validite;

        return $this;
    }

    /**
     * Get validite
     *
     * @return integer
     */
    public function getValidite()
    {
        return $this->validite;
    }
}
