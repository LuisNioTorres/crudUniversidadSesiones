<?php
session_start();

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

function loguearUsuario (array &$errores,$usuario,$contraseña) : void {
    $conn = conectardb();
    $sentenciaSQL = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
    $sentenciaSQL->bind_param('s',$usuario);
    $sentenciaSQL->execute();
    $res = $sentenciaSQL->get_result();
    $fila = $res->fetch_assoc();
    if($fila && $fila['contraseña'] === $contraseña){
        $_SESSION['id_decano'] = $fila['id_decano'];
        header("location:inicio.php");

    }else{
        $errores['login'] = 'El usuario o la contraseña son incorrectos';
    }
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


function obtener_Decano_Facultad ($id_decano) {
    $conn = conectardb();
    $sentenciaSQL = "SELECT decano.nombre, decano.apellido, facultad.id_facultad, facultad.nombre AS facultad FROM decano 
                     INNER JOIN facultad ON decano.id_facultad = facultad.id_facultad WHERE decano.cedula =?";
    $sentenciaSQL = $conn->prepare($sentenciaSQL);
    $sentenciaSQL->bind_param('i',$id_decano);
    $sentenciaSQL->execute();
    $res = $sentenciaSQL->get_result();
    $fila = $res->fetch_assoc();
    return $fila;
}

function obtenerCarreras ($id_facultad){
    $conn = conectardb();
    $sentenciaSQL = $conn->prepare("SELECT carrera.nombre AS nombre_carrera, carrera.id_carrera AS id_carrera FROM carrera WHERE carrera.id_facultad =?");
    $sentenciaSQL->bind_param('i',$id_facultad);
    $sentenciaSQL->execute();
    $res = $sentenciaSQL->get_result();
    return $res;
}

function obtenerEstudiantes ($id_carrera) {
    $conn = conectardb();
    $consultaSQL = $conn->prepare("SELECT e.*, c.nombre AS nombre_carrera FROM estudiante e 
                                   INNER JOIN carrera c ON e.id_carrera = c.id_carrera 
                                   WHERE e.id_carrera = ?");
    $consultaSQL->bind_param('i',$id_carrera);
    $consultaSQL->execute();
    $res = $consultaSQL->get_result();
    return $res;
}
?>