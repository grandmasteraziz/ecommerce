<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategori
 *
 * @ORM\Table(name="kategori")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\KategoriRepository")
 */
class Kategori
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
     * @ORM\Column(name="adi", type="string", length=255)
     */
    private $adi;

    /**
     * @var int
     *
     * @ORM\Column(name="parentID", type="smallint")
     */
    private $parentID;

    /**
     * @var string
     *
     * @ORM\Column(name="kategoriResim", type="string", length=255)
     */
    private $kategoriResim;


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
     * @return Kategori
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
     * Set parentID
     *
     * @param integer $parentID
     *
     * @return Kategori
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;

        return $this;
    }

    /**
     * Get parentID
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * Set kategoriResim
     *
     * @param string $kategoriResim
     *
     * @return Kategori
     */
    public function setKategoriResim($kategoriResim)
    {
        $this->kategoriResim = $kategoriResim;

        return $this;
    }

    /**
     * Get kategoriResim
     *
     * @return string
     */
    public function getKategoriResim()
    {
        return $this->kategoriResim;
    }
}

