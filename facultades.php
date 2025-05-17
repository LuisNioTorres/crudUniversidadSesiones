<?php
include('./funciones.php');
include('./controlador_user_logueado.php');

$id_decano = $_SESSION['id_decano'];
$res = obtener_Decano_Facultad($id_decano);
$id_facultad = $res['id_facultad'];
$carreras = obtenerCarreras($id_facultad);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/inicio.css">
    <link rel="stylesheet" href="./styles/facultades.css">
    <title>Facultades</title>
</head>
<body>
        <?php include('./header.php'); ?>

        <div class="index">
            <?php include('navegation.php');?>
            <div class="screen screen__facultad">
                <h3>FACULTAD DE <?php echo $res['facultad'];?></h3>
                <h2>Carreras:</h2>
                <div class="carreras">
                    <?php
                    while($carrera = $carreras->fetch_assoc()){
                    ?>
                    <a href="carrera.php?id_carrera=<?php echo $carrera['id_carrera'] ;?>">
                    <section class="carrera" >
                        <h2><?php echo $carrera['nombre_carrera']; ?></h2>
                    </section>
                    </a>
                    <?php
                    }
                    ?>
                    </form>
                </div>
            
            </div>
        </div>
        
</body>
            <script src="./scripts/enlaces.js"></script>
            <?php include('./footer.php'); ?>
</html>