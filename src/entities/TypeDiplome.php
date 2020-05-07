<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="typediplome")
 **/

class TypeDiplome
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * One typeDiplome has many diplomes. This is the inverse side.
     * @OneToMany(targetEntity="Diplome", mappedBy="typeDiplome")
     */
    private $diplomes;


    public function __construct() {
        $this->diplomes = new ArrayCollection();
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
     * Get one typeDilome has many diplome. This is the inverse side.
     */ 
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Set one typeDilome has many diplome. This is the inverse side.
     *
     * @return  self
     */ 
    public function setDiplomes($diplomes)
    {
        $this->diplomes = $diplomes;

        return $this;
    }
}

?>
