<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir</title>
</head>

<body>
    <h1>Añadir</h1>

    <form action="?pagina=peliculas" method="POST" style="display: flex; flex-direction: column;">
        <label>Titulo</label>
        <input type="text" name="titulo">

        <label>Fecha Estreno</label>
        <input type="date" name="fecha_estreno">

        <label>Genero</label>
        <input type="text" name="genero">

        <input type="submit" name="insertar">
    </form>
</body>

</html>