<?PHP
include "../entities/actualite.php";
include "../core/actualiteC.php";


if ( isset($_POST['id']) and isset ($_POST['titre']) and isset($_POST['contenu']) and isset($_POST['img'])){
$actualite1=new actualites($_POST['id'],$_POST['titre'],$_POST['contenu'],$_POST['img']);
$actualite1C=new actualiteC();
$actualite1C->ajouterActualite($actualite1);
header('Location: actualites.php');
	
}else{
	echo "vérifier les champs";
}

