<?PHP
include "../entities/formateur.php";
include "../core/formateurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['age'])and isset($_POST['inscription'])and isset($_POST['email']) and isset($_POST['img'])){
$formateur1=new formateurs($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'], $_POST['age'], $_POST['inscription'], $_POST['email'], $_POST['img']);

$formateur1C=new formateurC();
$formateur1C->ajouterFormateur($formateur1);
header('Location: formateurs.php');
	
}else{
	echo "vérifier les champs";
}
//*/
