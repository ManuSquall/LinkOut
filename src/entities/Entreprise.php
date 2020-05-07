<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="entreprise")
 **/

class Entreprise
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $ninea;
    /** @Column(type="string") **/
    private $raisonSociale;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $mdp;
    /** @Column(type="string") **/
    private $siege;
    /** @Column(type="string") **/
    private $dateCreation;
    /** @Column(type="string") **/
    private $logo;
    /** @Column(type="string") **/
    private $nomCeo;

    /**
     * Many entreprises have one type. This is the owning side.
     * @ManyToOne(targetEntity="Type", inversedBy="entreprises")
     * @JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * One entreprise has many offres. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="entreprise")
     */
    private $offres;

    

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
     * Get the value of ninea
     */ 
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set the value of ninea
     *
     * @return  self
     */ 
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    /**
     * Get the value of raisonSociale
     */ 
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set the value of raisonSociale
     *
     * @return  self
     */ 
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of siege
     */ 
    public function getSiege()
    {
        return $this->siege;
    }

    /**
     * Set the value of siege
     *
     * @return  self
     */ 
    public function setSiege($siege)
    {
        $this->siege = $siege;

        return $this;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of nomCeo
     */ 
    public function getNomCeo()
    {
        return $this->nomCeo;
    }

    /**
     * Set the value of nomCeo
     *
     * @return  self
     */ 
    public function setNomCeo($nomCeo)
    {
        $this->nomCeo = $nomCeo;

        return $this;
    }

    /**
     * Get many entreprise have one type. This is the owning side.
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set many entreprise have one type. This is the owning side.
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get one entreprise has many offre. This is the inverse side.
     */ 
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Set one entreprise has many offre. This is the inverse side.
     *
     * @return  self
     */ 
    public function setOffres($offres)
    {
        $this->offres = $offres;

        return $this;
    }
}

?>
