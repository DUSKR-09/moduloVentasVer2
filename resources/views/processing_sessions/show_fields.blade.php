<!-- Fechatentativa Field -->
<div class="col-sm-12">
    {!! Form::label('fechaTentativa', 'Fechatentativa:') !!}
    <p>{{ $processingSession->fechaTentativa }}</p>
</div>

<!-- Fechacontacto Field -->
<div class="col-sm-12">
    {!! Form::label('fechaContacto', 'Fechacontacto:') !!}
    <p>{{ $processingSession->fechaContacto }}</p>
</div>

<!-- Usuario Field -->
<div class="col-sm-12">
    {!! Form::label('usuario', 'Usuario:') !!}
    {{-- <p>{{ $prueba->name }}</p> --}}
{{--     <p>{{ $usuario->id }}</p> --}}
    <p>{{ $usuario->name }}</p>
</div>

<!-- Descripacuerdo Field -->
<div class="col-sm-12">
    {!! Form::label('descripAcuerdo', 'Descripacuerdo:') !!}
    <p>{{ $processingSession->descripAcuerdo }}</p>
</div>

<!-- Idcliente Field -->
<div class="col-sm-12">
    {!! Form::label('idCliente', 'Idcliente:') !!}
    <p>{{ $cliente->nombres }}</p>
</div>

