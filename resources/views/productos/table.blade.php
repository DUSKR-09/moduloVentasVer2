<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
        <tr>
            <th>Descripcion</th>
        <th>Tipoprod</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $test = -1; ?>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->descripcion }}</td>
            {{-- <td>{{ $producto->tipoProd }}</td> --}}
            <?php
                $test = $test+1;
                ?>
                <td>{{ $prueba[$test]->nombre }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productos.edit', [$producto->id]) }}"
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
