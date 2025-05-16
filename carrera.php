<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/inicio.css">
    <title>Document</title>
</head>
<body>
        <?php include('./header.php'); ?>

        <div class="index">
            <?php include('navegation.php');?>
            <div class="screen screen__carrera">
                <div class="container">
                    <h2>Sistema Gestion Estudiante</h2>
                    <table class="container__tabla table">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Carrera</th>
                                <th>ID</th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><img width="100px" src=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            Editar
                                        </a>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
</body>
        <script src="./scripts/enlaces.js"></script>
        <?php include('./footer.php'); ?>
</html>