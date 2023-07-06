<?php
require_once "controlador/crtlClientes.php";
require_once "../modelos/mdlClientes.php";
class ajaxClientes{
    public $idClientes;

    public function cargarDatos(){
        $tabla = "cliente";
        $parametro= "cliente";
        $id = $this->idClientes;
        $datos = ControladorClientes::crtlCargarClientes($tabla, $parametro, $id);
        echo json_encode($datos);

    }

}
if(isset($_POST{"idClientes"})){
    $objAjaxCliente = new ajaxClientes();
    $objAjaxCliente->idClientes = $_POST["idClientes"];
    if($_POST["edit"] == "edit"){
        $objAjaxClientes->cargarDatos();
    }else{
        
        #$objAjaxCliente->eliminar();
    }

}
