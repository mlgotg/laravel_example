<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<h1>Машины</h1>
@section('name_of_car')
    Характеристики машины
@show
<form action="prototype" method="post" >
{{--    @csrf--}}
    {{ csrf_field() }}
    <p>Марка: <input type="text" name="name" /></p>
    <p>Модель: <input type="text" name="model" /></p>
    <p>Год: <input type="number" name="year" /></p>
    <p>id: <input type="number" name="id" /></p>
    <input type="submit" value="Отправить">
</form>
<div class="container">
    @yield('content')
    @yield('loop')
</div>
</body>
</html>
