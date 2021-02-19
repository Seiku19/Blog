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
        <div class="list-group mt-5 bg-ligt rounded p-5" style="background-color:white">

            <h1 class="text-center">Libros</h1>

            <a href="/libro1"><button type="button" class="list-group-item list-group-item-action active border-dark bg-dark">Libro1</button><a>
            <a href="/libro2"><button type="button" class="list-group-item list-group-item-action active border-dark bg-dark">Libro2</button><a>
            <a href="/libro3"><button type="button" class="list-group-item list-group-item-action active border-dark bg-dark">Libro3</button><a>
            <a href="/libro4"><button type="button" class="list-group-item list-group-item-action active border-dark bg-dark">Libro4</button><a>
            <a href="/libro5"><button type="button" class="list-group-item list-group-item-action active border-dark bg-dark">Libro5</button><a>
        </div>

    </div>


</body>

</html>