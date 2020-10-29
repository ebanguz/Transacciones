<?php 

include('../layout/layout.php');
include('../helpers/utilities.php');

session_start();
      
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera'])) {
    
    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes = $_SESSION['estudiantes'];
          
    $estudianteId= 1;
          
if (!empty($estudiantes)) {
    $lastElement = getLastElement($estudiantes);
    $estudianteId = $lastElement['id'] + 1;
}


    array_push($estudiantes, [ 'id'=> $estudianteId, 'nombre' => $_POST['nombre'], 'carrera' => $_POST['carrera'] ]);
          
    $_SESSION['estudiantes'] = $estudiantes;

    header("Location: ../index.php");
    exit();
          
}
    ?>



<?php printHeader(true); ?>
<main role="main">

    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-8">
            <div class="container">
                <div class="card my-5">
                    <div class="card-header">
                        Añadir Estudiante
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre del Estudiante:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Apellido del Estudiante:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class=" form-group">
                                <label for="carrera">Carrera:</label>
                                <select class="form-control" id="carrera" name="carrera">

                                    <option value="">Selecciona una carrera</option>

                                    <?php foreach($carreras as $id => $text){ ?>

                                    <option value="<?php echo $id ?>"> <?php echo $text ?> </option>

                                    <?php } ?>


                                </select>
                            </div>
                            <!-- 
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="estado" name = "estado">
                                <label class="form-check-label" for="estado">Activo</label>
                            </div> -->

                            <a href="../index.php" class="align-self-end">Volver atrás</a>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md"></div>
    </div>

</main>

<?php printFooter(true); ?>