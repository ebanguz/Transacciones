<?php

include('../layout/layout.php');
include('../helpers/utilities.php');


session_start();


if (isset($_GET['id'])) {


    $estudianteId = $_GET['id'];

    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes = $_SESSION['estudiantes'];

    $element = searchProperty($estudiantes, 'id', $estudianteId)[0];
    $elementIndex = getElementIndex($estudiantes, 'id', $estudianteId);


    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera'])) {

        if (isset($_POST['estado']) && $_POST['estado'] == '1') {
            $estado = '1';
        } else {
            $estado = '0';
        }


        $updateEstudiante =  ['id' => $estudianteId, 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'carrera' => $_POST['carrera'], 'estado' =>  $estado];

        $estudiantes[$elementIndex] = $updateEstudiante;

        $_SESSION['estudiantes'] = $estudiantes;



        header("Location: ../index.php");
        exit();
    }
} else {

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
                        <form action="edit.php?id=<?php echo $element['id'] ?>" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre del Estudiante:</label>
                                <input type="text" value="<?php echo $element['nombre'] ?>" class="form-control"
                                    id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Apellido del Estudiante:</label>
                                <input type="text" value="<?php echo $element['apellido'] ?>" class="form-control"
                                    id="apellido" name="apellido">
                            </div>
                            <div class=" form-group">
                                <label for="carrera">Carrera:</label>
                                <select class="form-control" id="carrera" name="carrera">

                                    <?php foreach ($carreras as $id => $text) : ?>

                                    <?php if ($id == $element['carrera']) : ?>

                                    <option selected value="<?php echo $id ?>"> <?php echo $text; ?></option>

                                    <?php else : ?>

                                    <option value="<?php echo $id ?>"> <?php echo $text; ?></option>

                                    <?php endif; ?>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="estado" name="estado" value="1"
                                    checked>
                                <label class="form-check-label" for="estado">Activo</label>
                            </div>

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