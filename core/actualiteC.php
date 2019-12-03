<?PHP
include "../config.php";

class actualiteC {
    function afficherActualites()
	{
		$sql = "SELECT * From actualites";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }

    function afficherActualite($actualite)
	{
		echo "id: " . $actualite->getId() . "<br>";
		echo "titre: " . $actualite->getTitre() . "<br>";
		echo "contenu: " . $actualite->getContenu() . "<br>";
		echo "img: " . $actualite->getImage() . "<br>";
    }
	
	function supprimerActualite($id)
	{
		$sql = "DELETE FROM actualites where id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function ajouterActualite($actualite)
	{
		$sql = "INSERT INTO actualites (id,titre,contenu,img) values (:id,:titre,:contenu,:img)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$id = $actualite->getId();
			$titre = $actualite->getTitre();
			$contenu = $actualite->getContenu();
			$img = $actualite->getImage();
	
			$req->bindValue(':id', $id);
			$req->bindValue(':titre', $titre);
			$req->bindValue(':contenu', $contenu);
			$req->bindValue(':img', $img);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function modifierActualite($actualite, $id)
	{
		$sql = "UPDATE actualites SET id=:idd, titre=:titre,contenu=:contenu,img=:img WHERE id=:id";

		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$idd = $actualite->getId();
			$titre = $actualite->getTitre();
			$contenu = $actualite->getContenu();
			$img = $actualite->getImage();
			
			$datas = array(':idd' => $idd, ':id' => $id, ':titre' => $titre, ':contenu' => $contenu, ':img' => $img);
			$req->bindValue(':idd', $idd);
			$req->bindValue(':id', $id);
			$req->bindValue(':titre', $titre);
            $req->bindValue(':contenu', $contenu);
			$req->bindValue(':img', $img);

			$s = $req->execute();

			
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function recupererActualite($id)
	{
		$sql = "SELECT * from actualites where id=$id";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

}