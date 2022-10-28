<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    <title>Ticket</title>
</head>

<body class="container">
    <nav class="navbar navbar-light  w-100 rounded mt-3 mb-3 d-flex flex-row">
        <img class="img-thumbnail w-25 h-25" src="{{ asset('images/itl_leon.png') }}" alt="Logo ITL">
        <h3 class="text-darktext-center">
            Con el fin de ofrecerle un mejor servicio ponemos a su disposición este formulario,
            le solicitamos el llenado para poder dar atención a reporte de daños e inconvenientes en salas,
            laboratorios y demás espacios del Centro de Cómputo.
            <br>
            <br>
            De antemano agradecemos su participación y tiempo. <br>
            Equipo de Centro de Cómputo
            TecNM León
        </h3>
    </nav>

    <div class="d-flex justify-content-center align-items-center">
        <form class="w-50 ">
            @csrf

            <div class="mt-5">
                <h3 class="text-secondary"><i class="fa-solid fa-user"></i> Datos personales del solicitante</h3>
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Nombre </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Ingresa tu nombre">
                </div>

                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Apellido paterno</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Ingresa tu apellido paterno">
                </div>

                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Apellido materno</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Ingresa tu apellido materno">
                </div>

                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Correo institucional</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Ingresa tu correo institucional">
                </div>

                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Ingresa tu telefono">
                </div>
            </div>

            <div class="mt-5">
                <h3 class="text-secondary"><i class="fa-solid fa-desktop"></i> Datos sobre falla</h3>
                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Selecciona sobre que es tu problema </label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled>Seleccionar</option>
                        <option value="1">Equipo de laboratorio</option>
                        <option value="2">Equipo de sala de usuarios</option>
                        <option value="3">Correo institucional</option>
                        <option value="3">Office 365</option>
                        <option value="3">Servicios de impresion</option>
                    </select>
                </div>

                <div class="form-group m-3">
                    <label for="exampleInputEmail1">Descripcion de la falla</label>
                    <textarea rows = "6" cols = "40" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="numeroControl"
                        placeholder="Describe detalladamente la falla, numero de equipo, etc"></textarea>
                </div>





                <div class="d-flex justify-content-center">
                    <a type="submit" class="btn btn-danger w-50 m-3" href="{{ url('index') }}"><i class="fa-solid fa-left-long"></i> Volver</a>
                    <a type="submit" class="btn btn-primary w-50 m-3" href="{{ url('gracias') }}"><i
                            class="fa-solid fa-paper-plane"></i> Enviar</a>
                </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/a10db9b6f8.js" crossorigin="anonymous"></script>

</body>

</html>
