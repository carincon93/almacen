function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
$(document).ready(function() {

    var bodyHeight = $('body').height();
    $('.right-content').css('height', bodyHeight);


    $('#wnombre_ambiente').keyup(function(event) {
        $nombre_ambiente = $(this).val();
        $.get('/findclassroom', {nombre_ambiente: $nombre_ambiente}, function(data, textStatus, xhr) {
            $('#classroom-section').html(data);
        });
    });
    //
    // $('#hnombre_instructor').keyup(function(event) {
    //     $('.pagination').hide();
    //     $nombre_instructor = $(this).val();
    //     $.get('/findinstructor', {nombre_instructor: $nombre_instructor}, function(data, textStatus, xhr) {
    //         $('#tinstructors').html(data);
    //     });
    // });

    // Numero documento instructor Ajax
    //  $('body').on('keyup', '#numero_documento',function(event) {
    //     $numero_documento = $(this).val();
    //     $.get('/documentoinstructorajax', {numero_documento: $numero_documento}, function(data, textStatus, xhr) {
    //         // $('#docInstructor').val(data);
    //         var datos = data,
    //             id = datos.split(';')[0],
    //             nombre = datos.split(';')[1];
    //             $('#idInstructor').val(id);
    //             $('#nomInstructor').val(nombre);
    //     });
    // });

    var request = null;
    function searchByDoc(docVal) {
        if (request != null) request.abort();

        request = $.ajax({
            url: '/documentoinstructorajax',
            type: 'GET',
            dataType: 'text',
            data: { numero_documento: docVal },
            success: function(msg) {
                var datos = msg,
                    id = datos.split(';')[0],
                    nombre = datos.split(';')[1];
                    $('#idInstructor').val(id);
                    $('#nomInstructor').val(nombre);
            }
        });
    }

    $('#numero_documento').keyup(function(event) {
        searchByDoc(this.value);
    });


    // $('#hnombre_ambiente').keyup(function(event) {
    //     $('.pagination').hide();
    //     $nombre_ambiente = $(this).val();
    //     $.get('/findclassroomtbl', {nombre_ambiente: $nombre_ambiente}, function(data, textStatus, xhr) {
    //         $('#tclassrooms').html(data);
    //     });
    // });

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
            $idInstructor = $forme.find('input[id=nomInstructor]').val();
            if($idInstructor != '') {
                save_historical();
                $forme.submit();
            }
            event.preventDefault();
        });
    });

    // Guardar préstamo en el historial
    function save_historical() {
        $formSoliPre = $('#form-solicitud');
        $idInstructorVal = $('#idInstructor').val();

        if($idInstructorVal > 0) {
            $.ajaxSetup({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $token          = $formSoliPre.find('input[name=_token]').val();
            $classroom_id   = $formSoliPre.find('#id_clr').val();
            // $instructor_id  = $idInstructorVal;
            $prestado_en    = $formSoliPre.find('input[name=prestado_en]').val();
            $.post('/save_historical_record', {_token: $token, instructor_id: $idInstructorVal, classroom_id: $classroom_id, prestado_en: $prestado_en}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        } else {
            event.preventDefault();
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
            $novedad = $formd.find('textarea[name=novedad]').val();
            if($novedad != "") {
                modify_historical();
                $formd.submit();
            }
            event.preventDefault();
        });
    });
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
        } else {
            event.preventDefault();
        }
    }

    $('.modal').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input[name=id], input[type=search], input[id=nomInstructor],textarea[name=novedad], select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end();
    });


    // Eliminar Instructor
    $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
        e.preventDefault();
        var $formdi = $(this);
        $('#confirm').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-ins', function() {
                $formdi.submit();
        });
    });

    // Eliminar Ambiente
    $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
        e.preventDefault();
        var $formdc = $(this);
        $('#confirm').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-clr', function() {
                $formdc.submit();
        });
    });

});
