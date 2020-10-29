<?php 

function printHeader(){

    $header = <<<EOF
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>Registro</title>
    
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
    <body>
        <header>
            <div class="bg-dark collapse" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
    
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Otra cosa</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Enlace acá</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <strong>Registro</strong>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
    EOF;

    echo $header;
}

function printFooter(){

    $footer = <<<EOF
        <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Volver arriba</a>
            </p>
            <p>EGA</p>

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="assets/js/bootstrap.min.js">
    </script>

    <div id="weava-permanent-marker" date="1603938382626"></div>
    <div id="weava-ui-wrapper">
        <div class="weava-drop-area-wrapper">
            <div class="weava-drop-area"></div>
            <div class="weava-drop-area-text">Drop here!</div>
        </div>
    </div>
    </body>

    </html>
EOF;

    echo $footer;
}


?>