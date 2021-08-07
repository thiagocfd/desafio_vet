<?php

$connect = mysqli_connect("localhost", "root", "", "complicadovet");
$queryAnimal = "SELECT * FROM animal ORDER BY id desc";
$resultAnimal = mysqli_query($connect, $queryAnimal);
$queryCliente = "SELECT * FROM cliente ORDER BY id desc";
$resultCliente = mysqli_query($connect, $queryCliente);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="mt-5 container">

        <div>
            <div class="mx-auto titleExport">
                <h2>Exportar Dados</h2>
            </div>
            <div class="exportAnimals">
                <form method="post" action="exportAnimal.php">
                    <input type="submit" name="exportAnimal" value="CSV Export Animal" class="btn btn-primary">
                </form>    
            </div>
            <div class="exportClients">
                <form method="post" action="exportCliente.php">
                    <input type="submit" name="exportCliente" value="CSV Export Cliente" class="btn btn-success">
                </form> 
            </div>
        </div>

    </div>


</body>
</html>

