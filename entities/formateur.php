<?PHP
class formateurs
{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $age;
	private $inscription;
	private $email;
	
	
	function __construct($cin,$nom,$prenom,$tel,$age,$inscription,$email,$img){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->age=$age;
		$this->inscription=$inscription;
		$this->email=$email;
		$this->img=$img;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getTel(){
		return $this->tel;
	}
	function getAge(){
		return $this->age;
	}
	function getInscription(){
		return $this->inscription;
	}
	function getEmail(){
		return $this->email;
	}
	function getImg(){
		return $this->img;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setTel($tel){
		$this->tel;
	}
	function setAge($age){
		$this->age;
	}
	function setInscription($inscription){
		$this->inscription;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setImg($img){
		$this->img=$img;
	}
}

?>