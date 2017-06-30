<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="PatnosSepetBundle\Entity\User",inversedBy="fotolar")
     * @ORM\JoinColumn(referencedColumnName="id",name="foto_id",onDelete="CASCADE")
     * */
    private $uye;

    /**
     *Many-To-One, Bidirectional
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="PatnosSepetBundle\Entity\Urun",inversedBy="fotolar")
     * @ORM\JoinColumn(referencedColumnName="id",name="foto_id",onDelete="CASCADE")
     * */
    private $urun;

}

