<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericicio PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">EXAMEN PHP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio1.php">Ejercicio 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <h1 class="text-center">Gimnasio Bodytech</h1>
    <p class="text-center">Ingresa tu peso y estatura para cualcular el índice de masa corporal.
        </p>
        <form class="mt-3" action="ejercicio2.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="peso">Peso</label>
                <div class="col-2">
                    <input type="number" class="form-control"  placeholder="Peso" name= peso>
                </div>
                <label for="Altura" class="">Altura</label>
                <div class="col-2">
                    <input value="" type="number" step="any" class="form-control"  placeholder="Altura" name="altura">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-1">
                <button type="submit" class="btn btn-primary mt-4 btn-block" name="botonCalcular">Calcular</button>
                </div>
            </div>
        </form>

        <?php if(isset($_POST["botonCalcular"])): ?>
        
        <?php 
           $peso=$_POST["peso"];   
           $altura=$_POST["altura"];
           $imc= round($peso/($altura * $altura),1);

           if ($imc<18.5) { 
               $escala="Peso insuficiente";
           } 
           else if (($imc>=18.5)&&($imc<=24.9)){ 
               $escala="Normopeso";
           }
           else if (($imc>=25)&&($imc<=26.9)){ 
               $escala="Sobrepeso grado I";
           }
           else if (($imc>=27)&&($imc<=29.9)){
               $escala="Sobrepreso grado II (preobesidad)";
           }
           else if (($imc>=30)&&($imc<=34.9)){ 
               $escala="Obesidad de tipo I";
           }
           else if (($imc>=35)&&($imc<=39.9)){
               $escala="Obesidad de tipo II";
           }
           else if (($imc>=40)&&($imc<=49.9) ){ 
               $escala="Obesidad de tipo III (mórbida)";
           }
           else{ 
               $escala="Obesidad de tipo IV (extrema)";
           }
       ?>
       <br>
       <h4 class="text-center">
           <?php 
            echo ("Tu IMC es: ".$imc);
            echo ("<br>");
            echo ("Escala: ".$escala); 
           ?>
       </h4>
       <?php endif ?>

       

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>