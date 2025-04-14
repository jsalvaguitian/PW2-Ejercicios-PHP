<?php
function semaforo_a($color)
{
    if ($color == "rojo") {
        return "Frene";

    } else if ($color == "amarillo") {
        return "Precaucion";

    } else if ($color == "verde") {
        return "Avance";

    } else{
        return "Estado desconocido";
    }
}

function semaforo_b($color)
{

    return ($color == "rojo") ? 'Frene' : (($color == "amarillo") ? 'Precaucion' : (($color == "verde") ? 'Avance' : 'Estado desconocido'));

}

function semaforo_c($color)
{
    $estado = "";

    switch ($color) {
        case "rojo":
            $estado = "Frene";
            break;
        case "amarillo":
            $estado = "Precaucion";
            break;
        case "verde":
            $estado = "Avance";
            break;
        default:
            $estado = "Estado desconocido";
            break;
    }

    return $estado;
}
