<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tipoProducto->nombre }}</p>
</div>

<!-- Saldo Field -->
<div class="col-sm-12">
    {!! Form::label('saldo', 'Saldo:') !!}
    <p>{{ $tipoProducto->saldo }}</p>
</div>

<!-- Montototal Field -->
<div class="col-sm-12">
    {!! Form::label('montoTotal', 'Montototal:') !!}
    <p>{{ $tipoProducto->montoTotal }}</p>
</div>

<!-- Plazo Field -->
<div class="col-sm-12">
    {!! Form::label('plazo', 'Plazo:') !!}
    <p>{{ $tipoProducto->plazo }}</p>
</div>

<!-- Tasaintereses Field -->
<div class="col-sm-12">
    {!! Form::label('tasaIntereses', 'Tasaintereses:') !!}
    <p>{{ $tipoProducto->tasaIntereses }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $tipoProducto->descripcion }}</p>
</div>

