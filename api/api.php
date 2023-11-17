<?php
include_once("Crud.php");

$opc = $_SERVER['REQUEST_METHOD'];

$crud = new Crud();

switch ($opc) {
    case 'GET':
         //$resultado['mensaje'] = "Seleccionar";
        //echo json_encode($resultado);

        Crud::select();

        break;
    case 'POST':
        // $resultado['mensaje'] = "Insertar";
        // echo json_encode($resultado);

        Crud::insert();

        break;

    case 'PUT':
        // $resultado['mensaje'] = "Actualizar";
        // echo json_encode($resultado);

        Crud::update();

        break;
    
    case 'DELETE':
        $cedula = $_GET['CEDULA'];

      

        Crud::delete($cedula);

        break;
    default:
        # code...
        break;
}

?>