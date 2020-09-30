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
        <a class="navbar-brand" href="index.php">EXAMEN PHP</a>
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
        <h1 class="text-center">CÁLCULOS ENTRE 2 NÚMEROS</h1>
        <p>Este es un programa en PHP que permite mostrar la suma, resta, multiplicación y división de dos números enteros almacenados en 2 variables diferentes (utilice formularios HTML).
        </p>
        <form action="ejercicio1.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="number1" class="col-1">Número 1</label>
                <input type="number" name="number1" id="number1" class="form-control col-2"  placeholder="Número 1">
                <label for="number2" class="col-1">Número 2</label>
                <input type="number" class="form-control col-2" name="number2" id="number2" placeholder="Número 2">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <select name="operator" id="operator" class="form-control offset-1 col-5">
                    <option value="" selected disabled>Selecciona una operacion</option>
                    <option value="add">Sumar</option>
                    <option value="rest">Restar</option>
                    <option value="multiplication">Multiplicar</option>
                    <option value="divide">Dividir</option>
                </select>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" name ="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>
        
        <?php if(isset($_POST['calcular'])) : ?>
        
        <?php 
            if(!empty($_POST['operator'])) {
                $operator = $_POST['operator'];
                
                $number1 = isset($_POST['number1']);
                $number2 = isset($_POST['number2']);
                
                if ($operator == "add") {
                    
                    $result = $_POST["number1"] + $_POST["number2"];
                    
                }
                else if ($operator == "rest") {
                    $result = $_POST["number1"] - $_POST["number2"];
                }
                else if ($operator == "multiplication") {
                    $result = $_POST["number1"] * $_POST["number2"];
                }
                else {
                    $result = $_POST["number1"] / $_POST["number2"];
                }
            }
            else {
                echo 'No se ha seleccionado ningún operador';     
            }
        ?>
                
                <h4 class="text-center">
                    <?php echo("El resultado de la operación es: ". $result) ?>
                </h4>

                    <h4></h4>
                <?php endif ?>

   
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>