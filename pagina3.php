<?php
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Introducción a Variables en PHP</title>';
echo '<style>';
echo 'body { font-family: Arial, sans-serif; background-color: #f0f4f8; color: #333; text-align: center; margin: 0; padding: 0; }';
echo '.container { max-width: 800px; margin: 50px auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); text-align: left; }';
echo 'h1 { font-size: 2.5em; color: #00796b; margin-bottom: 20px; text-align: center; }';
echo 'p { font-size: 1.1em; line-height: 1.6; }';
echo 'table { width: 100%; border-collapse: collapse; margin-top: 20px; }';
echo 'th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }';
echo 'th { background-color: #00796b; color: white; font-size: 1.2em; }';
echo 'code { background-color: #f7f7f7; padding: 3px 5px; border-radius: 5px; font-size: 1em; }';

echo '.boton-regreso {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px;
    background-color: #00796b;
    color: white;
    text-decoration: none;
    border-radius: 50%;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
}';
echo '.boton-regreso:hover { background-color: #0056b3; }';
echo '.boton-regreso::before { content: "←"; font-size: 20px; }';

echo '</style>';
echo '</head>';
echo '<body>';

echo '<div class="container">';
echo '<h1>Variables en PHP</h1>';
echo '<p>En PHP, una variable es un contenedor que almacena un valor o información que puede cambiar durante la ejecución del programa. Las variables en PHP siempre empiezan con el símbolo <code>$</code>, seguido por el nombre de la variable. Puedes almacenar varios tipos de datos en una variable, como números, cadenas de texto, booleanos, y arreglos.</p>';
echo '<p>Las variables son muy útiles, ya que nos permiten reutilizar datos y manejar información de forma dinámica en nuestros programas.</p>';

echo '<h2>Ejemplos de Variables en PHP</h2>';
echo '<table>';
echo '<tr><th>Tipo</th><th>Descripción</th><th>Ejemplo de Código</th><th>Resultado</th></tr>';


$nombre = "Jose";
echo '<tr><td>Texto (String)</td><td>Almacena texto o cadenas de caracteres.</td><td><code>$nombre = "Jose";</code></td><td>' . htmlspecialchars($nombre) . '</td></tr>';


$edad = 25;
echo '<tr><td>Númerico (Integer)</td><td>Almacena números enteros.</td><td><code>$edad = 25;</code></td><td>' . htmlspecialchars($edad) . '</td></tr>';

$altura = 1.75;
echo '<tr><td>Punto Flotante (Float)</td><td>Almacena números con decimales.</td><td><code>$altura = 1.75;</code></td><td>' . htmlspecialchars($altura) . '</td></tr>';


$es_estudiante = true;
echo '<tr><td>Booleano</td><td>Almacena un valor verdadero (<code>true</code>) o falso (<code>false</code>).</td><td><code>$es_estudiante = true;</code></td><td>' . htmlspecialchars($es_estudiante ? 'true' : 'false') . '</td></tr>';

$colores = ["rojo", "verde", "azul"];
echo '<tr><td>Arreglo (Array)</td><td>Almacena múltiples valores en una sola variable.</td><td><code>$colores = ["rojo", "verde", "azul"];</code></td><td>' . htmlspecialchars(implode(", ", $colores)) . '</td></tr>';


$sin_valor = null;
echo '<tr><td>Null</td><td>Indica que la variable no tiene un valor asignado.</td><td><code>$sin_valor = null;</code></td><td>' . htmlspecialchars(var_export($sin_valor, true)) . '</td></tr>';

echo '</table>';
echo '<a href="http://localhost/ProgramacionJELM/MENU2.HTML" class="boton-regreso"></a>';
echo '</div>';

echo '</body>';
echo '</html>';
?>