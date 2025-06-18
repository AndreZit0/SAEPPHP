<?php

class FichasController {
    private $fichaModel;

    public function __construct() {
        $this->fichaModel = new Ficha();
    }

    public function index() {
        $fichas = $this->fichaModel->getAllFichas();
        require_once '../views/fichas/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'codigo' => $_POST['codigo'],
                'ID_programas' => $_POST['ID_programas'],
                'ID_sede' => $_POST['ID_sede'],
                'modalidad' => $_POST['modalidad'],
                'jornada' => $_POST['jornada'],
                'nivel_formacion' => $_POST['nivel_formacion'],
                'tipo_oferta' => $_POST['tipo_oferta'],
                'fecha_inicio' => $_POST['fecha_inicio'],
                'fecha_fin_lec' => $_POST['fecha_fin_lec'],
                'fecha_final' => $_POST['fecha_final'],
                'estado' => 'activo'
            ];
            $this->fichaModel->addFicha($data);
            header('Location: /fichas');
        } else {
            require_once '../views/fichas/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'codigo' => $_POST['codigo'],
                'ID_programas' => $_POST['ID_programas'],
                'ID_sede' => $_POST['ID_sede'],
                'modalidad' => $_POST['modalidad'],
                'jornada' => $_POST['jornada'],
                'nivel_formacion' => $_POST['nivel_formacion'],
                'tipo_oferta' => $_POST['tipo_oferta'],
                'fecha_inicio' => $_POST['fecha_inicio'],
                'fecha_fin_lec' => $_POST['fecha_fin_lec'],
                'fecha_final' => $_POST['fecha_final']
            ];
            $this->fichaModel->updateFicha($data);
            header('Location: /fichas');
        } else {
            $ficha = $this->fichaModel->getFichaById($id);
            require_once '../views/fichas/edit.php';
        }
    }

    public function toggleStatus($id) {
        $this->fichaModel->toggleFichaStatus($id);
        echo json_encode(['status' => 'success']);
    }
}