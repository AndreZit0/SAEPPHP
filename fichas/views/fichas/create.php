<form action="/fichas/create" method="POST">
    <div>
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
    </div>
    <div>
        <label for="id_programas">Programa:</label>
        <select id="id_programas" name="id_programas" required>
            <!-- Options will be populated from the database -->
        </select>
    </div>
    <div>
        <label for="id_sede">Sede:</label>
        <select id="id_sede" name="id_sede" required>
            <!-- Options will be populated from the database -->
        </select>
    </div>
    <div>
        <label for="modalidad">Modalidad:</label>
        <select id="modalidad" name="modalidad" required>
            <option value="Presencial">Presencial</option>
            <option value="Virtual">Virtual</option>
        </select>
    </div>
    <div>
        <label for="jornada">Jornada:</label>
        <select id="jornada" name="jornada" required>
            <option value="Diurna">Diurna</option>
            <option value="Mixta">Mixta</option>
            <option value="Nocturna">Nocturna</option>
        </select>
    </div>
    <div>
        <label for="nivel_formacion">Nivel de Formación:</label>
        <select id="nivel_formacion" name="nivel_formacion" required>
            <option value="Técnico">Técnico</option>
            <option value="Tecnólogo">Tecnólogo</option>
        </select>
    </div>
    <div>
        <label for="tipo_oferta">Tipo de Oferta:</label>
        <select id="tipo_oferta" name="tipo_oferta" required>
            <option value="Abierta">Abierta</option>
            <option value="Cerrada">Cerrada</option>
        </select>
    </div>
    <div>
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
    </div>
    <div>
        <label for="fecha_fin_lec">Fecha de Fin de Lectura:</label>
        <input type="date" id="fecha_fin_lec" name="fecha_fin_lec" required>
    </div>
    <div>
        <label for="fecha_final">Fecha Final:</label>
        <input type="date" id="fecha_final" name="fecha_final" required>
    </div>
    <input type="hidden" name="estado" value="activo">
    <button type="submit">Agregar Ficha</button>
</form>