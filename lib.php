<?php
include_once('modelo.php');

//Función para limpiar los input de los formularios
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

function pintarJuegos()
{

    $juegos = selectJuegos();

    echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th> Titulo </th>";
    echo "<th> Descripción </th>";
    echo "<th> Plataforma </th>";
    echo "<th> Genero </th>";
    echo "<th> Localizaciones </th>";
    echo "<th> Nueva Localizacion </th>";
    echo "<th> Borrar </th>";

    echo "</tr>";

    //Contenido
    foreach ($juegos as $juego) {
        echo '<tr>';
        echo '<td>' . $juego['titulo'] . '</td>';
        echo '<td>' . $juego['descripcion'] . '</td>';
        echo '<td>' . $juego['plataforma'] . '</td>';
        echo '<td>' . $juego['genero'] . '</td>';

        //Acciones
        echo "<td><a href='localizaciones.php?id=" . $juego['id'] . "' class='btn btn-info btn-circle' style='--bs-btn-color: #ffffff; --bs-btn-hover-color: #fff;'> <i
        class='fas fa-map'></i></a></>";
        echo "<td><a href='controlador.php?accion=addLoca&id=" . $juego['id'] . "'  class='btn btn-success btn-circle'><i
        class='fas fa-plus' ></i></a></td>";

        echo "<td><a href='controlador.php?accion=borrar&id=" . $juego['id'] . "'  class='btn btn-danger btn-circle'><i 
        class='fas fa-trash' ></i></a></td>";

        echo "</tr>";

    }
    echo "</table>";

}

function pintarLocalizacion($idJuegos)
{

    $localizaciones = selectLocalizacion($idJuegos);

    echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th> Nombre </th>";
    echo "<th> Descripción </th>";
    echo "<th> pInteres </th>";
    echo "<th> Importancia </th>";
    echo "<th> Borrar </th>";
    echo "</tr>";


    //Contenido
    foreach ($localizaciones as $localizacion) {
        echo "<tr>";
        echo "<td>" . $localizacion['nombre'] . "</td>";
        echo "<td>" . $localizacion['descripcion'] . "</td>";
        echo "<td>" . $localizacion['pInteres'] . "</td>";
        echo "<td>" . $localizacion['importancia'] . "</td>";
        echo "<td> <a href='controlador.php?accion=borrarLocalizacion&idLoca=" . $localizacion['idLoca'] . "'class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a></td>";
        echo "</tr>";

    }

    echo "</table>";
}
?>