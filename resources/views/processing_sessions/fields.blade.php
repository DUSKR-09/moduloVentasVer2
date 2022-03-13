<!-- Fechatentativa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaTentativa', 'Fechatentativa:') !!}
    {!! Form::text('fechaTentativa', null, ['class' => 'form-control','id'=>'fechaTentativa']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaTentativa').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fechacontacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaContacto', 'Fechacontacto:') !!}
    {!! Form::text('fechaContacto', null, ['class' => 'form-control','id'=>'fechaContacto']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaContacto').datetimepicker({
            format: 'YYYY-MM-D',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {{-- {!! Form::number('usuario', null, ['class' => 'form-control']) !!} --}}
    <input type="hidden" value="{{ Auth::user()->id }}" name = "usuario">
    <input type="text" value="{{ Auth::user()->name }}" disabled = True name = "Nombre de Usuario">
</div>

<!-- Descripacuerdo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripAcuerdo', 'Descripacuerdo:') !!}
    {!! Form::textarea('descripAcuerdo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCliente', 'Idcliente:') !!}
    <select name = idCliente>
        {{-- <option value="default">prueba</option> --}}
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
    {{-- {!! Form::number('idCliente', null, ['class' => 'form-control']) !!} --}}
    {{-- {!! Form::select('cliente', [{{$cliente->id}} => {{@cliente->nombres}}, '0' => 'Inactivo'], null, ['class' => 'form-control custom-select']) !!} --}}
    {{-- {!! Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control custom-select']) !!} --}}
{{--     <p>{{ $cliente->nombres }}</p> --}}
{{--     @foreach ($cliente as $cli)
    {{ $cli->idCliente }}
    @endforeach --}}
{{--     @foreach ($cliente as $cli)
        <p>{{ $cli->apellido1 }}</p>
    @endforeach --}}
</div>