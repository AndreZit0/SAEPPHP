<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sedes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Sedes</li>
                    </ol>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#modalAgregarSede"> Agregar Sede</button>
                </div>


            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>nombre</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $valor = null;
                                $sedes = ControladorSedes::ctrMostrarSedes($valor);
                                // var_dump($programas);
                                foreach ($sedes as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value["ID_sede"] . '</td>';
                                    echo '<td>' . $value["nombre_sede"] . '</td>';
                                    echo '<td>' . $value["direccion"] . '</td>';
                                    if ($value["estado"] == "Activo") {
                                        echo  '<td><button class="btn btn-success btn-sm btnActivarSede" idSedeCambiarEstado="'.$value["ID_sede"].'"  nuevoEstadosede="Inactivo">Activo</button></td>';
                                    } else {
                                        echo  '<td><button class="btn btn-danger btn-sm btnActivarSede" idSedeCambiarEstado="'.$value["ID_sede"].'"  nuevoEstadosede="Activo">Inactivo</button></td>';
                                    }
                                    echo '<td><button class="btn btn-xs btn-primary btnEditarSede" idsede="' . $value["ID_sede"] . '" data-toggle="modal" data-target="#modalEditarSede"><i class="fas fa-pencil-alt"></i></button></td>';
                                    echo '</tr>';
                                };

                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<!-- ========== 
 modal agregar sede
 =============== -->

 <div class="modal fade" id="modalAgregarSede">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Sede de formación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST">
                <div class="modal-body">
                    <label for="nombreSede">Nombre de la Sede</label>
                    <input type="text" class="form-control" name="nombreSede" required>
                    <label for="DireccionSede" class="mt-2">Direccion</label>
                    <input type="text" class="form-control" name="DireccionSede" required>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php

                $crearSede = new ControladorSedes();
                $crearSede->ctrCrearSedes();


                ?>



            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

    <!-- ==========
 modal editar sede
 =============== -->

 <div class="modal fade" id="modalEditarSede">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Sede de formación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="editIdSede" name="editIdSede" required>

                    <label for="nombreSede">Nombre de la Sede</label>
                    <input type="text" class="form-control" id="editnombreSede" name="editnombreSede" required>
                    <label for="direccionSede">direccion</label>
                    <input type="text" class="form-control" id="editDireccionSede" name="editDireccionSede" required>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php
                    $editarsede = new ControladorSedes();
                    $editarsede->ctrEditarsede();

                ?>


            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>