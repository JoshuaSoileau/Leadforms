@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $leadform->title !!}</div>

                <div class="panel-body">
                    @foreach(array_filter($leadform->toArray()) as $key => $value)
                        <ul>
                            <li>{!! $key !!}: {!! $value !!}</li>
                        </ul>
                    @endforeach
                </div>
                <div class="panel-footer">
                    <a class="btn btn-sm btn-primary" href="{{ URL::to('leadforms/' . $leadform->id . '/edit') }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{ URL::to('leadforms/' . $leadform->id . '/delete') }}">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
