<?php   
$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':

            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje= "ok ID correcto".$ID;
            }else{
                $mensaje= "ups.... Id incorrecto".$ID;
            }

        break;
        }
    }
?>