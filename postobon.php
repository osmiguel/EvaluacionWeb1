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
                $horasTrabajadas = $_POST['horasTrabajo'];
                        
                if(empty($nombre)) {

                    echo("Campo obligatorio");
                }   
                elseif(empty($horasTrabajadas)) {

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

    <div>
        <div class="row justify-content-center">
            <div class="col-md-3 mt-3">
                <img src="img/logopostobon.png" class="img-fluid">
                <p class="text-center text-dark">Calcule su nomina del mes.</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                    <div class="calculadora bg-danger">
                        <form action="postobon.php" method="POST" class="p-5">

                            <div class="form-group">
                                <label for="nombre" class="text-light">Ingrese su nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                                <p class="text-light text-center"><?php mensajeError(); ?></p>
                            </div>

                            <div class="form-group">
                                <label for="peso" class="text-light">Horas Trabajadas</label>
                                <input type="text" class="form-control" id="horasTrabajo" placeholder="Horas Trabajadas" name="horasTrabajo">
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
                                         function calcularSalario() {

                                            $nombre = $_POST['nombre'];
                                            $horasTrabajadas = $_POST['horasTrabajo'];
                                            

                                            if($horasTrabajadas <= 40) {
                                                $SueldoTotal = $horasTrabajadas * 20000;

                                                echo("Nombre: " . $nombre). "<br>";
                                                echo("Total ". $horasTrabajadas . " horas: " . $SueldoTotal). "<br>";
                                                echo("Horas extras 0: "). "<br>";
                                                echo("Salario Total: " . $SueldoTotal). "<br>";
                                            } else {
                                                $horasExtras = ($horasTrabajadas - 40);
                                                $totalExtras = $horasExtras * 25000;
                                                $horasNormal = ($horasTrabajadas - $horasExtras) * 20000;
                                                $SueldoTotal = $horasNormal + $totalExtras;

                                                echo("Nombre: " . $nombre). "<br>";
                                                echo("Total 40 horas: " . $horasNormal). "<br>";
                                                echo("Total " . $horasExtras . " Extras: " . $totalExtras). "<br>";
                                                echo("Salario Total: " . $SueldoTotal). "<br>";
                                            }
                                                                                                                                   
                                        }
                                    ?>
                                    
                                    <h4 class="text-center text-dark"><?php calcularSalario(); ?></h4>
                                
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