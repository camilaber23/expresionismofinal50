<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expresionismo</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/und/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />

    <link
      rel="icon"
      href="img/ojo logo blanco  (1).png"
    />

    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
    <div class="hoja">
      <header class="header1">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top menu1">
          <div class="container-fluid clase-index">
            <a class="navbar-brand" href="index.html"><img src="img/ojo logo blanco1.png" /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navg navbar-nav w-100 justify-content-center ul">
                <li class="nav-item textomenu">
                  <a class="nav-link  menu" href="index.html">Historia</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active menu dropdown-toggle" href="Temporadas.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ramas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Pintura.php">Pintura</a>
                    <a class="dropdown-item" href="cine.php">Cine</a>
                    <a class="dropdown-item" href="arquitectura.php">Arquitectura</a>
                  </div>
                </li>
                

                <li class="nav-item textomenu">
                  <a class="nav-link menu" href="obras.html">Obras</a>
                </li>
                <li class="nav-item dropdown textomenu">
                  <a class="nav-link menu" href="galeria2.html">Galeria</a>
                </li>
                <li class="nav-item textomenu">
                  <a class="nav-link menu" href="iniciosesion2.php"
                    >Contacto</a
                  >
                </li>

                
                
              </ul>
            </div>

            <form method="GET" action="resultado.php" class="form-inline">
              <input name="buscador" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success botonsearch my-2 my-sm-0" type="submit">Search</button>
            </form>

          </div>
        </nav>


        
      </header>



<?php
	include('conexion.php');

	$buscar = $_GET['buscador'];
	

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
     ?>

      <div class="container-fluid padding">
        <div class="row  padding cajonpintura">
          
         
          <div class="col-lg-12 text-center">
            <h2 class="titulopintura animate__animated animate__fadeInDown animate__delay-0.8s">Resultados:</h2>
          </div>

         
          <?php
		$nros=mysqli_num_rows($consulta);
		if ($nros==0){

        echo "<div class=\"col-12 unir\">
      <br>
        <h2>No se encuentran los resultados</h2>
        <br>
      </div>"; 
        }
	?>
	</p>
    

    <?php
    
    /*
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . " --> ";
			echo $resultados['bio'] . " --> ";
			echo "<a href='mailto:".$resultados['email']."'>".$resultados['email']."</a>";

            */
	?>



	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    
    <div class="col-md-6 col-sm-12  ">
          <div >

            <h3 class="card1 "><?php echo $resultados['nombre'] . " ". $resultados['apellido'] ; ?> </h3>
              
              <div class="card-body  ">
                  
                  <?php echo $resultados['bio']; ?>

                  <button class="menos"> Ver Menos</button>

                  <button class="mas"> Ver Más </button>

              </div>
          </div>
      </div>

      <div class="col-lg-6 ">
        
         <?php echo $resultados['foto']; ?>
        
      </div>

    

    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>


         

      



      


   
   
      


        
 </body>


 
 <footer>
  <div class="container_fluid footer padding">
    <div class="row text-center foot">
      
      <div class="col-12 unir">
        <hr class="light" />
        <h2>Unete</h2>
      </div>

      <div class="col-12 social padding">
        <a href="https://www.facebook.com/groups/25025149900"
          ><i class="fab fa-facebook"></i
        ></a>
        <a href="https://twitter.com/expresionismoS1"
          ><i class="fab fa-twitter"></i
        ></a>
        <a href="https://www.youtube.com/watch?v=70LiKeH-nkA"
          ><i class="fab fa-youtube"></i
        ></a>
        <a href="https://www.instagram.com/_expresionismo_/"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>

      <div class="col-12">
        
        <hr class="light" />
        <br>
        <h5> Copyright&copy; 2022- camila Bernal</h5>
        
      </div>
    </div>
  </div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js " integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ " crossorigin="anonymous "></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js " integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm " crossorigin="anonymous "></script>

<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</html>