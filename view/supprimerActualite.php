<?PHP
include "../core/actualiteC.php";
$actualiteC=new actualiteC();
if (isset($_POST["id"])){
	$actualiteC->supprimerActualite($_POST["id"]);
	header('Location: 	actualites.php');
}

?>