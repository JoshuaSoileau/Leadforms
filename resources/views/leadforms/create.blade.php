@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Forms</div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'forms')) !!}
                        <div class="form-group">
                            {{ Form::label('title', 'Form Title (only visible to you)') }}
                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
