<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCliente', 'Idcliente:') !!}
    {{-- {!! Form::number('idCliente', null, ['class' => 'form-control']) !!} --}}

    <select name = idCliente>
        @if($edit == 1){
            <option value="{{$cli->id}}">{{$cli->nombres}}</option>
            
                @foreach ($cliente as $clients)
                @if($cli->id != $clients->id){
                    <option value="{{$clients->id}}">{{$clients->nombres}}</option>
                }
                @endif
                @endforeach
            }
            
        @else{
            @foreach ($cliente as $clients)
            
            <option value="{{$clients->id}}">{{$clients->nombres}}</option>
            @endforeach
            }
        @endif
    </select>
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {{-- {!! Form::number('usuario', null, ['class' => 'form-control']) !!} --}}
    <input type="hidden" value="{{ Auth::user()->id }}" name = "usuario">
    <input type="text" value="{{ Auth::user()->name }}" disabled = True name = "Nombre de Usuario">
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    {{-- {!! Form::number('idProducto', null, ['class' => 'form-control']) !!} --}}

    <select name = idProducto>
        @if($edit == 1){
            <option value="{{$prod->id}}">{{$prod->descripcion}}</option>
            
                @foreach ($producto as $prods)
                @if($prod->id != $prods->id){
                    <option value="{{$prods->id}}">{{$prods->descripcion}}</option>
                }
                @endif
                @endforeach
            }
            
        @else{
            @foreach ($producto as $prods)
            
            <option value="{{$prods->id}}">{{$prods->descripcion}}</option>
            @endforeach
            }
        @endif
    </select>
</div>