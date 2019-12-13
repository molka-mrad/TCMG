<?PHP

include "../config.php" ;

class produitC
{
	function AjouterProd($prod)
	{
		$sql = "insert into produits (reference,nom,description,prix,type,photo) values(:reference,:nom,:description,:prix,:type,:photo)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;

			$req->BindValue(':reference',$prod->getId()) ;
			$req->BindValue(':nom',$prod->getNom()) ;
			$req->BindValue(':description',$prod->getDesc()) ;
            $req->BindValue(':prix',$prod->getPrix()) ;
            $req->BindValue(':type',$prod->getType()) ;
			$req->BindValue(':photo',$prod->getPhoto()) ;

			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherProds($prod)
	{
		echo "reference: ".$prod->getId()."<br>";
		echo "nom: ".$prod->getNom()."<br>";
		echo "description: ".$prod->getDesc()."<br>";
        echo "prix: ".$prod->getPrix()."<br>";
        echo "type: ".$prod->getType()."<br>";
		echo "photo: ".$prod->getPhoto()."<br>";

	}
	
	function AfficherProd()
	{
		$sql="SELECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierProd($prod,$idP)
{
		$sql="UPDATE produits SET reference=:referencee, nom=:nom,description=:description,prix=:prix,type=:type,photo=:photo WHERE reference=:reference";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

		$referencee=$prod->getId();
        $nom=$prod->getNom();
        $description=$prod->getDesc();
        $prix=$prod->getPrix();
        $type=$prod->getType();
        $photo=$prod->getPhoto();


		$datas = array(':referencee'=>$referencee, ':reference'=>$reference, ':nom'=>$nom,':description'=>$description,':prix'=>$prix,':type'=>$type,':photo'=>$photo);

		$req->bindValue(':referencee',$referencee);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':type',$type);
		$req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			  // header('Location: index.php');

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function supprimerProd($idP)
	{
		$sql="DELETE FROM produits where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function recupererProd($idP){
		$sql="SELECT * from produits where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProd($nomP){
		$sql="SELECT * from produits where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherDESC()
     {
    $sql="select * from produits ORDER BY reference DESC";
    $db = config::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from produits ORDER BY reference ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }

}
?>