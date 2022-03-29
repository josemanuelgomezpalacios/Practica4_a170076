<?php
require_once "lib/nusoap.php";

function getFrutas( $datos )
{
    if ( $datos == "Frutas" ) {
        return join( ",", array(
            "Naranja dulce",
            "Manzana Roja",
            "Pera dulce",
            "Mandarina",
            "Limon agrio" ) );

    } else {
        return "No hay frutas";
    }
}

$server = new soap_server();
$server->register( "getFrutas" );
if ( !isset( $HTTP_RAW_POST_DATA ) ) 
    $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
$server->service( $HTTP_RAW_POST_DATA );

?>