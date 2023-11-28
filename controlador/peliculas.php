<?php

require_once "modelo/peliculas.php";
$pelicula = new Pelicula();

if (isset($_POST["insertar"])) {
    $pelicula->set_titulo($_POST["titulo"]);
    $pelicula->set_fecha($_POST["fecha_estreno"]);
    $pelicula->set_genero($_POST["genero"]);
    $result = $pelicula->insertar();

    if ($result) {
        require_once "vista/peliculas-insertar.php";
    } else {
        $pagina = "error";
    }
} else if (isset($_POST["eliminar"])) {
    $result = $pelicula->eliminar($_POST["codigo"]);

    if ($result) {
        $pagina = "vista/" . $pagina . ".php";
    } else {
        echo "<script>alert('Eliminación Fallida')</script>";
    }
} else if (isset($_POST["mostrar"])) {
    $data = $pelicula->consultar();

    if ($data) {
        require_once "vista/peliculas-mostrar.php";
    } else {
        echo "<script>alert('Registro Fallido')</script>";
    }
} else {
    require_once "vista/" .  $pagina . ".php";
}
