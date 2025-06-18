<?php

use PHPUnit\Framework\TestCase;

class FichasTest extends TestCase
{
    protected $ficha;

    protected function setUp(): void
    {
        $this->ficha = new Ficha();
    }

    public function testCreateFicha()
    {
        $data = [
            'codigo' => 'FIC123',
            'ID_programas' => 1,
            'ID_sede' => 1,
            'modalidad' => 'Presencial',
            'jornada' => 'Diurna',
            'nivel_formacion' => 'Técnico',
            'tipo_oferta' => 'Abierta',
            'fecha_inicio' => '2023-01-01',
            'fecha_fin_lec' => '2023-06-01',
            'fecha_final' => '2023-06-30'
        ];

        $result = $this->ficha->create($data);
        $this->assertTrue($result);
    }

    public function testReadFichas()
    {
        $fichas = $this->ficha->readAll();
        $this->assertIsArray($fichas);
    }

    public function testUpdateFicha()
    {
        $data = [
            'codigo' => 'FIC123',
            'ID_programas' => 1,
            'ID_sede' => 1,
            'modalidad' => 'Virtual',
            'jornada' => 'Nocturna',
            'nivel_formacion' => 'Tecnólogo',
            'tipo_oferta' => 'Cerrada',
            'fecha_inicio' => '2023-02-01',
            'fecha_fin_lec' => '2023-07-01',
            'fecha_final' => '2023-07-30'
        ];

        $result = $this->ficha->update(1, $data); // Assuming 1 is the ID of the ficha to update
        $this->assertTrue($result);
    }

    public function testToggleStatus()
    {
        $result = $this->ficha->toggleStatus(1); // Assuming 1 is the ID of the ficha
        $this->assertTrue($result);
    }

    public function testDeleteFicha()
    {
        $result = $this->ficha->delete(1); // Assuming 1 is the ID of the ficha to delete
        $this->assertTrue($result);
    }
}