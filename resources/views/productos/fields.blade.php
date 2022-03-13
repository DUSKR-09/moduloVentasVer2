<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoprod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoProd', 'Tipoprod:') !!}
    {{-- {!! Form::number('tipoProd', null, ['class' => 'form-control']) !!} --}}

    <select name = tipoProd>
        {{-- <option value="default">prueba</option> --}}
        @if($edit == 1){
            <option value="{{$tprod->id}}">{{$tprod->nombre}}</option>
            
                @foreach ($tipoProd as $tProds)
                @if($tprod->id != $tProds->id){
                    <option value="{{$tProds->id}}">{{$tProds->nombre}}</option>
                }
                @endif
                @endforeach
            }
            
        @else{
            @foreach ($tipoProd as $tProds)
            
            <option value="{{$tProds->id}}">{{$tProds->nombre}}</option>
            @endforeach
            }
        @endif
    </select>
</div>