<?php

include '../Librerias.php';

$oUsu = new Usuario($_REQUEST["nomusuario"], $_REQUEST["clave"]);
if ($oUsu->VerificaLocal()) {
    echo 'Bien';
} else {
    echo 'Mal';
}
