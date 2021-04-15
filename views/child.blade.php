@extends("my")
@section('title')
    Car
@endsection
@section('name_of_car')
    @parent
    <p>Brand: {{$obj->name}}</p>
    <p>Model: {{$obj->model}}</p>
    <p>Year: {{$obj->year}}</p>
@endsection
@section('content')
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
    @endfor
@endsection

