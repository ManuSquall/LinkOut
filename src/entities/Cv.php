<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="cv")
 **/

class Cv
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $intitule;
    /** @Column(type="string") **/
    private $dateMAJ;
    /** @Column(type="string") **/
    private $divers;
    /** @Column(type="string") **/
    private $atouts;
    /** @Column(type="string") **/
    private $langues;
    /** @Column(type="string") **/
    private $competences;

    /**
     * One Cv has One Demandeur.
     * @OneToOne(targetEntity="Demandeur", inversedBy="cv")
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * One Cv has many experience. This is the inverse side.
     * @OneToMany(targetEntity="Experience", mappedBy="cv")
     */
    private $experiences;
    
    /**
     * One Cv has many diplome. This is the inverse side.
     * @OneToMany(targetEntity="Diplome", mappedBy="cv")
     */
    private $diplomes;

    

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
     * Get the value of dateMAJ
     */ 
    public function getDateMAJ()
    {
        return $this->dateMAJ;
    }

    /**
     * Set the value of dateMAJ
     *
     * @return  self
     */ 
    public function setDateMAJ($dateMAJ)
    {
        $this->dateMAJ = $dateMAJ;

        return $this;
    }

    /**
     * Get the value of divers
     */ 
    public function getDivers()
    {
        return $this->divers;
    }

    /**
     * Set the value of divers
     *
     * @return  self
     */ 
    public function setDivers($divers)
    {
        $this->divers = $divers;

        return $this;
    }

    /**
     * Get the value of atouts
     */ 
    public function getAtouts()
    {
        return $this->atouts;
    }

    /**
     * Set the value of atouts
     *
     * @return  self
     */ 
    public function setAtouts($atouts)
    {
        $this->atouts = $atouts;

        return $this;
    }

    /**
     * Get the value of langues
     */ 
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * Set the value of langues
     *
     * @return  self
     */ 
    public function setLangues($langues)
    {
        $this->langues = $langues;

        return $this;
    }

    /**
     * Get the value of competences
     */ 
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set the value of competences
     *
     * @return  self
     */ 
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get one Cv has One Demandeur.
     */ 
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set one Cv has One Demandeur.
     *
     * @return  self
     */ 
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get one Cv has many experience. This is the inverse side.
     */ 
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Set one Cv has many experience. This is the inverse side.
     *
     * @return  self
     */ 
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;

        return $this;
    }

    /**
     * Get one Cv has many diplome. This is the inverse side.
     */ 
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Set one Cv has many diplome. This is the inverse side.
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
