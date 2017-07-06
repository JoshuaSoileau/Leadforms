@extends('layout')

@section('content')
<div class="content">
    <div class="title m-b-md">
        What is the best team?
    </div>
    @if (empty($team))
        <small>There is no team. There is no spoon.</small>
    @else
        <ul>
            @foreach ($team as $member)
                <li>{{ $member }}</li>
            @endforeach
        </ul>
    @endif
</div>
@stop