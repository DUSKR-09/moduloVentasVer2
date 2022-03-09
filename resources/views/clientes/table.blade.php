<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
        <tr>
            <th>Fechanac</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Telefonoalt</th>
        <th>Nombres</th>
        <th>Apellido1</th>
        <th>Apellido2</th>
        <th>Sexo</th>
        <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{{ $clientes->fechaNac }}</td>
            <td>{{ $clientes->email }}</td>
            <td>{{ $clientes->telefono }}</td>
            <td>{{ $clientes->telefonoAlt }}</td>
            <td>{{ $clientes->nombres }}</td>
            <td>{{ $clientes->apellido1 }}</td>
            <td>{{ $clientes->apellido2 }}</td>
            <td>{{ $clientes->sexo }}</td>
            <td>{{ $clientes->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$clientes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientes.edit', [$clientes->id]) }}"
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
