<div class="table-responsive">
    <table class="table" id="contratos-table">
        <thead>
        <tr>
        <th>Descripcion</th>
        <th>Idcliente</th>
        <th>Usuario</th>
        <th>Idproducto</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $test = -1; ?>
            
        @foreach($contratos as $contrato)
            <tr>
                <?php
                $test = $test+1;
                ?>
            <td>{{ $contrato->descripcion }}</td>
            {{-- <td>{{ $contrato->idCliente }}</td> --}}
            <td>{{ $cliente[$test]->nombres }}</td>
            {{-- <td>{{ $contrato->usuario }}</td> --}}
            <td>{{ $prueba[$test]->name }}</td>
            {{-- <td>{{ $contrato->idProducto }}</td> --}}
            <td>{{ $producto[$test]->descripcion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['contratos.destroy', $contrato->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contratos.show', [$contrato->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('contratos.edit', [$contrato->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
