<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="competence")
 **/

class Competence
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * Many competences have Many Cv.
     * @ManyToMany(targetEntity="Cv", mappedBy="competence")
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
     * Get many competences have Many Cv.
     */ 
    public function getCvs()
    {
        return $this->cvs;
    }

    /**
     * Set many competences have Many Cv.
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
