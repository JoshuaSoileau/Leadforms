@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Forms</div>

                <div class="panel-body">
                    <div class="panel panel-body panel-default col-sm-3 text-center">
                        <a href="{{ URL::to('forms/create') }}">New Form</a>
                    </div>
                    @foreach($forms as $key => $value)
                        <div class="panel panel-body panel-default col-sm-3 text-center">
                            <a href="{{ URL::to('forms/' . $value->id . 'create') }}">{{ $value->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
