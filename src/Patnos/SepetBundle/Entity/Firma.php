<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Firma
 *
 * @ORM\Table(name="firma")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\FirmaRepository")
 */
class Firma
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
     * @ORM\Column(name="aktif", type="smallint")
     */
    private $aktif;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=255)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;


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
     * @return Firma
     */
    public function setAdi($adi)
    {
        $this->adi = $adi;

        return $this;
    }

    /**
     *Many-To-One, Bidirectional
     *
     * @var  User $adres
     *
     * @ORM\ManyToOne(targetEntity="PatnosSepetBundle\Entity\User",inversedBy="firmalar")
     * @ORM\JoinColumn(referencedColumnName="id",name="firma_id",onDelete="CASCADE")
     * */
    private $uye;
}

