<?php
$connect = mysqli_connect("localhost", "root", "admin123", "complicadovet");
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
    <link rel="stylesheet" href="css/style.css">
    <title>ComplicadoVet</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <a href="#" class="header_logo">
                <img src="img/animal-3364909_1920.png" alt="Animal">
            </a>
            <nav class="header_menu">
                <ul>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bem_vindo">
        <div class="container">
            <h1>Bem vindo</h1>
            <blockquote>
                <p>"Espero que gostem!"</p>
            </blockquote>
        </div>
    </section>

    <section>

        <div class="container">
    
            <div class="exports">
                <div class="exportAnimals">
                    <div class="titleExport">
                        <h2>Exportar dados dos animais</h2>
                    </div>
                    <form method="post" action="exportAnimal.php">
                        <input type="submit" name="exportAnimal" value="CSV Export Animal" class="btn btn-success">
                    </form>    
                </div>
                <div class="exportClients">
                    <div class="titleExport">
                        <h2>Exportar dados dos clientes</h2>
                    </div>
                    <form method="post" action="exportCliente.php">
                        <input type="submit" name="exportCliente" value="CSV Export Cliente" class="btn btn-success">
                    </form> 
                </div>
            </div>
    
            <div class="imports">
                <div class="importAnimais">
                    <div class="titleExport">
                        <h2>Upload de animais</h2>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <input class="btn btn-warning" type="submit" name="sub" value="Upload Animal">
                    </form>
                </div>
                <div class="importClientes">
                    <div class="titleExport">
                        <h2>Upload de clientes</h2>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <input class="btn btn-warning" type="submit" name="sub" value="Upload Cliente">
                    </form>
                </div>
            </div>
    
        </div>
    </section>

</body>
</html>

