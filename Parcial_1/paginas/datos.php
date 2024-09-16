<?php

echo "<h2>Gracias por tu mensaje!</h2>";
echo "<p>Tus datos cargados son:</p>";
// Declaro variables
$nombre;
$apellido;
$email;
$coment;
$dni;

if (isset($_POST['Nombre'])) {
    $nombre = $_POST['Nombre'];
    print "<p>$nombre</p>";
}
if (isset($_POST['Apellido'])) {
    $apellido = $_POST['Apellido'];
    print "<p>$apellido</p>";
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    print "<p>$email</p>";
}
if (isset($_POST['Comentario'])) {
    $coment = $_POST['Comentario'];
    print "<p>$coment</p>";
}
if(isset($_POST['DNI'])){
    $dni = $_POST['DNI'];
    echo "<p>$dni</p>";

}
$dni = time() .".png";
$temporal = $_FILES ['DNI']['tmp_name'] ;
move_uploaded_file($temporal,"../img/$dni");
echo "<img src=../img/$dni >";
?>