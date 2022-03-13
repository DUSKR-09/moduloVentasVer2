<div class="table-responsive">
    <table class="table" id="processingSessions-table">
        <thead>
        <tr>
            <th>Fechatentativa</th>
        <th>Fechacontacto</th>
        <th>Usuario</th>
        <th>Descripacuerdo</th>
        <th>Idcliente</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $test = -1; ?>
        @foreach($processingSessions as $processingSession)
            <tr>
                <td>{{ $processingSession->fechaTentativa }}</td>
            <td>{{ $processingSession->fechaContacto }}</td>
            <?php
                $test = $test+1;
                ?>
                <td>{{ $prueba[$test]->name }}</td>
            <td>{{ $processingSession->descripAcuerdo }}</td>
            <td>{{ $cliente[$test]->nombres }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['processingSessions.destroy', $processingSession->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('processingSessions.show', [$processingSession->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('processingSessions.edit', [$processingSession->id]) }}"
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
