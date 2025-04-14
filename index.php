<?php
require_once("./Ejercicio1/ejercicio1.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main>
    <section>
        <p>Jesica Belen Salva Guitian</p>
    </section>
    <section class="ejercicio 1">
        <article class="titulo">
            <p>Ejercicio 1</p>
        </article>

        <article class="enunciado">
            <p>Cree una funcion llamada Semaforo, que recibe por parametro un color como texto ("rojo", "amarillo",
                "verde"). Dicha funcion devolvera el estado que corresponde: "frene", "precaucion", "avance" o "estado
                desconocido" ante un caso no esperado.</p>
            <ol class="lista">
                <li>funcion semaforo_a($color): Resuelva la solucion utilizando if-else.</li>
                <li>funcion semaforo_b($color): Resuelva la solucion utilizando if inline (return ?:)</li>
                <li>funcion semaforo_c($color): Resuelva la solucion utilizando switch</li>
            </ol>
        </article>
        <article>
            <ul>
                <li>Caso A: <code>function semaforo_a($color)</code> Parametro: <code>$color= rojo</code> Retorna: <?php $color="rojo"; print(semaforo_a($color))?> </li>
                <li>Caso B: <code>function semaforo_b($color)</code> Parametro: <code>$color= verde</code> Retorna: <?php $color="verde"; print(semaforo_b($color))?> </li>
                <li>Caso C: <code>function semaforo_c($color)</code> Parametro: <code>$color= rosa</code> Retorna: <?php $color="rosa"; print(semaforo_c($color))?> </li>
            </ul>
        </article>


    </section>
</main>
</body>
</html>

