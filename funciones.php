<?php

function conectardb () {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sistema_universidad';
    $conn = new mysqli($hostname,$username,$password,$database);

    if($conn->error){
        die('no se pudo conectar la base de datos');
    } 

    return $conn;

}

function loguearUsuario ($usuario,$contraseña) {
    $conn = conectardb();
    $sentenciaSQL = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
    $sentenciaSQL->bind_param('s',$usuario);
    $sentenciaSQL->execute();
    $res = $sentenciaSQL->get_result();
    $fila = $res->fetch_assoc();
    return $fila && $fila['contraseña'] === $contraseña;
}

function validarUsuario (array &$errores, $usuario) : void {
    if(trim($usuario) == "" || strlen($usuario)>10){
        $errores['usuario'] = 'Ingrese el usuario correctamente';
    }
}

function validarContraseña (array &$errores, $contraseña) : void {
    if(trim($contraseña)=="" || strlen($contraseña)>10){
        $errores['contraseña'] = 'Ingresa la contraseña correctamente';
    }
}



?>