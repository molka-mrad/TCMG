<?php
include "../core/evenementC.php";
include "../entities/evenement.php";
var_dump($_POST['reserver']);
if (isset($_POST['reserver'])) {
    
    
    $evenementC= new evenementC;
    $result=$evenementC->recupererEvenement( $_POST['id']);
    foreach ($result as $row) {
        $id = $row['id'];
        $libelle = $row['libelle'];
        $descrip = $row['descrip'];
        $dateDeb = $row['dateDeb'];
        $dateFin = $row['dateFin'];
        $nbParticip = ($row['nbParticip']+'1');
        $lieux = $row['lieux'];
        $img = $row['img'];
    }
    $evenement=new evenements($id,$libelle,$descrip,$dateDeb,$dateFin,$nbParticip,$lieux,$img);
    $evenementC->modifierEvenement($evenement,$_POST['id']);
    
    echo '<body onLoad="alert(\'Votre place a ete reservee\')">'; 
    header('Location: index.php');
}
?>