<?php
include "../core/evenementC.php";
include "../entities/evenement.php";


if (isset($_GET['reserver'])) {
    
    
    $evenementC= new evenementC;
    $result=$evenementC->recupererEvenement( $_POST['id']);
    foreach ($result as $row) {
        $id = $row['id'];
        $libelle = $row['libelle'];
        $descrip = $row['descrip'];
        $dateDeb = $row['dateDeb'];
        $dateFin = $row['dateFin'];
        $nbParticip = $row['nbParticip'];
        $lieux = $row['lieux'];
        $img = $row['img'];
    }
    $evenement=new evenements($id,$libelle,$descrip,$dateDeb,$dateFin,$nbParticip,$lieux,$img);
    $evenementC->modifierEvenement($evenement,'8');
    var_dump($_POST['id']);
    
    echo '<body onLoad="alert(\'Votre place a ete reservee\')">'; 
}
?>