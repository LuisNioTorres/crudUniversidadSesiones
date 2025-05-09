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
            <form action="/" class="formulario">
            <h2 class="titulo">Bienvenidos</h2>

            <div class="formulario">
                <div class="formulario__grupo">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" class="input" id="grupo__usuario">
                </div>
                <div class="formulario__grupo">
                    <label for="contraseña">Cntraseña</label>
                    <input type="password" name="contraseña" class="input grupo__contraseña" id="grupo__contraseña">
                </div>

                <div class="formulario__options">
                    <input type="checkbox" name="check" id="check"> Mantenerme Conectado
                    <a href="/">Olvide mi Contraseña</a>
                </div>

                <div class="formulario__boton-enviar">
                    <button type="submit" class="boton-enviar">INICIAR SESION</button>
                    <div class="formulario__mensaje_error">El usuario o la contraseña son incorrectos!</div>
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