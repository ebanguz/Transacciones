<?php include('layout/layout.php'); 

session_start();


$_SESSION['estudiantes'] = isset($_POST['estudiates']) ? $_POST['estudiates'] : array();

$listadoEstudiantes = $_SESSION['estudiantes'];

?>



<?php printHeader(); ?>
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1>Integrar estudiante</h1>
            <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>-->
            <p>
                <a href="Estudiantes/add.php" class="btn btn-primary my-2">Añadir</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">


                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</main>

<?php printFooter(); ?>