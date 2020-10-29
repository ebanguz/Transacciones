<?php 
include('layout/layout.php'); 
include('helpers/utilities.php');

session_start();


$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

$listadoEstudiantes = $_SESSION['estudiantes'];
var_dump($listadoEstudiantes);


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

                <?php if(empty($listadoEstudiantes)):?>


                <h2>No hay estudiantes inscritos</h2>


                <?php else: ?>

                <?php foreach($listadoEstudiantes as $estudiante): ?>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $estudiante['apellido'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $estudiante['nombre'] ?></h6>
                            <p class="card-text"><?php echo getCarreraName($estudiante['carrera']);?></p>
                            <a href="#" class="card-link">Editar</a>
                            <a href="#" class="card-link">Eliminar</a>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>

</main>

<?php printFooter(); ?>