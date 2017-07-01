<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Patnos\SepetBundle\Entity\User;
use Patnos\SepetBundle\Entity\Urun;



/**
 * UrunResim
 *
 * @ORM\Table(name="urun_resim")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\UrunResimRepository")
 */
class UrunResim
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
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="Patnos\SepetBundle\Entity\User",inversedBy="fotolar")
     * @ORM\JoinColumn(referencedColumnName="id",name="uye_id",onDelete="CASCADE")
     * */
    private $uye;

    /**
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="Patnos\SepetBundle\Entity\Urun",inversedBy="fotolar")
     * @ORM\JoinColumn(referencedColumnName="id",name="foto_id",onDelete="CASCADE")
     * */
    private $urun;

}

