<div class="table-responsive">
    <table class="table" id="tipoProductos-table">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Saldo</th>
        <th>Montototal</th>
        <th>Plazo</th>
        <th>Tasaintereses</th>
        <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tipoProductos as $tipoProducto)
            <tr>
                <td>{{ $tipoProducto->nombre }}</td>
            <td>{{ $tipoProducto->saldo }}</td>
            <td>{{ $tipoProducto->montoTotal }}</td>
            <td>{{ $tipoProducto->plazo }}</td>
            <td>{{ $tipoProducto->tasaIntereses }}</td>
            <td>{{ $tipoProducto->descripcion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tipoProductos.destroy', $tipoProducto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoProductos.show', [$tipoProducto->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tipoProductos.edit', [$tipoProducto->id]) }}"
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
