$(document).ready(function() {

    $('#solicitar_prestamo').on('shown.bs.modal', function() {
	  	$(this).find('[autofocus]').focus();
	  	$('.modal-body').click(function(event) {
	  		$(this).find('[autofocus]').focus();
	  	});
	});

    // Numero documento instructor Ajax
    var request = null;
     $('body').on('keyup', '#numero_documento',function(event) {
        var numero_documento = $(this).val();
        if (numero_documento > 0) {
            if (request != null) request.abort();

            request = $.get('/documentoinstructorajax', {numero_documento: numero_documento}, function(data, textStatus, xhr) {
                $('#asd').html(data);
            });
        } else {
            setTimeout(function() {
                $('#asd').children().remove();
            }, 500);
        }
    });

    $('.big-content').on('click', '.clr-disponible', function(e) {
        e.preventDefault();
        var nombClr = $(this).find('h5').attr('data-nombreClr'),
            idClr  = $(this).attr('data-idClr');

        // Set Titulo modal con nombre de ambiente
        $('.modal-title').text(nombClr);
        // Set ID de ambiente
        $('#id_clr').attr('value', idClr);

        // Set url del form action.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";
        $('#form-solicitud').attr('action', url + 'solicitar_prestamo/' + idClr + '/aprobado');

        $('#solicitar_prestamo').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-solicitud', function(event) {
            event.preventDefault();
            var formSolicitud = $('#form-solicitud');
            idInstructor = formSolicitud.find('input[name=instructor_id]').val();
            if(idInstructor > 0) {
                anadir_disponibilidadIns();
                save_history_record();
                setTimeout(function() {
                    formSolicitud.submit();
                }, 1000);
            }
        });
    });

    // Guardar préstamo en el historial
    function save_history_record() {
        var formS   = $('#form-solicitud'),
            idInstructorVal = $('input[name=instructor_id]').val(),
            token = formS.find('input[name=_token]').val();

        if(idInstructorVal > 0) {
            $.ajaxSetup({
                headers:
                {
                    'X-CSRF-Token': token
                }
            });
            classroom_id  = formS.find('#id_clr').val();
            prestado_en   = formS.find('input[name=prestado_en]').val();

            $.post('/save_history_record', {_token: token, instructor_id: idInstructorVal, classroom_id: classroom_id, prestado_en: prestado_en}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        }
    }
    function anadir_disponibilidadIns() {
        var formSolicitud = $('#form-solicitud'),
            idInstructor  = $('input[name=instructor_id]').val(),
            token = formSolicitud.find('input[name=_token]').val();
        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $.post('/disponibilidad_instructor/' + idInstructor, {_token: token}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    }


    $('.big-content').on('click', '.clr-entregar', function(e) {
        e.preventDefault();
        // Formulario de entrega
        var formPrestamo = $('#form-entrega'),
            nombClr      = $(this).find('h5').attr('data-nombreClr'),
            idClassroom  = $(this).attr('data-idclr'),
            fechaEntrega = $(this).attr('data-entregar'),
            idIns  = $(this).attr('data-idIns');

        // Set Titulo modal con nombre de ambiente
        $('.modal-title').text(nombClr);

        $('#id-clrEntrega').attr('value', idClassroom);
        //
        $('#prestado_en').attr('value', fechaEntrega);

        formPrestamo.find('input[name=instructor_id]').attr('value', idIns);


        // Construct the URL dynamically.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";
        //
        $(formPrestamo).attr('action', url + 'entregar_ambiente/' + idClassroom + '/aprobado');
        $('#entregar_ambiente').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-entrega', function(event) {
            event.preventDefault();
            modificar_disponibilidadIns();
            update_history_record();
            setTimeout(function() {
                formPrestamo.submit();
            }, 1000);
        });
    });
    function update_history_record() {
        var formPrestamo = $('#form-entrega'),
            novedad     = formPrestamo.find('textarea').val(),
            prestado_en = formPrestamo.find('input[name=prestado_en]').val(),
            token       = formPrestamo.find('input[name=_token]').val();

        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': token
            }
        });
        entregado_en = formPrestamo.find('input[name=entregado_en]').val();

        $.post('/update_history_record/' + prestado_en, {_token: token, entregado_en: entregado_en, novedad: novedad}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });

    }
    function modificar_disponibilidadIns() {
        formPrestamo = $('#form-entrega');
        idInstructor = $('input[name=instructor_id]').val();
        token        = formPrestamo.find('input[name=_token]').val();
        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': token
            }
        });
        $.post('/modificar_disponibilidad_ins/' + idInstructor, {_token: token}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    }

    $('.modal').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input[name=id], input[type=search], input[id=nomInstructor],textarea[name=novedad], select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end()
            .find("#asd")
                .children()
                .remove();
    });


    // Eliminar Instructor
    $('table[data-form="deleteForm"]').on('click', '.form-delete-ins', function(e){
        e.preventDefault();
        var formDelIns = $(this),
            nombIns    = formDelIns.find('.btn-delete').attr('data-nombre');
        $('body').find('.modal-title').text('Nombre Instructor: ' + nombIns);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-ins', function() {
                formDelIns.submit();
        });
    });

    // Eliminar Ambiente
    $('table[data-form="deleteForm"]').on('click', '.form-delete-clr', function(e){
        e.preventDefault();
        var formDelClassr  = $(this),
            nombClr = formDelClassr.find('.btn-delete').attr('data-nombre');
        $('body').find('.modal-title').text('Nombre Ambiente: '+ nombClr);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-clr', function() {
                formDelClassr.submit();
        });
    });
    // Eliminar Ficha de grupo
    $('table[data-form="deleteForm"]').on('click', '.form-delete-ficha', function(e){
        e.preventDefault();
        var formDelFicha = $(this),
            nomFicha     = formDelFicha.find('.btn-delete').attr('data-nombre');

        $('body').find('.modal-title').text('Nombre Ficha: ' + nomFicha);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-ficha', function() {
                formDelFicha.submit();
        });
    });
    // Eliminar Admin
    $('table[data-form="deleteForm"]').on('click', '.form-delete-admin', function(e){
        e.preventDefault();
        var formDelAdm = $(this),
            nomUser    = formDelAdm.find('.btn-delete').attr('data-nombre');
        $('body').find('.modal-title').text('Nombre Admin: ' + nomUser);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-ad', function() {
                formDelAdm.submit();
        });
    });

    $('#wnombre_ambiente').keyup(function(event) {
        var nombre_ambiente = $(this).val();
        $.get('/findclassroom', {nombre_ambiente: nombre_ambiente}, function(data, textStatus, xhr) {
            $('#classroom-section').html(data);
        });
    });
});
