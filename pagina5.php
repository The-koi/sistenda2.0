<?php

$nombre_Sistema = "Sistenda";
$descripcion = 'Un sistema para la gestión de una "tienda de abarrotes".';
$NombreCreador = "Emmanuel";

$frase1 = "El sistema ";
$frase2 = $nombre_Sistema . " permite ";
$frase3 = "controlar inventario, ventas y compras ";
$frase4 = "en una tienda de abarrotes pequeña.";

$mensajeConcatenado = $frase1 . $frase2 . $frase3 . $frase4;
echo $mensajeConcatenado . "<br>";

// Constantes 
define("MAX_PRODUCTOS", 100);
define("MAX_EMPLEADOS", 5);
define("MONEDA", "MXN");

// Matrices 
$productos = ["Arroz", "Frijol", "Azúcar", "Café", "Aceite", "Leche", "Pan", "Jabón", "Huevos", "Cereal"];
$precios = [20, 15, 25, 50, 35, 17, 5, 12, 24, 30];
$cantidades = [100, 50, 75, 20, 40, 60, 80, 30, 90, 55];

$Abarrotes = "Productos de la despensa básica";
$Limpieza = "Productos para limpieza del hogar";
$Bebidas = "Bebidas para consumo inmediato o posterior";
$Dulces = "Dulces y golosinas";

echo "Sistema: " . $nombre_Sistema . "<br>";
echo "Descripción: " . $descripcion . "<br>";
echo "Máximo de productos permitidos: " . MAX_PRODUCTOS . "<br>";
echo "Moneda: " . MONEDA . "<br>";
echo "Productos: " . implode(", ", $productos) . "<br>";
echo "Precios: " . implode(", ", $precios) . "<br>";
echo "Cantidades: " . implode(", ", $cantidades) . "<br>";
echo "Categorías:<br>";
echo "Abarrotes: " . "$Abarrotes" . "<br>";
echo "Limpieza: " . "$Limpieza". "<br>";
echo "Bebidas: " . "$Bebidas" . "<br>";
echo "Dulces: " . "$Dulces" . "<br>";
?>

<!-- Botón de regreso al menú principal -->
<br>
<a href="http://localhost/ProgramacionJELM/MENU2.HTML">
    <button>Regresar al Menú Principal</button>
</a>
