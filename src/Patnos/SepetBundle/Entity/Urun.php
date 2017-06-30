<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Intl\Data\Util\ArrayAccessibleResourceBundle;

/**
 * Urun
 *
 * @ORM\Table(name="urun")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\UrunRepository")
 */
class Urun
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
     * @var string
     *
     * @ORM\Column(name="fiyat", type="decimal", precision=2, scale=0)
     */
    private $fiyat;

    /**
     * @var string
     *
     * @ORM\Column(name="Resim", type="string", length=255)
     */
    private $resim;

    /**
     * @var int
     *
     * @ORM\Column(name="aktif", type="smallint")
     */
    private $aktif;


    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\SiparisUrun",mappedBy="urun")
     */
    private $siparisler;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\UrunResim",mappedBy="urun")
     */
    private $fotolar;


    public function __construct()
    {
        $this->siparisler = new ArrayCollection();
        $this->fotolar = new ArrayCollection();
    }
}

