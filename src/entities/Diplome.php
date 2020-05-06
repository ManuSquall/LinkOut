<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="diplome")
 **/
class Diplome
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    /** @Column(type="string") **/
    private $anneeObtention;
    /** @Column(type="string") **/
    private $etablissement;

     /**
     * Many diplome have one cv. This is the owning side.
     * @ManyToOne(targetEntity="Cv", inversedBy="diplome")
     * @JoinColumn(name="cv_id", referencedColumnName="id")
     */
    private $cv;
    
    /**
     * Many diplome have one typeDiplome. This is the owning side.
     * @ManyToOne(targetEntity="TypeDiplome", inversedBy="diplome")
     * @JoinColumn(name="typeDiplome_id", referencedColumnName="id")
     */
    private $typeDiplome;

    

    /**
     * Get the value of etablissement
     */ 
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set the value of etablissement
     *
     * @return  self
     */ 
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get the value of anneeObtention
     */ 
    public function getAnneeObtention()
    {
        return $this->anneeObtention;
    }

    /**
     * Set the value of anneeObtention
     *
     * @return  self
     */ 
    public function setAnneeObtention($anneeObtention)
    {
        $this->anneeObtention = $anneeObtention;

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
     * Get many diplome have one cv. This is the owning side.
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set many diplome have one cv. This is the owning side.
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get many diplome have one typeDiplome. This is the owning side.
     */ 
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set many diplome have one typeDiplome. This is the owning side.
     *
     * @return  self
     */ 
    public function setTypeDiplome($typeDiplome)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }
}

?>
