<?PHP
include "../core/formateurC.php";
$formateurC=new formateurC();
if (isset($_POST["cin"])){
	$formateurC->supprimerFormateur($_POST["cin"]);
	header('Location: 	formateurs.php');
}

?>