<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'cabecera.php';
?>

<?php
if($_POST){

    $total=0;
    $SID=session_id();
    $Correo= $_POST['email'];

    foreach($_SESSION["CARRITO"] as $indice=>$producto){
        $total=$total+($producto["PRECIO"]*$producto["CANTIDAD"]);
    }

    $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
                        (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
                 VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");
    
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION["CARRITO"] as $indice=>$producto){
        $sentencia=$pdo->prepare ("INSERT INTO 
        `tbldetalleventa` (`ID`, `IDVENTAS`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTAS, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

        $sentencia->bindParam(":IDVENTAS",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto["ID"]);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto["PRECIO"]);
        $sentencia->bindParam(":CANTIDAD",$producto["CANTIDAD"]);
        $sentencia->execute();

    }


    echo "<h3>" .$total. "</h3>";
}
?>


<?php
include 'pie.php'
?>