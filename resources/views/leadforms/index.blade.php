@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Forms</div>

                <div class="panel-body">
                    <div class="panel panel-body panel-default col-sm-3 text-center">
                        <a href="{{ URL::to('leadforms/create') }}">New Form</a>
                    </div>
                    @foreach($leadforms as $key => $value)
                        <div class="panel panel-body panel-default col-sm-3 text-center">
                            {{ $value->title }}
                            <a href="{{ URL::to('leadforms/' . $value->id . '/show') }}">View</a>
                            <a href="{{ URL::to('leadforms/' . $value->id . '/edit') }}">Edit</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
