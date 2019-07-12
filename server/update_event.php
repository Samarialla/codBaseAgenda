<?php
session_start();
require('../server/conector.php');

$con = new ConectorBD();
if ($con->initConexion()=='OK'){

    $idevento=$_POST["id"];
    $start=$_POST["start_date"];
    $end=$_POST["end_date"];
    if($con->actualizarEvento($idevento,$start,$end,$_SESSION['id'])){
    	$php_response=array("msg"=>"OK","eventos"=>$idevento);
    
    }else{
    	$php_response=array("msg"=>"Error al acutalizar el evento","eventos"=>$idevento);
    }

	echo json_encode($php_response,JSON_FORCE_OBJECT);

    $con->cerrarConexion();

}else {
    echo "Se presentó un error en la conexión";
}

 ?>
