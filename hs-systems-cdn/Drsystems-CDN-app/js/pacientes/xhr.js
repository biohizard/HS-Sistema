
/*##### C #####*/
//------------------------------------------------->
function pacientesNewJqxhr(){
    console.log('Run: Paciente New Xhr')
        
    var settings = {
        "async"       : true,
        "crossDomain" : true,
        "url"         : urlBaseApi + 'pacientes/pacientesNew',
        "method"      : "POST",
        "headers": {
        "xr8-api-key" : "ewf45r4435trge",
        "content-type" : "application/x-www-form-urlencoded",
        "cache-control": "no-cache"
        },"data": {
        "user"        : $("#nuusername").val(),
        "permissions" : 'pacientes',
        "email"       : $("#nuemail").val(),
        "password"    : $("#nupassword").val(),
        "first"       : $("#nufirstName").val(),
        "second"      : $("#nulastName").val(),
        "tel"         : $("#nuPhone").val(),
        "puesto"      : 'dr'
        }
    }

    var jqxhr = $.ajax(settings)
        .done(function (data){
            console.info('Run: close modal new xhr paciente')
            var miModal = document.getElementById('newModal');
            var modalInstance = bootstrap.Modal.getInstance(miModal); 
            if (!modalInstance) {
            modalInstance = new bootstrap.Modal(miModal);
            }
            modalInstance.hide();   
        })
        .fail(function(jqXHR,textStatus,errorThrown){
            console.info('Run: error alluser')
            xhrError(jqXHR, textStatus , errorThrown);
        })
        .always(function(){
            pacientesViewJqxhr()
            console.info('Run: Loadpacientes xhr')        
        })

    console.warn(jqxhr)
}
//------------------------------------------------->

/*##### R #####*/
//------------------------------------------------->
function pacientesViewJqxhr(){
    console.log('Run: Paciente View Xhr')
    $("#allUser").fadeOut(1000).empty()
    modalLoadShow()
          
    var settings = {
        url: urlBaseApi + "pacientes/pacientesView",
        method: "GET",
        timeout: 0,
        headers: {
        Authorization: "Basic cm9vdDphZG1pbg==",
        },
    };
    
    var jqxhr = $.getJSON(settings)
        .done(function (data){  
            //--->
                if(data == "null"){
                    $("#allUser").append("<tr><td>no hay pacientes</td></tr>")
                }else{
                    $.each(data, function (i, val){

                        if(val.user == "admin"){
                            a = "<td></td>" 
                        }else{
                            a = "<td><input type=\"checkbox\" name=\"\" value=\"" + val.id_advance + "\"></td>" 
                        }
                            $("#allUser")
                            .append(
                                "<tr>" +
                                "<td class=\"" + val.id_advance + " id\">" + val.id           + "</td>" +
                                "<td ><span class=\"" + val.id_advance + " first\">" + val.firstname + "</span> <span class=\"" + val.id_advance + " second\">" + val.secondname + "</span></td>" +
                                "<td class=\"" + val.id_advance + " email\">" + val.email     + "</td>" +
                                "<td class=\"" + val.id_advance + " nophone\">" + val.telefono+ "</td>" +
                                a +
                                "</tr>"
                            )

                    })
                }
            //--->
        })
        .fail(function (jqXHR, textStatus, errorThrown){
            console.error("Run: error pacientes View Jqxhr");
            xhrError(jqXHR, textStatus, errorThrown);
        })
        .always(function (jqXHR, textStatus, errorThrown){
            modalLoadHide()
            $("#allUser").fadeIn(1000)
        })

    console.warn(jqxhr);
}
//------------------------------------------------->

