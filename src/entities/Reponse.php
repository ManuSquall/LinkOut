<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="reponse")
 **/

class Reponse
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $date;
    /** @Column(type="string") **/
    private $motivation;
    /** @Column(type="string") **/
    private $dateReponse;

    /**
     * Many reponses have one offre. This is the owning side.
     * @ManyToOne(targetEntity="Offre", inversedBy="reponses")
     * @JoinColumn(name="offre_id", referencedColumnName="id")
     */
    private $offre;
    
    /**
     * Many reponse have one demandeur. This is the owning side.
     * @ManyToOne(targetEntity="Demandeur", inversedBy="reponses")
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

   

    /**
     * Get the value of dateReponse
     */ 
    public function getDateReponse()
    {
        return $this->dateReponse;
    }

    /**
     * Set the value of dateReponse
     *
     * @return  self
     */ 
    public function setDateReponse($dateReponse)
    {
        $this->dateReponse = $dateReponse;

        return $this;
    }

    /**
     * Get the value of motivation
     */ 
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set the value of motivation
     *
     * @return  self
     */ 
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

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
     * Get many reponse have one offre. This is the owning side.
     */ 
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * Set many reponse have one offre. This is the owning side.
     *
     * @return  self
     */ 
    public function setOffre($offre)
    {
        $this->offre = $offre;

        return $this;
    }

    /**
     * Get many reponse have one demandeur. This is the owning side.
     */ 
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set many reponse have one demandeur. This is the owning side.
     *
     * @return  self
     */ 
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }
}

?>
