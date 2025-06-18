<?php
// Este archivo contiene la configuración y el código necesario para mostrar los datos en un DataTable

// Conexión a la base de datos
require_once '../../config/database.php';

// Obtener las fichas desde la base de datos
function getFichas() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM fichas");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Cargar los datos en el DataTable
$fichas = getFichas();
?>

<table id="fichasTable" class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>ID Programa</th>
            <th>ID Sede</th>
            <th>Modalidad</th>
            <th>Jornada</th>
            <th>Nivel de Formación</th>
            <th>Tipo de Oferta</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fichas as $ficha): ?>
            <tr>
                <td><?php echo htmlspecialchars($ficha['codigo']); ?></td>
                <td><?php echo htmlspecialchars($ficha['ID_programas']); ?></td>
                <td><?php echo htmlspecialchars($ficha['ID_sede']); ?></td>
                <td><?php echo htmlspecialchars($ficha['modalidad']); ?></td>
                <td><?php echo htmlspecialchars($ficha['jornada']); ?></td>
                <td><?php echo htmlspecialchars($ficha['nivel_formacion']); ?></td>
                <td><?php echo htmlspecialchars($ficha['tipo_oferta']); ?></td>
                <td><?php echo htmlspecialchars($ficha['fecha_inicio']); ?></td>
                <td><?php echo htmlspecialchars($ficha['fecha_fin_lec']); ?></td>
                <td><?php echo htmlspecialchars($ficha['estado']); ?></td>
                <td>
                    <button class="btn btn-primary edit-btn" data-id="<?php echo $ficha['id']; ?>">Editar</button>
                    <button class="btn btn-warning toggle-status-btn" data-id="<?php echo $ficha['id']; ?>">
                        <?php echo $ficha['estado'] == 'activo' ? 'Desactivar' : 'Activar'; ?>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#fichasTable').DataTable();

        // Lógica para el botón de editar
        $('.edit-btn').on('click', function() {
            var fichaId = $(this).data('id');
            // Aquí se puede implementar la lógica para abrir la ventana modal de edición
        });

        // Lógica para activar/desactivar estado
        $('.toggle-status-btn').on('click', function() {
            var fichaId = $(this).data('id');
            // Aquí se puede implementar la lógica para activar/desactivar el estado de la ficha
        });
    });
</script>