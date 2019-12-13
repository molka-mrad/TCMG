<?php
class prod
{
	private $reference ;
	private $nom ;
	private $description ;
    private $prix ;
    private $type ;
	private $photo ;


	public function getId()
	{
		return $this->reference ;
	}
	public function getNom()
	{
		return  $this->nom ;
	}
	public function getDesc()
	{
		return  $this->description ;
	}
	public function getPrix()
	{
		return $this->prix ;
    }
    public function getType()
	{
		return $this->type ;
	}public function getPhoto()
	{
		return $this->photo ;
	}
	
	public function __construct($reference,$nom,$description,$prix,$type,$photo)
	{
		$this->reference=$reference ;
		$this->nom=$nom ;
		$this->description=$description ;
        $this->prix=$prix ;
        $this->type=$type ;
		$this->photo=$photo ;

	}
}
?>