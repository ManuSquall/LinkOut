<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="demandeur")
 **/
class Demandeur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $tel;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string", length=2) **/
    private $sexe;
    /** @Column(type="string") **/
    private $datenais;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $mdp;
    
     /**
     * One Demandeur has many reponse. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="demandeur")
     */
    private $reponses;

    /**
     * Many Demandeur have one categorie. This is the owning side.
     * @ManyToOne(targetEntity="Categorie", inversedBy="demandeur")
     * @JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;

    /**
     * One demandeur has One Cv.
     * @OneToOne(targetEntity="Cv", mappedBy="demandeur")
     */
    private $cv;
    
    
    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    
    public function getDatenais()
    {
        return $this->datenais;
    }
    public function setDatenais($datenais)
    {
        $this->datenais = $datenais;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
    
    
    public function getReponses()
    {
        return $this->reponses;
    }
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }
    

    /**
     * Get many Demandeur have one categorie. This is the owning side.
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set many Demandeur have one categorie. This is the owning side.
     *
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

    }

    /**
     * Get one demandeur has One Cv.
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set one demandeur has One Cv.
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