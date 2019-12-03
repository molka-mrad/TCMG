<?PHP
class evenements
{
	private $id;
    private $libelle;
    private $descrip;
	private $dateDeb;
    private $dateFin;
	private $nbParticip;
	private $lieux;
	private $img;
	
	
	function __construct($id,$libelle,$descrip,$dateDeb,$dateFin,$nbParticip,$lieux,$img){
        $this->id=$id;
        $this->libelle=$libelle;
        $this->descrip=$descrip;
		$this->dateDeb=$dateDeb;
        $this->dateFin=$dateFin;
		$this->nbParticip=$nbParticip;
		$this->lieux=$lieux;
		$this->img=$img;
	}
	
	function getId(){
		return $this->id;
	}
	function getLibelle(){
		return $this->libelle;
    }
    function getDescrip(){
		return $this->descrip;
	}
	function getDateDeb(){
		return $this->dateDeb;
	}
	function getDateFin(){
		return $this->dateFin;
    }
    function getNbParticip(){
		return $this->nbParticip;
	}
	function getLieux(){
		return $this->lieux;
	}
	function getImg(){
		return $this->img;
	}


	function setId($id){
		$this->id=$id;
	}
	function setLibelle($libelle){
		$this->libelle=$libelle;
    }
    function setDescrip($descrip){
		$this->descrip=$descrip;
	}
	function setDateDeb($dateDeb){
		$this->dateDeb=$dateDeb;
	}
	function setDateFin($dateFin){
		$this->dateFin=$dateFin;
    }
    function setNbParticip($nbParticip){
		$this->nbParticip=$nbParticip;
	}
	function setLieux($lieux){
		$this->lieux=$lieux;
	}
	function setImg($img){
		$this->img=$img;
	}
}

?>