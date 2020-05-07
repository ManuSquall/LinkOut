<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="categorie")
 **/
class Categorie
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * One Categorie has many offre. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="categorie")
     */
    private $offres;
    
    /**
     * One Categorie has many demandeur. This is the inverse side.
     * @OneToMany(targetEntity="Demandeur", mappedBy="categorie")
     */
    private $demandeurs;

    

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
     * Get one Categorie has many offre. This is the inverse side.
     */ 
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Set one Categorie has many offre. This is the inverse side.
     *
     * @return  self
     */ 
    public function setOffres($offres)
    {
        $this->offres = $offres;

        return $this;
    }

    /**
     * Get one Categorie has many demandeur. This is the inverse side.
     */ 
    public function getDemandeurs()
    {
        return $this->demandeurs;
    }

    /**
     * Set one Categorie has many demandeur. This is the inverse side.
     *
     * @return  self
     */ 
    public function setDemandeurs($demandeurs)
    {
        $this->demandeurs = $demandeurs;

        return $this;
    }
}

?>