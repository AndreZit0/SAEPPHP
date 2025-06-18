document.addEventListener('DOMContentLoaded', function() {
    const fichaTable = $('#fichaTable').DataTable({
        ajax: {
            url: 'path/to/your/api/fichas', // Cambiar a la ruta de tu API
            dataSrc: ''
        },
        columns: [
            { data: 'codigo' },
            { data: 'ID_programas' },
            { data: 'ID_sede' },
            { data: 'modalidad' },
            { data: 'jornada' },
            { data: 'nivel_formacion' },
            { data: 'tipo_oferta' },
            { data: 'fecha_inicio' },
            { data: 'fecha_fin_lec' },
            { data: 'fecha_final' },
            {
                data: null,
                render: function(data, type, row) {
                    return `<button class="edit-btn" data-id="${row.id}">Editar</button>
                            <button class="toggle-status-btn" data-id="${row.id}" data-status="${row.estado}">${row.estado === 'activo' ? 'Desactivar' : 'Activar'}</button>`;
                }
            }
        ]
    });

    $('#createFichaForm').on('submit', function(e) {
        e.preventDefault();
        const formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'path/to/your/api/fichas/create', // Cambiar a la ruta de tu API
            data: formData,
            success: function(response) {
                fichaTable.ajax.reload();
                $('#createFichaModal').modal('hide');
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    $('#fichaTable').on('click', '.edit-btn', function() {
        const fichaId = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: `path/to/your/api/fichas/${fichaId}`, // Cambiar a la ruta de tu API
            success: function(data) {
                // Llenar el formulario de edición con los datos de la ficha
                $('#editFichaForm [name="codigo"]').val(data.codigo);
                $('#editFichaForm [name="ID_programas"]').val(data.ID_programas);
                $('#editFichaForm [name="ID_sede"]').val(data.ID_sede);
                $('#editFichaForm [name="modalidad"]').val(data.modalidad);
                $('#editFichaForm [name="jornada"]').val(data.jornada);
                $('#editFichaForm [name="nivel_formacion"]').val(data.nivel_formacion);
                $('#editFichaForm [name="tipo_oferta"]').val(data.tipo_oferta);
                $('#editFichaForm [name="fecha_inicio"]').val(data.fecha_inicio);
                $('#editFichaForm [name="fecha_fin_lec"]').val(data.fecha_fin_lec);
                $('#editFichaForm [name="fecha_final"]').val(data.fecha_final);
                $('#editFichaModal').modal('show');
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    $('#editFichaForm').on('submit', function(e) {
        e.preventDefault();
        const fichaId = $(this).data('id');
        const formData = $(this).serialize();
        $.ajax({
            type: 'PUT',
            url: `path/to/your/api/fichas/${fichaId}`, // Cambiar a la ruta de tu API
            data: formData,
            success: function(response) {
                fichaTable.ajax.reload();
                $('#editFichaModal').modal('hide');
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    $('#fichaTable').on('click', '.toggle-status-btn', function() {
        const fichaId = $(this).data('id');
        const currentStatus = $(this).data('status');
        $.ajax({
            type: 'POST',
            url: `path/to/your/api/fichas/toggle-status/${fichaId}`, // Cambiar a la ruta de tu API
            data: { status: currentStatus === 'activo' ? 'inactivo' : 'activo' },
            success: function(response) {
                fichaTable.ajax.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});