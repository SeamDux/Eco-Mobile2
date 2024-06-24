<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand"href="index.php">
        <img src="https://th.bing.com/th/id/OIP.HKboA4mjlSTGV_U0MsfcwQHaHa?rs=1&pid=ImgDetMain" alt="Descripción de la imagen" style="max-height: 30px;">
        </a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienesSomos.php" tabindex="-1" aria-disabled="true">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarCarrito.php" >Carrito(<?php
                    echo (empty($_SESSION["CARRITO"]))?0:count($_SESSION["CARRITO"]);
                    
                    
                    ?>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container" >