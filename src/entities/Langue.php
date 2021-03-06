<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="langue")
 **/
class Langue
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * Many langues have Many Cvs.
     * @ManyToMany(targetEntity="Cv", mappedBy="langues")
     */
    private $cvs;

    public function __construct() {
        $this->cvs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
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
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get many langues have Many Cvs.
     */ 
    public function getCvs()
    {
        return $this->cvs;
    }

    /**
     * Set many langues have Many Cvs.
     *
     * @return  self
     */ 
    public function setCvs($cvs)
    {
        $this->cvs = $cvs;

        return $this;
    }
}

?>
