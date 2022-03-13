<!-- Fechanac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNac', 'Fechanac:') !!}
    {!! Form::text('fechaNac', null, ['class' => 'form-control','id'=>'fechaNac']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaNac').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonoalt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefonoAlt', 'Telefonoalt:') !!}
    {!! Form::number('telefonoAlt', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido1', 'Apellido1:') !!}
    {!! Form::text('apellido1', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido2', 'Apellido2:') !!}
    {!! Form::text('apellido2', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', ['M' => 'M', 'F' => 'F'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {{-- {!! Form::radio('estado', "", null, ['class' => 'form-check-input']) !!} --}}
    {!! Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control custom-select']) !!} 
</label>

    

</div>
