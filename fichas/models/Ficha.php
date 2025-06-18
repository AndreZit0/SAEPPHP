<?php

class Ficha {
    private $codigo;
    private $id_programas;
    private $id_sede;
    private $modalidad;
    private $jornada;
    private $nivel_formacion;
    private $tipo_oferta;
    private $fecha_inicio;
    private $fecha_fin_lec;
    private $fecha_final;
    private $estado;

    public function __construct($codigo, $id_programas, $id_sede, $modalidad, $jornada, $nivel_formacion, $tipo_oferta, $fecha_inicio, $fecha_fin_lec, $fecha_final, $estado = 'activo') {
        $this->codigo = $codigo;
        $this->id_programas = $id_programas;
        $this->id_sede = $id_sede;
        $this->modalidad = $modalidad;
        $this->jornada = $jornada;
        $this->nivel_formacion = $nivel_formacion;
        $this->tipo_oferta = $tipo_oferta;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin_lec = $fecha_fin_lec;
        $this->fecha_final = $fecha_final;
        $this->estado = $estado;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getIdProgramas() {
        return $this->id_programas;
    }

    public function getIdSede() {
        return $this->id_sede;
    }

    public function getModalidad() {
        return $this->modalidad;
    }

    public function getJornada() {
        return $this->jornada;
    }

    public function getNivelFormacion() {
        return $this->nivel_formacion;
    }

    public function getTipoOferta() {
        return $this->tipo_oferta;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function getFechaFinLec() {
        return $this->fecha_fin_lec;
    }

    public function getFechaFinal() {
        return $this->fecha_final;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function save($pdo) {
        $stmt = $pdo->prepare("INSERT INTO fichas (codigo, id_programas, id_sede, modalidad, jornada, nivel_formacion, tipo_oferta, fecha_inicio, fecha_fin_lec, fecha_final, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$this->codigo, $this->id_programas, $this->id_sede, $this->modalidad, $this->jornada, $this->nivel_formacion, $this->tipo_oferta, $this->fecha_inicio, $this->fecha_fin_lec, $this->fecha_final, $this->estado]);
    }

    public function update($pdo, $id) {
        $stmt = $pdo->prepare("UPDATE fichas SET codigo = ?, id_programas = ?, id_sede = ?, modalidad = ?, jornada = ?, nivel_formacion = ?, tipo_oferta = ?, fecha_inicio = ?, fecha_fin_lec = ?, fecha_final = ?, estado = ? WHERE id = ?");
        return $stmt->execute([$this->codigo, $this->id_programas, $this->id_sede, $this->modalidad, $this->jornada, $this->nivel_formacion, $this->tipo_oferta, $this->fecha_inicio, $this->fecha_fin_lec, $this->fecha_final, $this->estado, $id]);
    }

    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM fichas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function toggleStatus($pdo, $id) {
        $stmt = $pdo->prepare("UPDATE fichas SET estado = CASE WHEN estado = 'activo' THEN 'inactivo' ELSE 'activo' END WHERE id = ?");
        return $stmt->execute([$id]);
    }
}