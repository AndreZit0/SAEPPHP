<?php
// Este archivo contiene el formulario para editar una ficha existente.

require_once '../../models/Ficha.php';

// Obtener el ID de la ficha a editar
$id = $_GET['id'] ?? null;

if ($id) {
    $ficha = new Ficha();
    $fichaData = $ficha->getFichaById($id);
}

$programas = $ficha->getProgramas(); // Método para obtener programas
$sedes = $ficha->getSedes(); // Método para obtener sedes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ficha</title>
    <link rel="stylesheet" href="../../public/css/fichas.css">
</head>
<body>
    <h1>Editar Ficha</h1>
    <form action="../../controllers/FichasController.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $fichaData['id']; ?>">
        
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $fichaData['codigo']; ?>" required>

        <label for="id_programas">Programa:</label>
        <select name="id_programas" id="id_programas" required>
            <?php foreach ($programas as $programa): ?>
                <option value="<?php echo $programa['id']; ?>" <?php echo $programa['id'] == $fichaData['id_programas'] ? 'selected' : ''; ?>>
                    <?php echo $programa['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="id_sede">Sede:</label>
        <select name="id_sede" id="id_sede" required>
            <?php foreach ($sedes as $sede): ?>
                <option value="<?php echo $sede['id']; ?>" <?php echo $sede['id'] == $fichaData['id_sede'] ? 'selected' : ''; ?>>
                    <?php echo $sede['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="modalidad">Modalidad:</label>
        <select name="modalidad" id="modalidad" required>
            <option value="Presencial" <?php echo $fichaData['modalidad'] == 'Presencial' ? 'selected' : ''; ?>>Presencial</option>
            <option value="Virtual" <?php echo $fichaData['modalidad'] == 'Virtual' ? 'selected' : ''; ?>>Virtual</option>
        </select>

        <label for="jornada">Jornada:</label>
        <select name="jornada" id="jornada" required>
            <option value="Diurna" <?php echo $fichaData['jornada'] == 'Diurna' ? 'selected' : ''; ?>>Diurna</option>
            <option value="Mixta" <?php echo $fichaData['jornada'] == 'Mixta' ? 'selected' : ''; ?>>Mixta</option>
            <option value="Nocturna" <?php echo $fichaData['jornada'] == 'Nocturna' ? 'selected' : ''; ?>>Nocturna</option>
        </select>

        <label for="nivel_formacion">Nivel de Formación:</label>
        <select name="nivel_formacion" id="nivel_formacion" required>
            <option value="Técnico" <?php echo $fichaData['nivel_formacion'] == 'Técnico' ? 'selected' : ''; ?>>Técnico</option>
            <option value="Tecnólogo" <?php echo $fichaData['nivel_formacion'] == 'Tecnólogo' ? 'selected' : ''; ?>>Tecnólogo</option>
        </select>

        <label for="tipo_oferta">Tipo de Oferta:</label>
        <select name="tipo_oferta" id="tipo_oferta" required>
            <option value="Abierta" <?php echo $fichaData['tipo_oferta'] == 'Abierta' ? 'selected' : ''; ?>>Abierta</option>
            <option value="Cerrada" <?php echo $fichaData['tipo_oferta'] == 'Cerrada' ? 'selected' : ''; ?>>Cerrada</option>
        </select>

        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="<?php echo $fichaData['fecha_inicio']; ?>" required>

        <label for="fecha_fin_lec">Fecha de Fin de Lectura:</label>
        <input type="date" name="fecha_fin_lec" id="fecha_fin_lec" value="<?php echo $fichaData['fecha_fin_lec']; ?>" required>

        <label for="fecha_final">Fecha Final:</label>
        <input type="date" name="fecha_final" id="fecha_final" value="<?php echo $fichaData['fecha_final']; ?>" required>

        <input type="hidden" name="estado" value="activo">

        <button type="submit">Actualizar Ficha</button>
    </form>
</body>
</html>