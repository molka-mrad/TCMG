<!DOCTYPE html>
<html lang="fr">
  <head>
        <title>Tennis Club de Mégrine TCMG</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
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
            
            <h2 id="annee"></h2>
            <SCRIPT LANGUAGE="JavaScript"> 	
                
                    var dt=new Date;
                    var annee=dt.getFullYear();
                    var mois=dt.getMonth();
                    if(mois<6)
                    document.getElementById('annee').innerHTML = "Inscription "+(annee-1)+"/"+ (annee) ;
                    else
                    document.getElementById('annee').innerHTML = "Inscription "+(annee)+"/"+ (annee+1) ;
               
            </SCRIPT> 

            Les frais d'inscriptions à l'école de tennis sont de 350DT/saison</br></br>
            
            <form class="inscri" method="POST" action="ajoutervisi.php">
                <table border="0">
                <tr>
                        <td>CIN</td>
                        <td>
                            <input type="number" name="cin" id="cin" >
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" name="nom" id='nom' required></td>
                    </tr>
                    <tr>
                        <td>Prenom</td>
                        <td><input type="text" name="prenom" required></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Téléphone</td>
                        <td><input type="number" name="tel" id="tel"></td>
                        
                    </tr>
                        <td>Âge</td>
                        <td><input type="number" name="age" id="age" required></td>
                    </tr>
                    <tr>
                    <?php
                    $date = new DateTime();
                    ?>
                        <td>incription</td>
                        <td>
                            <input type="text" name="inscription" id ="firstdate" value=" <?php echo  date("Y/m/d")   ?>" readonly >
                            
                        </td>

                    </tr>
                    <tr>
                        <td>mdp</td>
                        <td>
                            <input type="password" name="mdp" id="secdate" >
                            
                        </td>
                        
                    </tr>
                   
                    <tr>
                        <td>E-mail</td>
                        <td><input type="email" name="email" id="email" required></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="ajouter" onclick="return controle()" value="s'inscrire"></td>
                        
                    </tr>
                </table>
                <input hidden type="text" name="role" value="visiteur">
            </form>
            
        </div>
    </body>
</html>
