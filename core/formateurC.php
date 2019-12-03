<?PHP
include "../config.php";

class formateurC
{
	function afficherFormateurs()
	{
		$sql = "SELECT * From formateurs";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherFormateur($formateur)
	{
		echo "Cin: " . $formateur->getCin() . "<br>";
		echo "Nom: " . $formateur->getNom() . "<br>";
		echo "Prénom: " . $formateur->getPrenom() . "<br>";
		echo "tel: " . $formateur->getTel() . "<br>";
		echo "age: " . $formateur->getAge() . "<br>";
		echo "inscription: " . $formateur->getInscription() . "<br>";
		echo "email: " . $formateur->getEmail() . "<br>";
		echo "img: " . $formateur->getImg() . "<br>";
		
	}
	
	function supprimerFormateur($cin)
	{
		$sql = "DELETE FROM formateurs where cin= :cin";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin', $cin);
		try {
			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

   
	function ajouterFormateur($formateur)
	{
		$sql = "insert into formateurs (cin,nom,prenom,tel,age,inscription,email,img) values (:cin,:nom,:prenom,:tel,:age,:inscription,:email,:img)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$cin = $formateur->getCin();
			$nom = $formateur->getNom();
			$prenom = $formateur->getPrenom();
			$tel = $formateur->getTel();
			$age = $formateur->getAge();
			$inscription = $formateur->getInscription();
            $email = $formateur->getEmail();
            $img = $formateur->getImg();
            
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':tel', $tel);
			$req->bindValue(':age', $age);
			$req->bindValue(':inscription', $inscription);
			$req->bindValue(':email', $email);
			$req->bindValue(':img', $img);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function modifierFormateur($formateur, $cin)
	{
		$sql = "UPDATE formateurs SET cin=:cinn, nom=:nom,prenom=:prenom,tel=:tel,age=:age,inscription=:inscription,email=:email,img=:img WHERE cin=:cin";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			$cinn = $formateur->getCin();
			$nom = $formateur->getNom();
			$prenom = $formateur->getPrenom();
			$tel = $formateur->getTel();
			$age = $formateur->getAge();
			$inscription = $formateur->getInscription();
			$email = $formateur->getEmail();
			$img = $formateur->getImg();
			$datas = array(':cinn' => $cinn, ':cin' => $cin, ':nom' => $nom, ':prenom' => $prenom,  ':tel' => $tel, ':age' => $age, ':inscription' => $inscription, ':email' => $email, ':img' => $img);
			$req->bindValue(':cinn', $cinn);
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':tel', $tel);
			$req->bindValue(':age', $age);
			$req->bindValue(':inscription', $inscription);
			$req->bindValue(':email', $email);
			$req->bindValue(':img', $img);


			$s = $req->execute();

			
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function recupererFormateur($cin)
	{
		$sql = "SELECT * from formateurs where cin=$cin";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	}
