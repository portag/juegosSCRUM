<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>8D Juegos - Home</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark text-center">Localizaciones</h6>
        </div>
        <div class="card-body">
        <a href='index.php' class='btn btn-dark float-right'><i class='fas fa-gamepad' ></i> Volver a Juegos</a>
        <br><br>
            <div class="table-responsive table-dark">

                <table class="table table-bordered text-center text-white align-middle"
                    style="font-size: 16px;margin-bottom: 0px;" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Puntos Interés</th>
                            <th>Importancia</th>
                            <th>Eliminar</th>
                            

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Puntos Interés</th>
                            <th>Importancia</th>
                            <th>Eliminar</th>
                            

                        </tr>
                    </tfoot>
                    <tbody>
                        <td>Ejemplo</td>
                        <td>Ejemplo</td>
                        <td>Ejemplo</td>
                        <td>Ejemplo</td>
                       

                        <td><a href='controlador.php?accion=borrarLocalizacion' class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a></td>


                    </tbody>
                </table>

            </div>
        </div>
    </div>








</body>

</html>
<?php include("footer.php"); ?>