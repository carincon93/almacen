$(document).ready(function() {

    $('#solicitar_prestamo').on('shown.bs.modal', function() {
	  	$(this).find('[autofocus]').focus();
	  	$('.modal-body').click(function(event) {
	  		$(this).find('[autofocus]').focus();
	  	});
	});

    $('#wnombre_ambiente').keyup(function(event) {
        $nombre_ambiente = $(this).val();
        $.get('/findclassroom', {nombre_ambiente: $nombre_ambiente}, function(data, textStatus, xhr) {
            $('#classroom-section').html(data);
        });
    });

    // Numero documento instructor Ajax
    var request = null;
     $('body').on('keyup', '#numero_documento',function(event) {
        $numero_documento = $(this).val();
        console.log($numero_documento);
        if ($numero_documento > 0) {
            if (request != null) request.abort();

            request = $.get('/documentoinstructorajax', {numero_documento: $numero_documento}, function(data, textStatus, xhr) {
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
        $forme = $('#form-solicitud');

        // Set Titulo modal con nombre de ambiente
        $nombClr = $(this).find('h5').attr('data-nombreClr');
        $('.modal-title').text($nombClr);

        // Set ID de ambiente
        $idClr  = $(this).attr('data-idClr');
        $('#id_clr').attr('value', $idClr);

        // Set url del form action.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";
        $('#form-solicitud').attr('action', url + 'solicitar_prestamo/' + $idClr + '/aprobado');

        $('#solicitar_prestamo').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-solicitud', function(event) {
            event.preventDefault();

            $idInstructor = $forme.find('input[name=instructor_id]').val();
            if($idInstructor > 0) {
                anadir_disponibilidadIns();
                save_historical();
                setTimeout(function() {
                    $forme.submit();
                }, 1000);
            }
        });
    });

    function anadir_disponibilidadIns() {
        $formSoliPre = $('#form-solicitud');
        $idInstructor = $('input[name=instructor_id]').val();
        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $token          = $formSoliPre.find('input[name=_token]').val();
        $.post('/disponibilidad_instructor/'+$idInstructor, {_token: $token}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    }
    // Guardar préstamo en el historial
    function save_historical() {
        $formSoliPre = $('#form-solicitud');
        $idInstructorVal = $('input[name=instructor_id]').val();

        if($idInstructorVal > 0) {
            $.ajaxSetup({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $token          = $formSoliPre.find('input[name=_token]').val();
            $classroom_id   = $formSoliPre.find('#id_clr').val();
            $prestado_en    = $formSoliPre.find('input[name=prestado_en]').val();

            $.post('/save_historical_record', {_token: $token, instructor_id: $idInstructorVal, classroom_id: $classroom_id, prestado_en: $prestado_en}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        }
    }


    $('.big-content').on('click', '.clr-entregar', function(e) {
        e.preventDefault();
        // Formulario de entrega
        $formd = $('#form-entrega');

        // Set Titulo modal con nombre de ambiente
        $nombClr = $(this).find('h5').attr('data-nombreClr');
        $('.modal-title').text($nombClr);

        $eIdClr = $(this).attr('data-idclr');
        $('#id-clrEntrega').attr('value', $eIdClr);
        //
        $fechaEntrega  = $(this).attr('data-entregar');
        $('#prestado_en').attr('value', $fechaEntrega);

        $idIns  = $(this).attr('data-idIns');
        $formd.find('input[name=instructor_id]').attr('value', $idIns);


        // Construct the URL dynamically.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";
        //
        $($formd).attr('action', url + 'entregar_ambiente/' + $eIdClr + '/aprobado');
        $('#entregar_ambiente').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-entrega', function(event) {
            event.preventDefault();
            $novedad = $formd.find('textarea[name=novedad]').val();
            if($novedad != "") {
                modificar_disponibilidadIns();
                modify_historical();
                setTimeout(function() {
                    $formd.submit();
                }, 1000);
            }
        });
    });
    function modificar_disponibilidadIns() {
        $formmh = $('#form-entrega');
        $idInstructor = $('input[name=instructor_id]').val();
        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $token          = $formmh.find('input[name=_token]').val();
        $.post('/modificar_disponibilidad_ins/'+$idInstructor, {_token: $token}, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    }
    function modify_historical() {
        $formmh = $('#form-entrega');
        $novedad = $formmh.find('textarea').val();
        $prestado_en = $formmh.find('input[name=prestado_en]').val();
        if ($novedad != "") {
            $.ajaxSetup({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $token = $formmh.find('input[name=_token]').val();
            $entregado_en = $formmh.find('input[name=entregado_en]').val();

            $.post('/modify_historical_record/'+$prestado_en, {_token: $token, entregado_en: $entregado_en, novedad: $novedad}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        }
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
        var $formdi = $(this);
        var $nombIns = $formdi.find('.btn-delete').attr('data-nombre');
        $('body').find('.modal-title').text('Nombre Instructor: '+$nombIns);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-ins', function() {
                $formdi.submit();
        });
    });

    // Eliminar Ambiente
    $('table[data-form="deleteForm"]').on('click', '.form-delete-clr', function(e){
        e.preventDefault();
        var $formdc = $(this);
        var $nombClr = $formdc.find('.btn-delete').attr('data-nombre');
        $('body').find('.modal-title').text('Nombre Ambiente: '+$nombClr);
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-clr', function() {
                $formdc.submit();
        });
    });

});
