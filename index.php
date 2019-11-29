<!DOCTYPE html>
<html lang="fr">
  <head>
        <title>Tennis Club de Mégrine TCMG</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylefront.css">
        <script src="css/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
  </head>
  <body>
        <nav class="navig">
                <div class="log">
                    <?php 
                    session_start ();  
                     if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                     { 
                    
                        echo 'Bienvenue '.$_SESSION['l'];
                        echo '<a href="./logout.php">Se déconnecter</a>';
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


        
        <section class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 text ftco-animate text-center">
                    <h1 class="mb-4">Tennis Club de Mégrine</h1>
                    <h3 class="subheading">citation</h3>
                    <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
                </div>
                </div>
                </div>
            </div>
        
            <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 text ftco-animate text-center">
                    <h1 class="mb-4">Tennis Club de Mégrine</h1>
                    <h3 class="subheading">citation</h3>
                    <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
                </div>
                </div>
                </div>
            </div>
        </section>
          

        <section class="azer">
            <div class="welcome" style="background-image:url(images/bg_1.jpg);">
                <div class="container">
                    <h1 class="titre">Bienvenue à Tennis Club de Mégrine</h1>

                </div>
            </div> 
        </section>
    </br>
        
        <?php include "../config.php" ?>

        <section class="aze">
            <div class="bloc-accueil">

                    <h1 class="titre">Actualités</h1>
                    <?PHP
                      $sql = "SELECT * From actualites";
                      $db = config::getConnexion();
                        $listeActu = $db->query($sql);
                    ?>

                    <table class="table-actu" border='0' width="120%">

                        <?php
                          foreach ($listeActu as $row) {
                        ?>

                        <tr>
                          <td>
                            <h3><?PHP echo $row['titre']; ?></h3></br>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?PHP echo $row['contenu']; ?></br>
                          </td>
                          <td>
                            <?PHP $img=$row['img']; ?>
                            <img class="img-actu" src=<?PHP echo $row['img']; ?> alt=""></br>
                          </td>
                        </tr>

                        <?PHP
                        }
                        ?>
                    </table>  
            </div>
        </section>
        <section class="aze">
            <div class="bloc-accueil">
                    <h1 class="titre">Evenements</h1>

                    <?PHP
                      $sql = "SELECT * From evenements";
                        $listeEvent = $db->query($sql);
                      
                    ?>
                    
                    <table class="table-actu" border='0' width="120%">

                        <?php
                          foreach ($listeEvent as $row) {
                        ?>

                        <tr>
                          <td>
                            <h3><?PHP echo $row['libelle']; ?></h3></br>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Date début: <?PHP echo $row['dateDeb']; ?></br>
                            Date fin: <?PHP echo $row['dateFin']; ?></br>
                            Lieux: <?PHP echo $row['lieux']; ?></br>
                            <?PHP echo $row['descrip']; ?></br>
                          </td>
                          <td>
                            <?PHP $img=$row['img']; ?>
                            <img class="img-actu" src=<?PHP echo $row['img']; ?> alt=""></br>
                          </td>
                        </tr>

                        
                        <tr>
                          <td colspan="2">
                            <?php
                              if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                              { 
                                ?>
                                  <form method="POST" action="reservation.php">
                                        <input type="submit" name="reserver" value="reserver une place">
                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                    </form>
                              <?php
                              }
                              else{
                                echo 'Connectez vous pour reserver une place';
                              }
                            ?>
                          </td>
                        </tr>

                        <?PHP
                        }
                        ?>
                    </table>  
            </div>
        </section>

        <section class="aze">
        <div class="container">

                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallerie</h1>
              
                <hr class="mt-2 mb-5">
              
                <div class="row text-center text-lg-left">
              
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/1.jpg" alt="">
                            </a>
                      </div>
                </div>
              
              </div>
              </section>
        
        
  </body>
  </html>