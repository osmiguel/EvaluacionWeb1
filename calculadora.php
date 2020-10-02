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
            
                $numero1 = $_POST['num1'];
                $numero2 = $_POST['num2'];
                        
                if(empty($numero1)) {

                    echo("Debe diligenciar ambos campos");
                }   
                elseif(empty($numero2)) {

                    echo("Debe diligenciar ambos campos");
                }                                                                                                                                                  
            }
        } 

        function operaciones() {

            if(isset($_POST['calcular'])) {
            
                $numero1 = $_POST['num1'];
                $numero2 = $_POST['num2'];
                $opciones = $_POST['opciones'];

                if($numero1 === '' && $numero2 === '') {

                    echo("No ha ingresado ningun numero");
                
                } else {
                    switch($opciones) {
                        case "sum":
                            $total = $numero1 + $numero2;
                            echo($numero1. " + ". $numero2. " = ");                            
                            echo (round($total, 2));                             
                        break;

                        case "res":
                            $total = $numero1 - $numero2;                            
                            echo($numero1. " - ". $numero2. " = ");                            
                            echo (round($total, 2));                             
                        break;

                        case "mul":
                            $total = $numero1 * $numero2;                            
                            echo($numero1. " * ". $numero2. " = ");                            
                            echo (round($total, 2));                             
                        break;

                        case "div":
                            $total = $numero1 / $numero2;                            
                            echo($numero1. " / ". $numero2. " = ");                            
                            echo (round($total, 2));                           
                        break;
                }
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

    <section class="categorias mt-5">
      <h2 class="text-center">Calculadora</h2>
      <p class="text-center">Con este programa puedes realizar operaciones básicas. Suma, Resta, Multiplicación y División.</p>

        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="calculadora bg-dark">
                            <form action="calculadora.php" method="POST" class="p-5">

                                <div class="form-group">
                                    <label for="numero1" class="text-light">Numero 1:</label>
                                    <input type="text" class="form-control" id="numero1" placeholder="Digite el primer numero" name="num1">
                                    <p class="text-light text-center"><?php mensajeError(); ?></p>
                                </div>

                                <div class="form-group">
                                    <label for="seleccioneoperacion" class="text-light">Seleccione la operación:</label>
                                    <select class="form-control" id="seleccioneoperacion" name="opciones">
                                        <option value="sum">+</option>
                                        <option value="res">-</option>
                                        <option value="mul">*</option>
                                        <option value="div">/</option>
                                    </select>
                                </div> 

                                <div class="form-group">
                                    <label for="numero2" class="text-light">Numero 2:</label>
                                    <input type="text" class="form-control" id="numero2" placeholder="Digite el segundo numero" name="num2">
                                    <p class="text-light text-center"><?php mensajeError(); ?></p>
                                </div>
                                                
                                <button type="submit" class="btn btn-outline-secondary btn-block mt-3" name="calcular">
                                    Calcular
                                </button>                                               
                            </form>                                                 
                        </div><!--Calculadora--> 
                        <div class="resultado mt-2">
                            <div class="row justify-content-center">
                                <div class="col-md-8 bg-light mt-2">
                                    <h2 class="text-center text-light"><?php operaciones(); ?></h2>
                                </div>
                            </div>                            
                        </div                        
                    </div>              
            </div><!--Row-->
        </div><!--Container-->
    </section>

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