@extends('layouts.app')
{{-- @include('processing_sessions.fields') --}}

@section('content')
{{-- @include('processing_sessions.create')
@include('processing_sessions.fields') --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Processing Session</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'processingSessions.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('processing_sessions.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('processingSessions.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
