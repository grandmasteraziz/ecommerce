<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiparisUrun
 *
 * @ORM\Table(name="siparis_urun")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\SiparisUrunRepository")
 *
 */
class SiparisUrun
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
     * @ORM\Column(name="urunMiktar", type="smallint")
     */
    private $urunMiktar;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\Siparis",mappedBy="siparis_urun")
     */
    private $siparis;

    /**
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="PatnosSepetBundle\Entity\User",inversedBy="siparis_urun")
     * @ORM\JoinColumn(referencedColumnName="id",name="uye_id",onDelete="CASCADE")
     * */
    private  $uye;

    /**
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="PatnosSepetBundle\Entity\Urun",inversedBy="siparis_urun")
     * @ORM\JoinColumn(referencedColumnName="id",name="urun_id",onDelete="CASCADE")
     * */
    private  $urun;


    public function __construct()
    {

        $this->siparis = new ArrayCollection();


    }

}