/*##### U #####*/
//------------------------------------------------->
/*
function updatePacientesJqxhr(){
    console.log('Run: Paciente Update Xhr')
    var settings = {
        "async"       : true,
        "crossDomain" : true,
        "url"         : urlBaseApi + 'pacientes/pacientesUpdate',
        "method"      : "POST",
        "headers": {
        "xr8-api-key" : "ewf45r4435trge",
        "content-type" : "application/x-www-form-urlencoded",
        "cache-control": "no-cache"
        },
        "data": {
        "id_advance"  : $("#id_advance").val(),
        "permissions" : 'paciente',
        "email"       : $("#uuemail").val(),
        "first"       : $("#uufirstName").val(),
        "second"      : $("#uulastName").val(),
        "tel"         : $("#uuPhone").val(),
        "puesto"      : 'drpacientes'
        }
    }

    var jqxhr = $.ajax(settings)
        .done(function (data){
            console.log('Run: update modal closed')
            var updateModal = document.getElementById('updateModal');
            var modalInstance = bootstrap.Modal.getInstance(updateModal)
            if (!modalInstance) {
            modalInstance = new bootstrap.Modal(updateModal);
            }
            modalInstance.hide();       
        })
        .fail(function(jqXHR,textStatus,errorThrown){
            console.info('Run: error alluser')
            xhrError(jqXHR, textStatus , errorThrown);
        })
        .always(function(){
            pacientesViewJqxhr()
            $("#btnUpdate,#btnDelete").prop('disabled',true)
            console.info('Run: Loadpacientes xhr')        
        })
    
    console.warn(jqxhr)
}
*/
function updatePacientesJqxhr() {
    console.log('Run: Paciente Update Xhr'); // Mensaje en consola para indicar el inicio de la función

    // URL de la API donde se enviarán los datos
    const url = urlBaseApi + 'pacientes/pacientesUpdate';

    // Configuración de los encabezados de la petición HTTP
    const headers = {
        "xr8-api-key": "ewf45r4435trge", // Clave de autenticación de la API
        "Content-Type": "application/x-www-form-urlencoded", // Tipo de contenido de los datos enviados
        "Cache-Control": "no-cache" // Deshabilita la caché en la solicitud
    };

    // Datos a enviar en la solicitud AJAX, obtenidos de los campos del formulario
    const data = {
        "id_advance": $("#id_advance").val(), // ID del paciente
        "permissions": 'paciente', // Permiso asociado
        "email": $("#uuemail").val(), // Correo electrónico del paciente
        "first": $("#uufirstName").val(), // Nombre
        "second": $("#uulastName").val(), // Apellido
        "tel": $("#uuPhone").val(), // Teléfono
        "puesto": 'drpacientes' // Cargo o rol del paciente
    };

    // Realizamos la petición AJAX para actualizar el paciente
    $.ajax({
        url: url,      // URL de la API
        method: "POST", // Método HTTP POST
        headers: headers, // Encabezados configurados
        data: data // Datos enviados en el cuerpo de la solicitud
    })
    .then(response => {
        console.log('Run: update modal closed'); // Indica que la actualización fue exitosa

        // Obtener la referencia del modal de actualización
        const updateModal = document.getElementById('updateModal');

        // Obtener o crear la instancia del modal para cerrarlo correctamente
        const modalInstance = bootstrap.Modal.getOrCreateInstance(updateModal);
        modalInstance.hide(); // Cerrar el modal después de la actualización

        // Obtener la referencia del modal de actualización
        const updateModal = document.getElementById(viweLoading);

        // Obtener o crear la instancia del modal para cerrarlo correctamente
        const modalInstance = bootstrap.Modal.getOrCreateInstance(updateModal);
        modalInstance.hide(); // Cerrar el modal después de la actualización        
        
    })
    .catch((jqXHR, textStatus, errorThrown) => {
        console.info('Run: error alluser'); // Mensaje en consola si hay un error en la solicitud

        // Llamar a la función de manejo de errores con los detalles de la respuesta
        xhrError(jqXHR, textStatus, errorThrown);
    })
    .always(() => {
        // Volver a cargar la lista de pacientes después de la actualización
        pacientesViewJqxhr();

        // Deshabilitar los botones de actualización y eliminación para evitar acciones repetidas
        $("#btnUpdate, #btnDelete").prop('disabled', true);

        console.info('Run: Loadpacientes xhr'); // Mensaje en consola para indicar que se ha recargado la vista
    });
}

//------------------------------------------------->

/*##### D #####*/
//------------------------------------------------->
function pacientesDeleteJqxhr(){
    console.log('Run: Paciente Delete Xhr')
    var settings = {
        "async"       : true,
        "crossDomain" : true,
        "url"         : urlBaseApi + 'pacientes/pacientesDelete',
        "method"      : "POST",
        "headers": {
        "xr8-api-key" : "ewf45r4435trge",
        "content-type" : "application/x-www-form-urlencoded",
        "cache-control": "no-cache"
        },
        "data": {
        "id_advance"  : $("#id_advance").val()
        }
    }

    var jqxhr = $.ajax(settings)
        .done(function (data){
            console.log('Run: delete modal closed')
            var deleteModal = document.getElementById('deleteModal');
            var modalInstance = bootstrap.Modal.getInstance(deleteModal)
            if (!modalInstance) {
            modalInstance = new bootstrap.Modal(deleteModal);
            }
            modalInstance.hide();  
        })
        .fail(function(jqXHR,textStatus,errorThrown){
            console.info('Run: error alluser')
            xhrError(jqXHR, textStatus , errorThrown);
        })
        .always(function(){
            pacientesViewJqxhr()
            $("#btnUpdate,#btnDelete").prop('disabled',true)
            console.info('Run: Loadpacientes xhr')        
        })
    
    console.warn(jqxhr)
}
//------------------------------------------------->