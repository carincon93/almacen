<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
@foreach($query as $ins)
@if($ins->disponibilidad == "disponible")
<input value="{{ $ins-> id}}" name="instructor_id" class="hidden">
<div class="panel panel-ins">
    <div class="row">
        <div class="col-md-8">
            <h4>Nombre Instructor</h4>
            <p class="text-capitalize h5">{{ $ins->nombre.' '.$ins->apellidos }}</p>
            <h4>Área / Especialidad</h4>
            <p class="h5">{{ $ins->area }}</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset($ins->imagen) }}" alt="" class="img-responsive">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8"> 
            <h4>Fichas</h4>
            <select name="classgroup_id" class="form-control select">
                <option value="">Seleccione una ficha...</option>
                @foreach($ficha as $fi)
                <option value="{{ $fi->id }}">{{ $fi->id_ficha.' '.$fi->nombre_ficha }}</option>
                @endforeach
            </select>
            <span id="mensaje" class="help-block" style="color:#a94442"></span>  
        </div>         
    </div>
</div>

@else
<h3>Este instructor ya tiene un ambiente asignado: <br>
{{ $ins->classroom->nombre_ambiente }}
</h3>
@endif
@endforeach
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>

