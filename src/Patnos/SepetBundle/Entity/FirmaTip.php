<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FirmaTip
 *
 * @ORM\Table(name="firma_tip")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\FirmaTipRepository")
 */
class FirmaTip
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adi", type="string", length=100)
     */
    private $adi;

    /**
     * @var string
     *
     * @ORM\Column(name="resim", type="string", length=255)
     */
    private $resim;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adi
     *
     * @param string $adi
     *
     * @return FirmaTip
     */
    public function setAdi($adi)
    {
        $this->adi = $adi;

        return $this;
    }

    /**
     * Get adi
     *
     * @return string
     */
    public function getAdi()
    {
        return $this->adi;
    }

    /**
     * Set resim
     *
     * @param string $resim
     *
     * @return FirmaTip
     */
    public function setResim($resim)
    {
        $this->resim = $resim;

        return $this;
    }

    /**
     * Get resim
     *
     * @return string
     */
    public function getResim()
    {
        return $this->resim;
    }
}

