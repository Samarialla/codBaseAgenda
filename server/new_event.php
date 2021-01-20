<?php
session_start();
require('../server/conector.php');
$titulo=$_POST['titulo'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$end_hour=$_POST['end_hour'];
$start_hour=$_POST['start_hour'];
$allDay=$_POST['allDay'];

$con = new ConectorBD();
if ($con->initConexion()=='OK'){
	$datos['usuario_id'] = "'".$_SESSION['id']."'";
	$datos['title'] = "'".$titulo."'";
    $datos['start'] = "'".$start_date."'";
    $datos['end'] = "'".$end_date."'";
    $datos['horai'] = "'".$end_hour."'";
    $datos['horaf'] = "'".$start_hour."'";
    $datos['allDay'] = "'".$allDay."'";
    if ($con->insertData('eventos', $datos)) {
      //echo json_encode($datos);
      	$php_response=array("msg"=>"OK","data"=>$datos);
    }else{
    	$php_response=array("msg"=>"Error la registrar los datos","data"=>"2");
    }
    echo json_encode($php_response,JSON_FORCE_OBJECT);
    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}
