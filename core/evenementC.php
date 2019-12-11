<?PHP
include "../config.php";

class evenementC {
    function afficherEvenements()
	{
		$sql = "SELECT * From evenements";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }

    function afficherEvenement($evenement)
	{
		echo "id: " . $evenement->getId() . "<br>";
        echo "libelle: " . $evenement->getLibelle() . "<br>";
		echo "descrip: " . $evenement->getDescrip() . "<br>";
		echo "dateDeb: " . $evenement->getDateDeb() . "<br>";
        echo "dateFin: " . $evenement->getDateFin() . "<br>";
		echo "nbParticip: " . $evenement->getNbParticip() . "<br>";
		echo "lieux: " . $evenement->getLieux() . "<br>";
        echo "img: " . $evenement->getImg() . "<br>";
    }
	
	function supprimerEvenement($id)
	{
		$sql = "DELETE FROM evenements where id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function ajouterEvenement($evenement)
	{
		$sql = "INSERT INTO evenements (id,libelle,descrip,dateDeb,dateFin,nbParticip,lieux,img) values (:id,:libelle,:descrip,:dateDeb,:dateFin,:nbParticip,:lieux,:img)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$id = $evenement->getId();
			$libelle = $evenement->getLibelle();
			$descrip = $evenement->getDescrip();
			$dateDeb = $evenement->getDateDeb();
			$dateFin = $evenement->getDateFin();
			$nbParticip = $evenement->getNbParticip();
			$lieux = $evenement->getLieux();
			$img = $evenement->getImg();
	
			$req->bindValue(':id', $id);
			$req->bindValue(':libelle', $libelle);
			$req->bindValue(':descrip', $descrip);
			$req->bindValue(':dateDeb', $dateDeb);
			$req->bindValue(':dateFin', $dateFin);
			$req->bindValue(':nbParticip', $nbParticip);
			$req->bindValue(':lieux', $lieux);
			$req->bindValue(':img', $img);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function modifierEvenement($evenement, $id)
	{
		$sql = "UPDATE evenements SET id=:idd, libelle=:libelle, descrip=:descrip, dateDeb=:dateDeb, dateFin=:dateFin, nbParticip=:nbParticip, lieux=:lieux, img=:img WHERE id=:id";

		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$idd = $evenement->getId();
			$libelle = $evenement->getLibelle();
			$descrip = $evenement->getDescrip();
			$dateDeb = $evenement->getDateDeb();
			$dateFin = $evenement->getDateFin();
			$nbParticip = $evenement->getNbParticip();
			$lieux = $evenement->getLieux();
			$img = $evenement->getImg();
			
			$datas = array(':idd' => $idd, ':id' => $id, ':libelle' => $libelle, ':descrip' => $descrip, ':dateDeb' => $dateDeb, ':dateFin' => $dateFin,':nbParticip' => $nbParticip, ':lieux' =>$lieux, ':img' => $img);
			$req->bindValue(':idd', $idd);
			$req->bindValue(':id', $id);
			$req->bindValue(':libelle', $libelle);
			$req->bindValue(':descrip', $descrip);
            $req->bindValue(':dateDeb', $dateDeb);
			$req->bindValue(':dateFin', $dateFin);
			$req->bindValue(':nbParticip', $nbParticip);
			$req->bindValue(':lieux', $lieux);
			$req->bindValue(':img', $img);

			$s = $req->execute();

			
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function recupererEvenement($id)
	{
		$sql = "SELECT * from evenements where id=$id";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

}