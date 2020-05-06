<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="offre")
 **/

class Offre
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $intitule;
    /** @Column(type="string") **/
    private $description;
    /** @Column(type="string") **/
    private $datePub;
    /** @Column(type="string") **/
    private $dateFin;

    /**
     * Many Offre have one categorie. This is the owning side.
     * @ManyToOne(targetEntity="Categorie", inversedBy="offre")
     * @JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;
    
    /**
     * Many Offre have one entreprise. This is the owning side.
     * @ManyToOne(targetEntity="Entreprise", inversedBy="offre")
     * @JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $entreprise;

    /**
     * One offre has many reponse. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="offre")
     */
    private $reponses;
    



    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of datePub
     */ 
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * Set the value of datePub
     *
     * @return  self
     */ 
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of intitule
     */ 
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set the value of intitule
     *
     * @return  self
     */ 
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

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
     * Get many Offre have one categorie. This is the owning side.
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set many Offre have one categorie. This is the owning side.
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get many Offre have one entreprise. This is the owning side.
     */ 
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set many Offre have one entreprise. This is the owning side.
     *
     * @return  self
     */ 
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get one offre has many reponse. This is the inverse side.
     */ 
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * Set one offre has many reponse. This is the inverse side.
     *
     * @return  self
     */ 
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;

        return $this;
    }
}

?>