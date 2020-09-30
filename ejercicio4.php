<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericicio PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        <form action="ejercicio4.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <h6 class="col-12">Digite la información del empleado 1</h6>
                <label for="name1" class="col-1">Nombre</label>
                <input type="text" name="name1" id="name1" class="form-control col-2"  placeholder="Nombre">
                <label for="phone1" class="col-1">Teléfono</label>
                <input type="text" name="phone1" id="phone1" class="form-control col-1"  placeholder="Teléfono">
                <label for="direction1" class="col-1">Dirección</label>
                <input type="text" name="direction1" id="direction1" class="form-control col-3"  placeholder="Dirección">
                <label for="salary1" class="col-1">Salario</label>
                <input type="number" class="form-control col-1" name="salary1" id="salary1" placeholder="Salario">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <h6 class="col-12">Digite la información del empleado 2</h6>
                <label for="name2" class="col-1">Nombre</label>
                <input type="text" name="name2" id="name2" class="form-control col-2"  placeholder="Nombre">
                <label for="phone2" class="col-1">Teléfono</label>
                <input type="text" name="phone2" id="phone2" class="form-control col-1"  placeholder="Teléfono">
                <label for="direction2" class="col-1">Dirección</label>
                <input type="text" name="direction2" id="direction2" class="form-control col-3"  placeholder="Dirección">
                <label for="salary2" class="col-1">Salario</label>
                <input type="number" name="salary2" id="salary2" class="form-control col-1" placeholder="Salario">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <h6 class="col-12">Digite la información del empleado 3</h6>
                <label for="name3" class="col-1">Nombre</label>
                <input type="text" name="name3" id="name3" class="form-control col-2"  placeholder="Nombre">
                <label for="phone3" class="col-1">Teléfono</label>
                <input type="text" name="phone3" id="phone3" class="form-control col-1"  placeholder="Teléfono">
                <label for="direction3" class="col-1">Dirección</label>
                <input type="text" name="direction3" id="direction3" class="form-control col-3"  placeholder="Dirección">
                <label for="salary3" class="col-1">Salario</label>
                <input type="number" name="salary3" id="salary3" class="form-control col-1"  placeholder="Salario">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <h6 class="col-12">Digite la información del empleado 4</h6>
                <label for="nam4" class="col-1">Nombre</label>
                <input type="text" name="name4" id="name4" class="form-control col-2"  placeholder="Nombre">
                <label for="phone4" class="col-1">Teléfono</label>
                <input type="text" name="phone4" id="phone4" class="form-control col-1"  placeholder="Teléfono">
                <label for="direction4" class="col-1">Dirección</label>
                <input type="text" name="direction4" id="direction4" class="form-control col-3"  placeholder="Dirección">
                <label for="salary4" class="col-1">Salario</label>
                <input type="number" name="salary4" id="salary4" class="form-control col-1" placeholder="Salario">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <h6 class="col-12">Digite la información del empleado 5</h6>
                <label for="name5" class="col-1">Nombre</label>
                <input type="text" name="name5" id="name5" class="form-control col-2"  placeholder="Nombre">
                <label for="phone5" class="col-1">Teléfono</label>
                <input type="text" name="phone5" id="phone5" class="form-control col-1"  placeholder="Teléfono">
                <label for="direction5" class="col-1">Dirección</label>
                <input type="text" name="direction5" id="direction5" class="form-control col-3"  placeholder="Dirección">
                <label for="salary5" class="col-1">Salario</label>
                <input type="number" name="salary5" id="salary5" class="form-control col-1" placeholder="Salario">
            </div>
            
            
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" name ="send" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>

        <?php if(isset($_POST["send"])) :?>
        <?php
            $salaryB = 40000000;
            $salaryC = 32000000;
            $mayorSucursal;
            $names = array($_POST["name1"],$_POST["name2"],$_POST["name3"],$_POST["name4"],$_POST["name5"]);
            $phones = array($_POST["phone1"],$_POST["phone2"],$_POST["phone3"],$_POST["phone4"],$_POST["phone5"]);
            $directions = array($_POST["direction1"],$_POST["direction2"],$_POST["direction3"],$_POST["direction4"],$_POST["direction5"]);
            $salarys = array($_POST["salary1"],$_POST["salary2"],$_POST["salary3"],$_POST["salary4"],$_POST["salary5"]);

            $sumatoriaSalarios=$salarys[0] + $salarys[1] + $salarys[2] + $salarys[3] + $salarys[4];

            ?>
        <?php 
            if($sumatoriaSalarios > $salaryB) {
                $mayorSucursal = "A";
            } 
            else {
                $mayorSucursal = "B";
            }
        ?>    
        <h2>La sucursal <?php echo($mayorSucursal);?> tiene la mejor sumatoria de salarios"</h2>
        <br>
        <br>
        <h4><?php echo("Nombre del empleado: ". $names[0]." Teléfono: ".$phones[0]." Dirección: ".$directions[0]." Salario: ". $salarys[0] ); ?></h4>
        <h4><?php echo("Nombre del empleado: ". $names[1]." Teléfono: ".$phones[1]." Dirección: ".$directions[1]." Salario: ". $salarys[1] ); ?></h4>
        <h4><?php echo("Nombre del empleado: ". $names[2]." Teléfono: ".$phones[2]." Dirección: ".$directions[2]." Salario: ". $salarys[2] ); ?></h4>
        <h4><?php echo("Nombre del empleado: ". $names[3]." Teléfono: ".$phones[3]." Dirección: ".$directions[3]." Salario: ". $salarys[3] ); ?></h4>
        <h4><?php echo("Nombre del empleado: ". $names[4]." Teléfono: ".$phones[4]." Dirección: ".$directions[4]." Salario: ". $salarys[4] ); ?></h4>
                
        <?php endif?>

    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>