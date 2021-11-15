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
    <tr>
        <th scope="row">1</th>
        <td>Nestor Esau Recinos Escobar</td>
        <td>culero</td>
        <td>10/10/2001</td>
        <td>15 dias</td>
        <td><a href="">Editar</a></td>
        <td><a href="">Eliminar</a></td>
    </tr>

</tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>