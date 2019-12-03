<?PHP
include "../core/evenementC.php";
$evenementC=new evenementC();
if (isset($_POST["id"])){
	$evenementC->supprimerEvenement($_POST["id"]);
	header('Location: 	evenements.php');
}

?>