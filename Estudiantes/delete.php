<?php 

include ('../helpers/utilities.php');


session_start();

$estudiantes = $_SESSION['estudiantes'];

if (isset($_GET['id'])) {

    $estudianteId = $_GET['id'];

    $elementIndex = getElementIndex($estudiantes,'id',$estudianteId);

    unset($estudiantes[$elementIndex]);

    $_SESSION['estudiantes'] = $estudiantes;


    header('Location: ../index.php');

    exit();

}



?>