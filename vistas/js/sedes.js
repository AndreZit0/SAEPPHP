// $('.btnEditarPrograma').click(function(){
$(document).on('click','.btnEditarSede', function(){

    let idSede = $(this).attr("idSede");
    console.log("id sede:", idSede);
    let datos = new FormData();
    datos.append("id_sede", idSede);
    $.ajax({
        url: "ajax/sedes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            $("#editnombreSede").val(respuesta["nombre_sede"]);
            $("#editDirecccionSede").val(respuesta["direccion"]);
            $("#editIdSede").val(respuesta["ID_sede"]);

        }//funcion success


    })//fn ajax


})//fin click btnEditarPrograma


$(document).on('click','.btnActivarSede', function(){

    let idProgramaActivar = $(this).attr("idSedeCambiarEstado");
    let nuevoEstado = $(this).attr("nuevoEstadosede");
    // console.log("programa capturado:", idProgramaActivar);
    // console.log("programa estado nuevo:", nuevoEstado);
    let datos = new FormData();
    datos.append("id_cambiarEstado",idSedeActivar);
    datos.append("estadoSede",nuevoEstado);

    $.ajax({
        url: "ajax/sedes.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta){
            console.log(respuesta);
        }
    })
    if (nuevoEstado == "Inactivo"){
        $(this).removeClass("btn-success");
        $(this).addClass("btn-danger");
        $(this).html("Inactivo");
        $(this).attr("nuevoEstadosede", "Activo");
    }else{
        $(this).removeClass("btn-danger");
        $(this).addClass("btn-success");
        $(this).html("Activo");
        $(this).attr("nuevoEstadosede", "Inactivo");      

    }


})//fin click btnActivarPrograma
