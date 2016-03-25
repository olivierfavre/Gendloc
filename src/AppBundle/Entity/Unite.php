<?php

// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="app_unites")
 * @ORM\Entity
 */
class Unite
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=25, unique=true)
     */
    private $unitname;

    /**
     * @ORM\Column(name="tel", type="string", length=25, unique=true)
     */
    private $telnum;

    /**
     * @ORM\Column(name="coordinates", type="string")
     */
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
     * Set unitname
     *
     * @param string $unitname
     *
     * @return Unite
     */
    public function setUnitname($unitname)
    {
        $this->unitname = $unitname;

        return $this;
    }

    /**
     * Get unitname
     *
     * @return string
     */
    public function getUnitname()
    {
        return $this->unitname;
    }

    /**
     * Set telnum
     *
     * @param string $telnum
     *
     * @return Unite
     */
    public function setTelnum($telnum)
    {
        $this->telnum = $telnum;

        return $this;
    }

    /**
     * Get telnum
     *
     * @return string
     */
    public function getTelnum()
    {
        return $this->telnum;
    }

    /**
     * Set coordinates
     *
     * @param string $coordinates
     *
     * @return Unite
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}
