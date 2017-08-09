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
    $.ajaxSetup(
    {
        headers:
        {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });

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
     $('#numero_documento').keyup(function(event) {
        $numero_documento = $(this).val();
        $.get('/documentoinstructorajax', {numero_documento: $numero_documento}, function(data, textStatus, xhr) {
            $('#docinstructor').html(data);
        });
    });


    // $('#hnombre_ambiente').keyup(function(event) {
    //     $('.pagination').hide();
    //     $nombre_ambiente = $(this).val();
    //     $.get('/findclassroomtbl', {nombre_ambiente: $nombre_ambiente}, function(data, textStatus, xhr) {
    //         $('#tclassrooms').html(data);
    //     });
    // });

    // Guardar préstamo en el historial
    $('.save_entrie').click(function(event) {
        $formch = $('#form-request');
        $sval = $formch.find('select').val();

        if($sval > 0) {
            $token          = $('#form-request').find('input[name=_token]').val();
            $classroom_id   = $('#form-request').find('#id').val();
            $instructor_id  = $('#form-request').find('select[name=instructor_id]').val();
            $borrowed_at    = $('#form-request').find('input[name=borrowed_at]').val();
            $.post('/save_historical_record', {_token: $token, instructor_id: $instructor_id, classroom_id: $classroom_id, borrowed_at: $borrowed_at}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        } else {
            event.preventDefault();
        }
    });

    $('.modify_entrie').click(function(event) {
        $formmh = $('#form-request');
        $tval = $formmh.find('textarea').val();
        if ($tval != "") {
            $borrowed_at = $('#form-delivery').find('input[name=borrowed_at]').val();

            $token = $('#form-delivery').find('input[name=_token]').val();
            $delivered_at = $('#form-delivery').find('input[name=delivered_at]').val();
            $novedad = $('#form-delivery').find('textarea[name=novedad]').val();
            $.post('/modify_historical_record/'+$borrowed_at, {_token: $token, delivered_at: $delivered_at, novedad: $novedad}, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });
        } else {
            event.preventDefault();
        }
    });

    $('.big-content').on('click', '.clr-empty', function (e) {
        e.preventDefault();
        $forme = $('#form-request');
        $fid  = $(this).attr('data-id');

        $('#id').attr('value', $fid);

        // Construct the URL dynamically.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";

        $('#form-request').attr('action', url + 'classroom_request/' + $fid + '/approved');
        $('#confirm').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-request', function(event) {
            $sval = $forme.find('select').val();
            if($sval > 0) {
                $forme.submit();
            }
            event.preventDefault();
        });
    });

    $('.big-content').on('click', '.clr-borrowed', function (e) {
        e.preventDefault();
        $formd = $('#form-delivery');
        $fid  = $(this).attr('data-id');
        $fborrowed  = $(this).attr('data-borrowed');
        //
        $('#id-clrdelivery').attr('value', $fid);
        $('#borrowed-clrdelivery').attr('value', $fborrowed);
        //
        // Construct the URL dynamically.
        var url = window.location.href.split("/");
        url = url[0] + "//" + url[2] + "/";
        //
        $($formd).attr('action', url + 'classroom_delivery/' + $fid + '/approved');
        $('#delivery').modal({
            backdrop: 'static',
            keyboard: false
        })
        .on('click', '#submit-delivery', function(event) {
            $tval = $formd.find('textarea[name=novedad]').val();
            if($tval != "") {
                $formd.submit();
            }
            event.preventDefault();
        });
    });
    $('.modal').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input[name=id], textarea[name=novedad], select")
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
