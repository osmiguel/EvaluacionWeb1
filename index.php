<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion Web 1</title>

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
                </nav>
            </div>
            </div>
        </div><!--Container-->
        <div class="container">
            <div class="row justify-content-center buscador align-items-center">
            <div class="col-md-8 text-light text-center mt-5">
                <h1 class="display-4 titulo">Ejercicios De PHP</h1>
                <p>Ejercicios de algoritmos básicos de PHP.</p>              
            </div>
            </div>
        </div><!--Container-->
    </header>

    <section class="categorias mt-5">
      <h2 class="text-center">Explora los Ejercicios</h2>
      <p class="text-center">Toma ideas para tus proximos proyectos.</p>
      <div class="container-fluid mt-5">
        <div class="row">

          <div class="col-6 text-center categoria">
            <a href="calculadora.php" class="mt-2">
                <img src="img/calculadora.png" class="img-fluid">
            </a>
            <h3>Calculadora</h3>
            <p>Realiza operaciones básicas.</p>           
          </div><!--Categorias-->

          <div class="col-6 text-center categoria">
          <a href="bodytech.php" class="mt-2">
                <img src="img/pesista.png" class="img-fluid">
            </a>
            <h3>BodyTech</h3>
            <p>Calcular el indice de masa corporal de los usuarios.</p>
          </div><!--Categorias-->

          <div class="col-6 text-center categoria">
            <a href="postobon.php" class="mt-2">
              <img src="img/botella.png" class="img-fluid">
            </a>
            <h3>Postobon</h3>
            <p>Programa de calculo de nomina.</p>
          </div><!--Categorias-->

          <div class="col-6 text-center categoria">
            <a href="numPares.php" class="mt-2">
                <img src="img/numberPar.png" class="img-fluid">
            </a>
            <h3>Numeros Pares</h3>
            <p>Arreglo de cantidad de numeros pares, definida por el usuario.</p>
          </div><!--Categorias-->
          
        </div><!--Row-->
      </div><!--Container-->
    </section>

    <footer>
      <div class="bg-dark">
        <div class="container">
          <div class="row justify-content-center py-2">
            <div class="col-md-5 text-center">
              <p class="text-light">Ejercicios de desarrollo en PHP - Miguel Osorio Alvarez</p>
              <p class="text-light">Viernes 18:00 horas</p>
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