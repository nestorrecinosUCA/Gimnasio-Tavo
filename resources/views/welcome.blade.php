<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
    <title>Gym</title>

</head>
<header class="container-fluid">
    @include('includes.header')

</header>
<body style="background-color:#262422;" >

<div class="container-fluid " style="background-size:cover;">
    <div class="row">
        <div class="col-12" style="background-size:cover;">
            <img style="width:100%;"  src="/img/banner.jpg" alt="">
        </div>
    </div>
</div>
<
<div class="container ">
    <div  class="row">
        <div class="col-12">
        <table class="table bg-white">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">genero</th>
        <th scope="col">fecha de nacimiento</th>
        <th scope="col">tipo de pago</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
</thead>
<tbody>
    @foreach ($assistants as $assistant)
        <tr>
            <th scope="row">{{$assistant->code}}</th>
            <td>{{$assistant->first_name . ' ' .$assistant->last_name}}</td>
            <td>{{$assistant->gender}}</td>
            <td>{{$assistant->birthday}}</td>
            <td>{{$assistant->membership->membership_name}}</td>
            <td><a href="/assistants/update/{{$assistant->id}}">Editar</a></td>
            <td>
                <form action="/assistants/delete/{{$assistant->id}}" method="post">
                    @csrf
                    <button class="text-danger bold">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach

</tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>
