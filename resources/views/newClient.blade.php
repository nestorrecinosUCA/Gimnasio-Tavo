<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
    <title>Gym</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<header class="container-fluid">
    @include('includes.header')

</header>
<body style="background-color:#262422;" >
<div class="container bg-white rounded py-6">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="/assistants/save">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputname">Nombre</label>
                        <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputsecondName">Apellido</label>
                        <input type="text" class="form-control" id="inputsecondName" name="inputsecondName" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="birthday">fecha de nacimiento</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="fecha de nacimiento">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputGender">Genero</label>
                        <select id="inputGender" name="inputGender" class="form-control">
                            <option disabled="disabled" selected>genero</option>
                            <option  value="Hombre">Hombre</option>
                            <option  value="Mujer">Mujer</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputmembership">Membresia</label>
                        <select id="inputMembership" name="inputMembership" class="form-control">
                            <option disabled="disabled" selected>Tipo de Membresia</option>
                            @foreach ($memberships as $membership)
                                <option value="{{$membership->id}}">{{$membership->membership_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6" >
                    <button   type="submit" class="btn btn-primary btn-lg  mt-6">Subscribirse</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
