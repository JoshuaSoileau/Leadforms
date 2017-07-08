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
                            <a href="{{ URL::to('leadforms/' . $value->id . '/show') }}">{{ $value->title }}</a>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">. . .</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ URL::to('leadforms/' . $value->id . '/show') }}">View</a></li>
                                    <li><a href="{{ URL::to('leadforms/' . $value->id . '/edit') }}">Edit</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
