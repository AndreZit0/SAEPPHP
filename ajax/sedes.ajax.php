<?php

    require_once "../controladores/sedes.controlador.php";
    require_once "../modelos/sedes.modelo.php";

    class AjaxSedes{

        public $id_sede;
        public $estado_sede;

        public function ajaxTraerSede(){

            $valor = $this->id_sede;
            $respuesta = ControladorSedes::ctrMostrarSedes($valor);
            echo json_encode($respuesta);

        }//Fin ajaxTraersede

        public function ajaxCambiarEstado(){
            $valorId = $this->id_sede;
            $estado = $this->estado_sede;

            $respuesta = ControladorSedes::ctrCambiarEstadoSede($valorId, $estado);

            echo json_encode($respuesta);


        }

    }//fin clase Ajaxsedes

    if (isset($_POST["id_sede"])){
        $sede = new AjaxSedes();
        $sede->id_sede = $_POST["id_sede"];
        $sede->ajaxTraerSede();       
    }

    if (isset($_POST["id_cambiarEstado"]) && ($_POST["estadoSede"])){
        $activarsede = new AjaxSedes();
        $activarsede->id_sede=$_POST["id_cambiarEstado"];
        $activarsede->estado_sede=$_POST["estadoSede"];
        $activarsede->ajaxCambiarEstado();
    }