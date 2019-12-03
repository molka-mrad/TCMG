<?PHP
include "../entities/evenement.php";
include "../core/evenementC.php";


if ( isset($_POST['id']) and isset ($_POST['libelle']) and isset($_POST['descrip']) and isset($_POST['dateDeb']) and isset($_POST['dateFin']) and isset($_POST['nbParticip']) and isset($_POST['lieux']) and isset($_POST['img'])){
$evenement1=new evenements($_POST['id'],$_POST['libelle'],$_POST['descrip'],$_POST['dateDeb'],$_POST['dateFin'],$_POST['nbParticip'],$_POST['lieux'],$_POST['img']);
$evenement1C=new evenementC();
$evenement1C->ajouterEvenement($evenement1);
header('Location: evenements.php');
	
}else{
	echo "vérifier les champs";
}

