<?php
require('../server/conector.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Sergi Amarilla'";
    $datos['correo'] = "'blackpowerfitness20@gmail.com'";
    $datos['password'] = "'".password_hash("bpfitnes2020",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'12/05/1991'";

    // if ($con->insertData('usuarios', $datos)) {
    //   echo "Se han registrado los datos correctamente";
    // }else echo "Se ha producido un error en la actualización";

    // $datos['nombres'] = "'Juan Rodriguez'";
    // $datos['correo'] = "'juancho@gmail.com'";
    // $datos['password'] = "'".password_hash("1234",PASSWORD_DEFAULT)."'";
    // $datos['fecnac'] = "'01/05/1997'";

    // if ($con->insertData('usuarios', $datos)) {
    //   echo "Se han registrado los datos correctamente";
    // }else echo "Se ha producido un error en la actualización";

    // $datos['nombres'] = "'Angel Benitez'";
    // $datos['correo'] = "'angel@gmail.com'";
    // $datos['password'] = "'".password_hash("1234",PASSWORD_DEFAULT)."'";
    // $datos['fecnac'] = "'09/01/1986'";

    // if ($con->insertData('usuarios', $datos)) {
    //   echo "Se han registrado los datos correctamente";
    // }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}

?>
