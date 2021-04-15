@extends('my')
@section('title')
    for and if example
@endsection
@section('loop')
    @foreach ($myarr as $el)
        @if ($loop->first)
            This is the first iteration.
        @endif
        <p>{{$el}}</p>
    @endforeach
    <p>end of foreach()</p>
@endsection()

