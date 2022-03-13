<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saldo', 'Saldo:') !!}
    {!! Form::number('saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Montototal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('montoTotal', 'Montototal:') !!}
    {!! Form::number('montoTotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Plazo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazo', 'Plazo:') !!}
    {!! Form::text('plazo', null, ['class' => 'form-control','id'=>'plazo']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#plazo').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tasaintereses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tasaIntereses', 'Tasaintereses:') !!}
    {!! Form::number('tasaIntereses', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>