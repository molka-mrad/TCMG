<?php
include "../config.php";

class visiteurc
{
 function ajoutervisiteurr($visiteur)
	{
		$sql = "insert into visiteurs (cin,nom,prenom,tel,age,inscription,mdp,email,role) values (:cin, :nom,:prenom,:tel,:age,:inscription,:mdp,:email,:role) ;insert into users(user_id,user_name,user_email,user_pass,joining_date,role) VALUES(:cin,:nom,:email,:mdp,:inscription,:role)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$cin = $visiteur->getCin();
			$nom = $visiteur->getNom();
			$prenom = $visiteur->getPrenom();
			$tel = $visiteur->gettel();
			$age = $visiteur->getage();
			$inscription = $visiteur->getinscription();
			$mdp = $visiteur->getmdp();
			$email = $visiteur->getmail();
			$role=$visiteur->getrole();
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':tel', $tel);
			$req->bindValue(':age', $age);
			$req->bindValue(':inscription', $inscription);
			$req->bindValue(':mdp', $mdp);
			$req->bindValue(':email', $email);
			$req->bindValue(':role',$role);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    }
}
    ?>
