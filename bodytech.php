<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Nro 1 PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
      
    <?php

        function mensajeError() {

            if(isset($_POST['calcular'])) {
            
                $nombre = $_POST['nombre'];
                $peso = $_POST['peso'];
                $estatura = $_POST['estatura'];
                        
                if(empty($peso)) {

                    echo("Campo obligatorio");
                }   
                elseif(empty($estatura)) {

                    echo("campo obligatorio");
                }                                                                                                                                                   
            }
        } 
       
    ?>

    <header class="header pt-4">
        <div class="container">
            <div class="row justify-content-between">
            <div class="col-md-4">
                <img src="img/logocesde.png">
            </div>
            <div class="col-md-5">
                <nav class="nav d-flex justify-content-end flex-column flex-md-row">
                <a href="#" class="nav-link">By Miguel Osorio</a>
                <a href="index.php" class="nav-link btn btn-outline-light text-light">Página Inicio</a>               
                </nav>
            </div>
            </div>
        </div><!--Container-->
        <div class="container">
            <div class="row justify-content-center buscador align-items-center">
            <div class="col-md-8 text-light text-center mt-5">
                <h1 class="display-4 titulo">Ejercicios De PHP</h1>
                <p>Ejercicios de algoritmos básicos de PHP</p>              
            </div>
            </div>
        </div><!--Container-->
    </header>

    <div class="fondo-body">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="img/bodytechlogo.png" class="img-fluid">
                <p class="text-center text-light">Calcule su indice de masa corporal e identifique su estado de peso actual.</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                    <div class="calculadora bg-light">
                        <form action="bodytech.php" method="POST" class="p-5">

                            <div class="form-group">
                                <label for="nombre">Ingrese su nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                                <p class="text-light text-center"><?php mensajeError(); ?></p>
                            </div>

                            <div class="form-group">
                                <label for="peso">Ingrese su peso(Kg)</label>
                                <input type="text" class="form-control" id="peso" placeholder="Peso" name="peso">
                                <p class="text-light text-center"><?php mensajeError(); ?></p>
                            </div>

                            <div class="form-group">
                                <label for="estatura">Ingrese su estatura(Metros)</label>
                                <input type="text" class="form-control" id="estatura" placeholder="Estatura" name="estatura">
                                <p class="text-light text-center"><?php mensajeError(); ?></p>
                            </div>
                                            
                            <button type="submit" class="btn btn-outline-secondary btn-block mt-3" name="calcular">
                                Calcular
                            </button> 

                                                                                               
                        </form>                                                 
                    </div><!--Calculadora-->  
                        <div class="resultado mt-2">
                            <div class="row justify-content-center">
                                <div class="col-md-8 mt-2">

                                <?php 
                                if(isset($_POST['calcular'])): ?>

                                    <?php
                                         function categoriasIMC() {

                                            $nombre = $_POST['nombre'];
                                            $peso = $_POST['peso'];
                                            $estatura = $_POST['estatura'];

                                            
                                            $IMC = $peso / ($estatura * $estatura);

                                            if($IMC < 18.5 ) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Peso es insuficiente");
                                            }
                                            else if($IMC >= 18.5 && $IMC < 25) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Su Peso es Normal");
                                            }
                                            else if($IMC > 25 && $IMC < 27) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Sobrepeso grado I");
                                            }
                                            else if($IMC > 27 && $IMC < 30) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Sobrepeso grado II");
                                            }
                                            else if($IMC > 27 && $IMC < 30) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Sobrepeso grado II");
                                            }
                                            else if($IMC > 30 && $IMC < 34) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Obesidad Tipo 1");
                                            }
                                            else if($IMC > 35 && $IMC < 40) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Obesidad Tipo 2");
                                            }
                                            else if($IMC > 40 && $IMC < 50) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Obesidad Tipo 3");
                                            }
                                            else if($IMC > 40 && $IMC < 50) {
                                                echo($nombre). "<br>";
                                                echo("Su IMC es: " . round($IMC, 2)). "<br>";
                                                echo("Se encuentra en Obesidad Extrema");
                                            }
                                        }
                                    ?>
                                    
                                    <h4 class="text-center text-dark"><?php categoriasIMC(); ?></h4>
                                
                                <?php endif?>

                                   
                                </div>
                            </div>
                        </div>
                    </div
                </div><!--Col-md-4-->
            </div>
        </div>
    </div>

    <footer>
      <div class="bg-dark">
        <div class="container">
          <div class="row justify-content-center py-2">
            <div class="col-md-5 text-center">
              <p class="text-light">Ejercicios de desarrollo en PHP - Miguel Osorio Alvarez</p>
              <p class="text-light">CESDE - 2020</p>
            </div>
          </div>
        </div>
      </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

</body>
</html>