<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Patnos\SepetBundle\Entity\User;

/**
 * Siparis
 *
 * @ORM\Table(name="siparis")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\SiparisRepository")
 */
class Siparis
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
     * @var int
     *
     * @ORM\Column(name="toplamUrun", type="smallint")
     */
    private $toplamUrun;

    /**
     * @var int
     *
     * @ORM\Column(name="toplamFiyat", type="smallint")
     */
    private $toplamFiyat;

    /**
     * @var int
     *
     * @ORM\Column(name="odeme", type="smallint")
     */
    private $odeme;

    /**
     * @var int
     *
     * @ORM\Column(name="siparisOnay", type="smallint", nullable=true)
     */
    private $siparisOnay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="siparisTarih", type="datetime")
     */
    private $siparisTarih;

    /**
     * @var string
     *
     * @ORM\Column(name="notEkle", type="string", length=255)
     */
    private $notEkle;


    /**
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="Patnos\SepetBundle\Entity\User",inversedBy="siparisler")
     * @ORM\JoinColumn(referencedColumnName="id",name="uye_id",onDelete="CASCADE")
     * */
    private $uye;


    /**
     *Many-To-One, Bidirectional
     *
     * 
     *
     * @ORM\ManyToOne(targetEntity="Patnos\SepetBundle\Entity\SiparisUrun",inversedBy="siparis")
     * @ORM\JoinColumn(referencedColumnName="id",name="siparisurun_id",onDelete="CASCADE")
     * */
    private $siparisUrunleri;
}

