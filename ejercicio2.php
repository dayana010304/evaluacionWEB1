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

        <?php
            if(isset($_POST["botonCalcular"]))
            {
             $peso=$_POST["peso"];   
             $altura=$_POST["altura"];
             $IMC=($peso/($altura * $altura));

                echo("<br>");
                echo ("Tu IMC es: ".$IMC);

                if ($IMC<18.5) { $ESCALA="DELGADES SEVERA";} 
                if (($IMC>=16)&&($IMC<17) ){ $ESCALA="DELGADEZ MODERADA";}
                if (($IMC>=17)&&($IMC<18.5) ){ $ESCALA="DELGADEZ ACEPTABLE";}
                if (($IMC>=18.5)&&($IMC<25) ){ $ESCALA="NORMAL";}
                if (($IMC>=25)&&($IMC<30) ){ $ESCALA="PRE-OBESO";}
                if (($IMC>=30)&&($IMC<35) ){ $ESCALA="OBESO TIPO 1";}
                if (($IMC>=35)&&($IMC<40) ){ $ESCALA="OBESO TIPO 2";}
                if ($IMC>=40){ $ESCALA="OBESO TIPO 3";}

                echo ("<br>");
                echo "Escala: </b>$escala";  
            }
        ?>

       

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>