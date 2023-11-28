<?php

$pagina = "peliculas";

if (is_file("controlador/" . $pagina . ".php")) {
    require_once "controlador/" . $pagina . ".php";
} else {
    require_once "vista/error.php";
}
