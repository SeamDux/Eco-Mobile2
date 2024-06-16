<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>

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
        <a class="navbar-brand"href="index.php">LOGO DE LA EMPRESA</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#"> Ver carrito <span class="sr-only">(current)</span></a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.php" tabindex="-1" aria-disabled="true">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CARRITO(0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container" >
        <br>
        <div class="alert alert-success">
        <?php echo $mensaje;?>
            
            
                <a href="#" class="badge badge-success" >ver carrito </a>
        </div>
    </div>
    <div class="row">
        <?php
        $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
        ?>

        <?php foreach($listaProductos as $producto) { ?>            
            <div class = "col-3">
            <div class="card">
                <img 

                
                titule="<?php echo$producto['Imagen'];?>"
                alt="<?php echo$producto['Imagen'];?>"
                class="card-img-top" 
                src="<?php echo$producto['Imagen'];?>"
                data-toggle='popover'
                data-trigger='hover'
                data-content='<?php echo$producto['Descripcion'];?>'
                >

                
                <div class="card-body">
                <span><?php echo$producto['Nombre'];?></span>    
                    <h5 class="card-title">$<?php echo$producto['Precio'];?></h5>
                    "<?php echo$producto['Descripcion'];?>"
                    

                <form action="" method="post">

                <input type ="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                <input type ="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                <input type ="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>" >
                <input type ="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                <<button class="btn btn-primary" 
                    name= "btnAccion" 
                    value="Agregar" 
                    type="submit"
                    >
                    Agregar al carrito</button>
                </form>


                </div>
            </div>

        </div>


        <?php } ?>


    </div> 
    <script>

    $(function () {
  $('[data-toggle="popover"]').popover()
})      
</script>

</body>
</html>