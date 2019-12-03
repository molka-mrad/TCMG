<?PHP
class actualites
{
	private $id;
	private $titre;
	private $contenu;
	private $img;
	
	
	function __construct($id,$titre,$contenu,$img){
        $this->id=$id;
        $this->titre=$titre;
		$this->contenu=$contenu;
		$this->img=$img;
	}
	
	function getId(){
		return $this->id;
	}
	function getTitre(){
		return $this->titre;
	}
	function getContenu(){
		return $this->contenu;
	}
	function getImage(){
		return $this->img;
	}

	function setId($id){
		$this->id=$id;
	}
	function setTitre($titre){
		$this->titre=$titre;
	}
	function setContenu($contenu){
		$this->contenu=$contenu;
	}
	function setImage($img){
		$this->img=$img;
	}
}

?>