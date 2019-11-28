<?PHP
class visiteurs
{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $age;
	private $inscription;
	private $mdp;
	private $email;
	private $role;
	
	
	function __construct($cin,$nom,$prenom,$tel,$age,$inscription,$mdp,$email,$role){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->age=$age;
		$this->inscription=$inscription;
		$this->mdp=$mdp;
		$this->email=$email;
		$this->role=$role;
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
	function gettel(){
		return $this->tel;
	}
	function getage(){
		return $this->age;
	}
	function getinscription(){
		return $this->inscription;
	}
	function getmdp(){
		return $this->mdp;
	}
	function getmail(){
		return $this->email;
	}
	function getrole(){
		return $this->role;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function settel($tel){
		$this->tel;
	}
	function setage($age){
		$this->age;
	}
	
	function setinscription($inscription){
		$this->inscription;
	}
	function setmdp($mdp){
		$this->mdp;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setrole($role){
		$this->role=$role;
	}
}

?>