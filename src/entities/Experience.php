<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="experience")
 **/

class Experience
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $intitule;
    /** @Column(type="string") **/
    private $periode;
    /** @Column(type="string") **/
    private $entreprise;
    /** @Column(type="string") **/
    private $description;

    /**
     * Many experience have one cv. This is the owning side.
     * @ManyToOne(targetEntity="Cv", inversedBy="experience")
     * @JoinColumn(name="cv_id", referencedColumnName="id")
     */
    private $cv;
    

    

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
     * Get the value of entreprise
     */ 
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set the value of entreprise
     *
     * @return  self
     */ 
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get the value of periode
     */ 
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set the value of periode
     *
     * @return  self
     */ 
    public function setPeriode($periode)
    {
        $this->periode = $periode;

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
     * Get many experience have one cv. This is the owning side.
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set many experience have one cv. This is the owning side.
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }
}

?>
