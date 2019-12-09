<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Notre Boutique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="stylefront.css">

    
    
  </head>
  <body>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  <div class="site-wrap">
    <nav class="navig">

        <div class="log">
            <script>
                jQuery(document).ready(function(){

                // Show password Button
                $("#showpassword").on('click', function(){
                  
                  var pass = $("#pwd");
                  var fieldtype = pass.attr('type');
                  if (fieldtype == 'password') {
                    pass.attr('type', 'text');
                    $(this).text("Masquer Mot de Passe");
                  }else{
                    pass.attr('type', 'password');
                    $(this).text("Afficher Mot de Passe");
                  }
                });
                });
            </script>
            <?php 
            session_start ();  
              if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
              { 
            
                echo 'Bienvenue '.$_SESSION['l'].'<br>';
                echo '<a href="./logout.php">Se déconnecter</a>';
              }
            else { ?>
              <form id="formconnex" name="formconnex" method="POST" action="connexion.php">
                  <div class="form-group">
                    Login :
                    <input type="text" name="login" id="login" placeholder="Nom" />
                    Password : 
                    <input type="password" name="pwd" id="pwd" placeholder="Password" />
                  </div>
                  <div class="form-check">
                    <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Afficher Mot de Passe</button> 
                    <input type="submit" class="btn btn-info" name="button" id="button" ></input>
                  </div>
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
                </tr>
            </table>
        </div>
      </nav>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Accueil</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Notre Boutique</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Toutes les categories</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Vetements</a>
                      <a class="dropdown-item" href="#">accessoires de tennis</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Nom, A à Z</a>
                      <a class="dropdown-item" href="#">Nom, Z à A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Prix ascendant</a>
                      <a class="dropdown-item" href="#">Prix descendant</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="boutique-single.php"><img src="images/rs.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="boutique-single.php">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="boutique-single.php"><img src="images/rs.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="boutique-single.php">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="boutique-single.php"><img src="images/rs.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="boutique-single.php">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="boutique-single.php"><img src="images/rs.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="boutique-single.php">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              

            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Vetements</span> <span class="text-black ml-auto">(5)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Accessoires Tennis</span> <span class="text-black ml-auto">(10)</span></a></li>
              </ul>
            </div>

                    </div>
        </div>
  </div>

  <section id="footer">
          <div class="container2" align="center">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <br><br>
                <h5>Liens rapides</h5>
                <ul class="list-unstyled quick-links">
                  <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                  <li><a href="MonClub.php"><i class="fa fa-angle-double-right"></i>Mon Club</a></li>
                  <li><a href="boutique.php"><i class="fa fa-angle-double-right"></i>Notre Boutique</a></li>
                </ul>
              </div>
              
              <div >
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

              <div class="container2">
              <h1 class="text-center">Nos Contacts</h1>
              <hr>
                <div class="row">
                  <div class="col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.992324923593!2d10.23685191528903!3d36.77075157995459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd35e03fcf73db%3A0x99b096774fb8bc33!2sTennis%20Club%20Megrine%20Coteaux%20TCM!5e0!3m2!1sfr!2stn!4v1575674968178!5m2!1sfr!2stn" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                  </div>

                  <div class="col-sm-4" id="contact2">
                      <h3>Adresses et Contacts</h3>
                      <hr align="left" width="50%">
                      <h4 class="pt-2">Site Web</h4>
                      <i class="fas fa-globe" style="color:#000"></i> www.TCMG.tn<br>
                      <h4 class="pt-2">Telephone</h4>
                      <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> +216 71 432 350 </a><br>
                      <h4 class="pt-2">Email</h4>
                      <i class="fa fa-envelope" style="color:#000"></i> <a href="">tcmg@gmail.com</a><br>
                    </div>
                </div>
              </div>
              <br><br>
              </div>
            </div>
            
              </hr>
            </div>	
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">&copy All right Reversed.</p>
              </div>
              </hr>
            </div>	
          </div>
        </section>
    
  </body>
</html>