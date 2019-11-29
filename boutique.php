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
                    <a class="navbar-title" href="index.php">Tennis Club de Mégrine</a></br>
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


    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Rue Mohamed Ali El Hammi, Mégrine cauteaux, Mégrine, 2033 </li>
                <li class="phone"><a href="tel://0021671432350">+216 71 432 350</a></li>
                <li class="email">TCMG@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
      
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>