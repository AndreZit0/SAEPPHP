<div class="modal fade" id="modalEditFicha" tabindex="-1" role="dialog" aria-labelledby="modalEditFichaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditFichaLabel">Editar Ficha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditFicha">
                    <input type="hidden" name="id" id="editFichaId">
                    <div class="form-group">
                        <label for="editCodigo">Código</label>
                        <input type="text" class="form-control" id="editCodigo" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="editIDProgramas">Programa</label>
                        <select class="form-control" id="editIDProgramas" name="ID_programas" required>
                            <!-- Options will be populated via AJAX -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editIDSede">Sede</label>
                        <select class="form-control" id="editIDSede" name="ID_sede" required>
                            <!-- Options will be populated via AJAX -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editModalidad">Modalidad</label>
                        <select class="form-control" id="editModalidad" name="modalidad" required>
                            <option value="Presencial">Presencial</option>
                            <option value="Virtual">Virtual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editJornada">Jornada</label>
                        <select class="form-control" id="editJornada" name="jornada" required>
                            <option value="Diurna">Diurna</option>
                            <option value="Mixta">Mixta</option>
                            <option value="Nocturna">Nocturna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editNivelFormacion">Nivel de Formación</label>
                        <select class="form-control" id="editNivelFormacion" name="nivel_formacion" required>
                            <option value="Técnico">Técnico</option>
                            <option value="Tecnólogo">Tecnólogo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editTipoOferta">Tipo de Oferta</label>
                        <select class="form-control" id="editTipoOferta" name="tipo_oferta" required>
                            <option value="Abierta">Abierta</option>
                            <option value="Cerrada">Cerrada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editFechaInicio">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="editFechaInicio" name="fecha_inicio" required>
                    </div>
                    <div class="form-group">
                        <label for="editFechaFinLec">Fecha Fin de Lectura</label>
                        <input type="date" class="form-control" id="editFechaFinLec" name="fecha_fin_lec" required>
                    </div>
                    <div class="form-group">
                        <label for="editFechaFinal">Fecha Final</label>
                        <input type="date" class="form-control" id="editFechaFinal" name="fecha_final" required>
                    </div>
                    <div class="form-group">
                        <label for="editEstado">Estado</label>
                        <select class="form-control" id="editEstado" name="estado" disabled>
                            <option value="Activo" selected>Activo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>