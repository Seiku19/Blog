<!DOCTYPE html>
<html lang="es">

<head>
    <title>Blog</title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $("#publicar").click(function () {
                $("#entradas").prepend("<div id='entrada'><p class='ml-4'>" + $("#texto").val() +"</p></div>");
            });

        });
    </script>

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

        <h1>Blog de autor</h1>

    </div>

    <div class="bg-primary">
        <h2 class="text-light ml-5 pt-3">Entradas</h2>

        <div class="mb-4">
            <input id="texto" type="text" class="col-8 ml-5" rows="2" placeholder="Escriba su entrada...">

            <button id="publicar" type="button" class="btn btn-light ">Publicar</button>
        </div>

        <div id="entradas">

            <div id="entrada">

                <p class="ml-4">Esto es una entrada</p>

            </div>

        </div>

    </div>


</body>

</html>