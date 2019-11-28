<?PHP
include "visiteur.php";
include "visiteurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['age'])and isset($_POST['inscription'])and isset($_POST['mdp'])and isset($_POST['email']) and isset($_POST['role'])){
$visiteur1=new visiteurs($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'], $_POST['age'], $_POST['inscription'], $_POST['mdp'], $_POST['email'],$_POST['role']);

$visiteur1c=new visiteurc();
$visiteur1c->ajoutervisiteurr($visiteur1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
//*/
