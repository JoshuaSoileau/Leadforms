@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit {!! $currentform->title !!}</div>
                    <div class="panel-body">
                        {!! Form::model($currentform, array('route' => array('leadforms.update', $currentform->id), 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {{ Form::label('title', 'Form Title (only visible to you)') }}
                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Form Title (only visible to you)')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('header', 'Header') }}
                            {{ Form::text('header', Input::old('header'), array('class' => 'form-control', 'placeholder' => 'Header')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subheader', 'Sub Header') }}
                            {{ Form::textarea('subheader', Input::old('subheader'), array('class' => 'form-control', 'placeholder' => 'Sub Header')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('form_fields', 'Form Fields') }}
                            {{ Form::text('form_fields', Input::old('form_fields'), array('class' => 'form-control', 'placeholder' => 'Form Fields')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('button_text', 'Button Text') }}
                            {{ Form::text('button_text', Input::old('header'), array('class' => 'form-control', 'placeholder' => 'Button Text')) }}
                        </div>
                        {{ Form::submit('Save Changes', array('class' => 'btn btn-primary btn-lg')) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
