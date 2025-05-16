<?php
include('./funciones.php');

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : "";
$errores = [];

if(isset($_POST['iniciar_sesion'])){
    validarUsuario($errores,$usuario);
    validarContraseña($errores,$contraseña);
    if(empty($errores)){
    $login = loguearUsuario($usuario,$contraseña);
        if(!$login){
            $errores['login'] = 'El usuario o la contraseña son incorrectos';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <div class="container">
        <div class="" id="left-container">
            <form class="formulario" method="post">
            <h2 class="titulo">Bienvenidos</h2>

            <div class="formulario">
                <div class="formulario__grupo">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" class="input" id="grupo__usuario" value="<?php echo $usuario; ?>">
                    <?php
                    if(isset($errores['usuario'])){
                    ?>
                    <div class="formulario__mensaje_error"><?php echo $errores['usuario']; ?></div>
                    <?php
                    }
                    ?>
                </div>
                <div class="formulario__grupo">
                    <label for="contraseña">Cntraseña</label>
                    <input type="password" name="contraseña" class="input grupo__contraseña" id="grupo__contraseña">
                    <?php
                    if(isset($errores['contraseña'])){
                    ?>
                    <div class="formulario__mensaje_error"><?php echo $errores['contraseña']; ?></div>
                    <?php
                    }
                    ?>
                </div>

                <div class="formulario__options">
                    <input type="checkbox" name="check" id="check"> Mantenerme Conectado
                    <a href="/">Olvide mi Contraseña</a>
                </div>

                <div class="formulario__boton-enviar">
                    <button type="submit" class="boton-enviar" name="iniciar_sesion">INICIAR SESION</button>
                    <?php
                    if(isset($errores['login'])){
                    ?>
                    <div class="formulario__mensaje_error"><?php echo $errores['login']; ?></div>
                    <?php
                    }
                    ?>
                    <div class="formulario__options">
                        <span>¿No tienes cuenta?</span> <a href="/">Crea una cuenta</a>
                    </div>
                </div>
        
            </div>

            </form>
        </div>
        <div class="" id="right-container"></div>
    </div>
</body>
<script src="./scripts/formulario.js"></script>
</html>