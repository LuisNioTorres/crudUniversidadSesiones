<?php
include('./funciones.php');
$id_decano = $_SESSION['id_decano'];
$res = obtener_Decano_Facultad($id_decano);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/inicio.css">
</head>
<body>
        <?php include('./header.php'); ?>
        <div class="index">
            <?php include('navegation.php') ;?>
            <div class="screen">HOLA <?php echo $res['nombre'].' '.$res['apellido']; ?>, BIENVENIDO....
                <div class="chiste">Alegra tu día:</div>
            </div>
        </div>
        
</body>
        <script src="./scripts/enlaces.js"></script>
        <?php include('./footer.php'); ?>
</html>