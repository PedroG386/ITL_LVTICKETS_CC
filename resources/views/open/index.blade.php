<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{ asset('css/theme.css') }}">

    <title>Elige el tipo de usuario</title>
</head>
<body>
    <div class="container mt-7">
        <h1 class="text-center">Quien esta requiriendo el servicio?</h1>


        <div class="d-flex align-items-center justify-content-center">
            <form action="" class="w-75">
                @csrf
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>Selecciona</option>
                    <option value="1">Estudiante</option>
                    <option value="2">Docente</option>
                    <option value="3">Personal administrativo</option>
                  </select>
    
                  <div class="d-flex justify-content-center">
                    <a type="submit" class="btn btn-primary w-50 mt-3" href="{{url('nuevo-ticket') }}" >Continuar</a>
                </div>
            </form>
        </div>
        

    </div>
</body>
</html>