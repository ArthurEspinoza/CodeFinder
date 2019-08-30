<?php
$palabra= $_POST['palabra'];
session_start();//inicializamos palabra
$_SESSION['palabra'] = $palabra; //variable de sesion



//CONECTAR A BD
$conexion=mysqli_connect("localhost","root","","bdweb");
$consulta= "SELECT * FROM palabras WHERE palabra ='$palabra'"; 

$dato= mysqli_query($conexion,"SELECT id  from imagenes WHERE id= '$palabra' ") ; //id 


$mostrar=mysqli_fetch_array($dato);
	$_SESSION['idPalabra'] = $mostrar['id'];


$resultado=mysqli_query($conexion, $consulta);
$verifica=mysqli_num_rows($resultado);


if($verifica>0){
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search with me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <a class="navbar-brand" href="index.html">&nbsp &nbsp Search with me</a>
    

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Palabra buscada</span>
            <h2 class="mb-4"><?php echo $palabra?></h2>
            <p> </p>
          </div>
        </div>

         <?php 
              if ($palabra == "read"){ 
        ?>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/w1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>

                  <div class="text">
                    <p class="mb-5">Ejemplo  </p>
                    <p class="name">The Killers - Read My Mind</p>                   
                    

                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/<?php ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/w1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>

                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Learn to Read </p> 
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/xJSVrq-6-jc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/w1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Classical Music for Reading - Mozart</p>                    
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/mIYzp5rcTvU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/w1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Reading Harry Potter - Book 1</p> 
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/a0Dm7lp4-lI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/w1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Reading Music to Concentrate</p>
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/BklGhQYKl30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>

                </div>

              </div>

            </div>

              <?php  
              }
              ?> 

              <?php 
              if ($palabra == "jump"){ 
              ?>

                  <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/jump.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>

                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Van Halen - Jump</p>                   
                    

                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/SwYN7mTi6HM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/jump.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>

                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Madonna - Jump</p> 
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/Rx0mYN32Kps" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/jump.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Kris Kross - Jump</p>                    
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/010KyIQjkTk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>

              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/jump.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Learn the Word "JUMP" LEARN ENGLISH</p> 
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/lHxbTpTf2Ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/jump.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Ejemplo </p>
                    <p class="name">Men's High Jump Final | Rio 2016 Replay</p>
                    <iframe width="300" height="200" src="https://www.youtube-nocookie.com/embed/zW87tVnDKIU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>

                </div>

              </div>

            </div>



              <?php  
              }
              ?> 

              <?php 
              if ($palabra == "run"){ 
              ?>



              <?php  
              }
              ?> 

              <?php 
              if ($palabra == "'write'"){ 
              ?>



              <?php  
              }
              ?>     




          </div>         

        </div>        

      </div>

      <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <p  align="justify-content-center"><a  href="audio.php" class="btn btn-primary mt-3 py-3 px-5">&nbsp &nbsp Consultar más información </a>
            </p>
          </div>
      </div>


    </section>  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php

} 

else {
    echo"Error en la palabra";
}

mysqli_free_result($resultado);

mysqli_close($conexion);
?>