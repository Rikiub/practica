<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>

<body>
    <h1>Peliculas</h1>

    <table>
        <tr>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Fecha Estreno</th>
            <th>Genero</th>
        </tr>

        <form>
            <button name="insertar">Insertar</a>
        </form>

        <?php foreach ($data as $info) { ?>
            <tr>
                <td><?php $info["titulo"] ?></td>
                <td><?php $info["fecha_estreno"] ?></td>
                <td><?php $info["genero"] ?></td>
                <td>
                    <form action="?pagina=peliculas" method="POST">
                        <button name="modificar" value="<?php echo $info["codigo"] ?>">Modificar</button><br>
                        <button name="eliminar" value="<?php echo $info["codigo"] ?>">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>