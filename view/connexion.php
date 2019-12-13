<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';

$c=new config();
$conn=$c->getConnexion();
$user=new User($_POST['login'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);

$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
		$str2="abonne";
		$str="admin";
		$str3="visiteur";
		
	if ($t['user_name']==$_POST['login'] && $t['user_pass']==$_POST['pwd']&& strcmp($t['role'], $str2)==0){
		
		session_start();
		$_SESSION['cin']=$_POST['cin'];
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
		header("location:espacepriv.php");
		
		}
		if ($t['user_name']==$_POST['login'] && $t['user_pass']==$_POST['pwd']&& strcmp($t['role'], $str)==0){
			session_start();
		$_SESSION['cin']=$_POST['cin'];
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
			header("Location: membres.php");
			
			}
			if ($t['user_name']==$_POST['login'] && $t['user_pass']==$_POST['pwd']&& strcmp($t['role'], $str3)==0){
				session_start();
			$_SESSION['cin']=$_POST['cin'];
			$_SESSION['l']=$_POST['login'];
			$_SESSION['p']=$_POST['pwd'];
			$_SESSION['r']=$t['role'];
				header("Location: boutique.php");
				
				}
		
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="index.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>