<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fichas</title>
    <link rel="stylesheet" href="/public/css/fichas.css">
    <script src="/public/js/fichas.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Fichas</h1>
        <button id="btn-create" class="btn btn-primary">Agregar Nueva Ficha</button>
        <div id="fichas-table">
            <?php include_once 'partials/datatable.php'; ?>
        </div>
    </div>

    <script>
        document.getElementById('btn-create').addEventListener('click', function() {
            window.location.href = 'create.php';
        });
    </script>
</body>
</html>