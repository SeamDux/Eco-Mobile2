<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'cabecera.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #00a550; /* Fondo verde */
            color: #fff; /* Texto blanco */
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        section {
            padding: 20px;
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.1); /* Fondo blanco semitransparente */
            border-radius: 10px; /* Bordes redondeados */
        }
        h2, p {
            margin: 0 0 10px;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
        }
        p {
            line-height: 1.6em;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <h2>
                
            
            Quiénes Somos</h2>
            <p><?php echo isset($informacion['quienes_somos']) ? $informacion['quienes_somos'] : 'En [Nombre de la Empresa], nos dedicamos a conectar a las personas con la tecnología que impulsa el mundo moderno. Fundada en [Año de Fundación], nuestra misión es ofrecer los mejores teléfonos móviles del mercado, combinando innovación, calidad y accesibilidad para todos nuestros clientes.'; ?></p>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Visión</h2>
            <p><?php echo isset($informacion['vision']) ? $informacion['vision'] : 'Aspiramos a ser líderes en la industria de la telefonía móvil, proporcionando productos de alta tecnología que mejoran la vida diaria de las personas. Creemos en un futuro donde todos estén conectados de manera sencilla y eficiente..'; ?></p>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Misión</h2>
            <p><?php echo isset($informacion['mision']) ? $informacion['mision'] : 'Nuestra misión es ofrecer una amplia gama de teléfonos móviles que se adapten a las necesidades y presupuestos de todos nuestros clientes. Desde los modelos más avanzados hasta opciones más asequibles, nos esforzamos por brindar productos de alta calidad, duraderos y con la mejor relación calidad-precio.'; ?></p>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Nuestra Historia</h2>
            <p><?php echo isset($informacion['Nuestra Historia']) ? $informacion['mision'] : 'Desde nuestros humildes comienzos en [Lugar de Fundación], hemos crecido hasta convertirnos en una empresa reconocida y respetada en el sector de la telefonía móvil. A lo largo de los años, hemos ampliado nuestra oferta de productos y servicios, siempre con la misma dedicación a la calidad y la satisfacción del cliente.'; ?></p>
        </div>
    </section>
</body>
</html>


<?php
include 'pie.php'
?>


</body>
</html>