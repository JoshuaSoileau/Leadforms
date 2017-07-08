@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a Form</div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'leadforms')) !!}
                        <div class="form-group">
                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Form Title (only visible to you)')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('header', Input::old('header'), array('class' => 'form-control', 'placeholder' => 'Header')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('subheader', Input::old('subheader'), array('class' => 'form-control', 'placeholder' => 'Sub Header')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('form_fields', Input::old('form_fields'), array('class' => 'form-control', 'placeholder' => 'Form Fields')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('button_text', Input::old('header'), array('class' => 'form-control', 'placeholder' => 'Button Text')) }}
                        </div>
                        {{ Form::submit('Create Form', array('class' => 'btn btn-primary')) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
