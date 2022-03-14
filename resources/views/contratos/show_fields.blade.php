<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $contratos->descripcion }}</p>
</div>

<!-- Idcliente Field -->
<div class="col-sm-12">
    {!! Form::label('idCliente', 'Idcliente:') !!}
    <p>{{ $cliente->nombres }}</p>
</div>

<!-- Usuario Field -->
<div class="col-sm-12">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $usuario->name }}</p>
</div>

<!-- Idproducto Field -->
<div class="col-sm-12">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    <p>{{ $producto->descripcion }}</p>
</div>

