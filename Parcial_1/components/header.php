<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<header>
    <?php  
//Array asociativo para cargar el menú del sitio
$menu = array();

$menu ["Inicio"] = "../paginas/inicio.php";
$menu ["Servicios"] = "../paginas/servicios.php";
$menu ["Quienes Somos"] = "../paginas/quienes.php";
$menu ["Contacto"] = "../paginas/contacto.php";

echo "<ul>";
foreach($menu as $key => $value ){

    echo "<a href=$value ><li>$key</li></a>";

}

echo "</ul>";

?>
</header>