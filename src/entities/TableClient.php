<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\common\collections\Arraycollection;
/**
 * @ORM\Entity 
 * @ORM\Table(name="clientsimple")
 */
class TableClient
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private $id;
    /** 
     * @ORM\Column(type="string") 
    */
    private $nom;
    /** 
     * @ORM\Column(type="string") 
    */
    private $prenom;
    /** 
     * @ORM\Column(type="string")
    */
    private $adresseclient;
    /** 
     * @ORM\Column(type="string")
    */
    private $email1;
    /** 
     * @ORM\Column(type="string")
    */
    private $numerotelephone;
    /** 
     * @ORM\Column(type="string")
    */
    private $profession;
    /** 
     * @ORM\Column(type="string")
    */
    private $cni;
    /** 
     * @ORM\Column(type="string")
    */
    private $datenaissance;
    /** 
     * @ORM\Column(type="decimal") 
    */
    private $salaire;
    /** 
     * @ORM\Column(type="string")
    */
    private $nomemployeur;
    /** 
     * @ORM\Column(type="string")
    */
    private $raisonsocial;
    /** 
     * @ORM\Column(type="string")
    */
    private $telephoneemploy;
    /** 
     * @ORM\Column(type="string")
    */
    private $adresseemployeur;
    /** 
     * @ORM\Column(type="string")
    */
    private $ninea;
    /** 
     * @ORM\Column(type="string")
    */
    private $email;
    /**
     * @ORM\OneToMany(targetEntity="CompteTable", mappedBy="client")
     */
    private $comptes;

    public function __construct()
    {
        $this->TableClient = new ArrayCollection();
    }

    public function setNom($nom)
    {
        return $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setAdresse($adresseclient)
    {
        return $this->adresseclient = $adresseclient;
    }

    public function getAdresse()
    {
        return $this->adresseclient;
    }

    public function setEmail1($email1)
    {
        return $this->email1 = $email1;
    }

    public function getEmail1()
    {
        return $this->email1;
    }

    public function setNumerotelephone($numerotelephone)
    {
        return $this->numerotelephone = $numerotelephone;
    }

    public function getNumerotelephone()
    {
        return $this->numerotelephone;
    }

    public function setProfession($profession)
    {
        return $this->profession = $profession;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function setCni($cni)
    {
        return $this->cni = $cni;
    }

    public function getCni()
    {
        return $this->cni;
    }

    public function setDatenaissance($datenaissance)
    {
        return $this->datenaissance = $datenaissance;
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    public function setSalaire($salaire)
    {
        return $this->salaire = $salaire;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setNomemployeur($nomemployeur)
    {
        return $this->nomemployeur = $nomemployeur;
    }

    public function getNomemployeur()
    {
        return $this->nomemployeur;
    }

    public function setRaisonsocial($raisonsocial)
    {
        return $this->raisonsocial = $raisonsocial;
    }

    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    public function setTelephoneEmployeur($telephone)
    {
        return $this->telephoneemploy = $telephone;
    }

    public function getTelephone()
    {
        return $this->telephoneemploy;
    }

    public function setAdresseEmployeur($adresseemployeur)
    {
        return $this->adresseemployeur = $adresseemployeur;
    }

    public function getAdresseEmploy()
    {
        return $this->adresseemployeur;
    }

    public function setNinea($ninea)
    {
        return $this->ninea = $ninea;
    }

    public function getNinea()
    {
        return $this->ninea;
    }

    public function setEmail($email)
    {
        return  $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of copmtes
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set the value of copmtes
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
}
