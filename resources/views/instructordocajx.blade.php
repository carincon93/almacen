@foreach($query as $ins)
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
</div>
<input value="{{ $ins-> id}}" name="instructor_id" class="hidden">
@endforeach
