<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="type")
 **/

class Type
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * One type has many entreprises. This is the inverse side.
     * @OneToMany(targetEntity="Entreprise", mappedBy="type")
     */
    private $entreprises;

    public function __construct() {
        $this->entreprises = new ArrayCollection();
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
     * Get one type has many entreprise. This is the inverse side.
     */ 
    public function getEntreprises()
    {
        return $this->entreprises;
    }

    /**
     * Set one type has many entreprise. This is the inverse side.
     *
     * @return  self
     */ 
    public function setEntreprises($entreprises)
    {
        $this->entreprises = $entreprises;

        return $this;
    }
}

?>
