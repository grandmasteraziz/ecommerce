<?php
/**
 * Created by Aziz.
 * User: Aziz ÇİFTÇİ
 * Date: 29.06.2017
 * Time: 16:54
 */

namespace Patnos\SepetBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cinsiyet", type="string", length=100)
     */
    private $cinsiyet=null;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=15)
     */
    private $telefon=null;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\Adres",mappedBy="uye")
     */
    protected $adresler;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\Siparis",mappedBy="uye")
     */
    protected $siparisler;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\SiparisUrun",mappedBy="uye")
     */
    protected $siparisUrun;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\UrunResim",mappedBy="uye")
     */
    protected $fotolar;

    /**
     * @ORM\OneToMany(targetEntity="PatnosBlogBundle\Entity\Firma",mappedBy="uye")
     */
    protected $firmalar;




    public function __construct()
    {
        parent::__construct();

        $this->adresler = new ArrayCollection();
        $this->siparisler = new ArrayCollection();
        $this->siparisUrun = new ArrayCollection();
        $this->fotolar = new ArrayCollection();
        $this->firmalar =new ArrayCollection();


    }
}