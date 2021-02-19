<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sugerencias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        #titulo {
            margin-top: 50px;
            background-color: #F5F5F5;
        }

        #entrada {
            background-color: #F5F5F5;
            border-radius: 10px;
            margin-left: 40px;
            margin-right: 40px;
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" class="bg-primary">

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/biografia">Biografia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/libros">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/sugerencias">Sugerencias</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="titulo" class="text-center border-bottom border-dark p-5 ">

        <h1>Sugerencias</h1>

    </div>

    <div class="bg-primary row justify-content-center">
        <div class="bg-light col-8 mt-4 rounded">
            <div class="form-row">

                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nombre</span>
                    </div>
                    <input type="text" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Asunto</span>
                    </div>
                    <input type="password" class="form-control">
                </div>

            </div>

            <textarea class="mb-3 form-control" placeholder="Escriba su sugerencia..."></textarea>

            <button type="button" class="btn btn-primary mb-5"><b>Enviar</b></button>
        </div>

    </div>


</body>

</html>