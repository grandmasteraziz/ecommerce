<?php

namespace Patnos\SepetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Patnos\SepetBundle\Entity\User;

/**
 * Adres
 *
 * @ORM\Table(name="adres")
 * @ORM\Entity(repositoryClass="Patnos\SepetBundle\Repository\AdresRepository")
 */
class Address
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
     * @ORM\Column(name="telefon", type="string", length=20)
     */
    private $telefon;

    /**
     *Many-To-One, Bidirectional
     *
     * 
     *
     * @ORM\ManyToOne(targetEntity="Patnos\SepetBundle\Entity\User",inversedBy="addresses")
     * @ORM\JoinColumn(referencedColumnName="id",name="uye_id",onDelete="CASCADE")
     * */
    private $uyem;

}

