<?php

$titulo = "Bienvenido a Sistenda";
$descripcion = "Un sistema diseñado especialmente para la gestión de tu tienda de abarrotes, simplificando las operaciones diarias y optimizando tus procesos.";
$enlaceMenu = "http://localhost/ProgramacionJELM/MENU2.HTML";
$textoBoton = "Entrar al Sistema";


$imagenes = [
    ["src" => "productos.webp", "alt" => "Productos de abarrotes"],
    ["src" => "estante.jpg", "alt" => "Estante de tienda"],
    ["src" => "cajaproductos.jpg", "alt" => "Cajas de productos"]
];


echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Sistenda - Sistema para Tienda de Abarrotes</title>";
echo "    <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background: url('fondo.jpg.avif') no-repeat center center/cover;
                color: #333;
            }
            
            .container {
                background: rgba(255, 255, 255, 0.8);
                padding: 40px;
                border-radius: 8px;
                text-align: center;
                max-width: 600px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            h1 {
                color: #2c3e50;
                font-size: 2.5em;
                margin-bottom: 0.5em;
            }

            p {
                color: #555;
                font-size: 1.2em;
                margin-bottom: 1.5em;
            }

            .button {
                background-color: #3498db;
                color: white;
                padding: 15px 30px;
                font-size: 1.2em;
                text-decoration: none;
                border-radius: 5px;
            }

            .images-container {
                display: flex;
                gap: 15px;
                justify-content: center;
                margin-top: 20px;
            }

            .images-container img {
                width: 100px;
                height: 100px;
                border-radius: 8px;
                object-fit: cover;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            }
        </style>";
echo "</head>";
echo "<body>";
echo "    <div class='container'>";
echo "        <h1>$titulo</h1>";
echo "        <p>$descripcion</p>";
echo "        <a href='$enlaceMenu' class='button'>$textoBoton</a>";
echo "        <div class='images-container'>";


foreach ($imagenes as $imagen) {
    echo "<img src='{$imagen['src']}' alt='{$imagen['alt']}'>";
}

echo "        </div>";
echo "    </div>";
echo "</body>";
echo "</html>";
