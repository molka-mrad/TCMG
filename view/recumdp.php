<!DOCTYPE html>
<html lang="fr">
  <head>
        <title>Tennis Club de Mégrine TCMG</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylefront.css">
        <script src="css/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="parallax.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        
        <script language="javascript" type="text/javascript" src="java.js"></script>
        
  </head>
  <body>
        <nav class="navig">
                <div class="log">
                    <?php 
                    session_start ();  
                     if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                     { 
                    
                        echo '<body onLoad="alert(\'Vous êtes déja inscrit. Veuillez vous deconnecter.\')">'; 
                        echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
                     }
                    else { ?>
                      <form id="formconnex" name="formconnex" method="POST" action="connexion.php">
                          Login :
                          <input type="text" name="login" id="login" />
                          Password : 
                          <input type="password" name="pwd" id="pwd" />
                          <input type="submit" name="button" id="button" value="Valider" />
                      </form>
                    <?php
                    }  
                    ?>
                  
                </div>
                <div class="entete">
                    <a class="navbar-title" href="index.html">Tennis Club de Mégrine</a></br>
                    <img class="logo" src="images/logo.png" width="80"></br>
                </div>
                <div class="menu">
                    <table class="menu-tab" border="0" width="80%" align="center">
                        <tr>
                            <td class="nav-item"><a href="index.php" class="nav-link">Accueil</a></td>
                            <td class="nav-item"><a href="MonClub.php" class="nav-link">Notre Club</a></td>
                            <td class="nav-item"><a href="Inscription.php" class="nav-link">Inscription</a></td>
                            <td class="nav-item"><a href="boutique.php" class="nav-link">Notre Boutique</a></td>
                            <td class="nav-item"><a href="espacepriv.php" class="nav-link">Mon Espace</a></td>
                            <td class="nav-item"><a href="Contact.php" class="nav-link">Contact</a></td>
                        </tr>
                    </table>
                </div>
        </nav>

        <div class="contenu" align="center">
        <br>
        <h2 style="color: #3d435c" > Recuperation du mot de passe</h2>
        <br>
        <form   method="POST" >
          <h5 style="color: #3d435c" >email:</h5>
                          <input type="email"  placeholder="votre adresse mail" name="recup_mail" class="btn btn-info" />
                          <input type="submit" name="recup_submit" class="btn btn-info" value="Valider" />
         </form>
         <?php if(isset($error)){
             echo '<span style="color:red">'.$error.'</span>';
         }else
         {
             echo"</br>";
         }
         ?>

        </div>
        
    </body>
</html>
