<?php
function semaforo_a($color)
{
    if ($color == "rojo") {
        return "frene";

    } else if ($color == "amarillo") {
        return "precaucion";

    } else if ($color == "verde") {
        return "avance";
    }
}

function semaforo_b($color)
{

    return ($color == "rojo") ? 'Frene' : (($color == "amarillo") ? 'Precaucion' : (($color == "verde") ? 'Avance' : 'error 404'));

}

function semaforo_c($color)
{
    $estado = "";

    switch ($color) {
        case "rojo":
            $estado = "frene";
            break;
        case "amarillo":
            $estado = "precaucion";
            break;
        case "verde":
            $estado = "avance";
            break;
        default:
            $estado = "error 404";
            break;
    }

    return $estado;
}
