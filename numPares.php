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

    <div class="categorias mt-5">
      <h2 class="text-center">Ejercicio de Arreglos</h2>
      <p class="text-center">Muestra en una tabla la cantidad de numeros pares definida por el usuario</p>

        <div class="container-fluid mt-2">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="pares">
                        <div class="bg-dark mb-4 ">
                            <form action="numPares.php" method="POST" class="p-4">

                                <div class="form-group">
                                    <label for="numero1" class="text-light">Digite la cantidad de números</label>
                                    <input type="text" class="form-control" id="numero1" placeholder="Numeros pares" name="cantidadPares">
                                    <p class="text-light text-center"></p>
                                </div>

                                <button type="submit" class="btn btn-success btn-block mt-3" name="mostrar">
                                    Ver Numeros
                                </button>                                               
                            </form> 
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-4">
                    <h3 class="text-center">Resultado</h3>
                    
                    <table class="table table-hover text-center mt-3">

                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Numeros Pares</th>                                
                            </tr>
                        </thead>
                                                                                                                                        
                        <?php if(isset($_POST['mostrar'])): ?>

                            <?php

                                $cantidadnumeros = $_POST['cantidadPares'];
                               
                            ?>
                        
                            <?php  for($numeros = 1; $numeros <= $cantidadnumeros; $numeros++): ?>

                                <?php
                               
                                $pares = array();                           
                                array_push($pares, $numeros*2);
                                
                                ?>

                                <tbody>
                                    <?php foreach($pares as $resultado): ?>

                                        <tr>
                                            <th><?php echo($resultado);?></th>
                                        </tr>
                                    
                                    <?php endforeach ?>

                                </tbody> 

                            <?php endfor?>
                        <?php endif ?>
                    </table>
                
                </div>        
            </div><!--Row-->
        </div><!--Container-->
    </div>

    <footer>
      <div class="bg-dark">
        <div class="container mt-5">
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