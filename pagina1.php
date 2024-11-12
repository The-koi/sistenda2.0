<?php

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Datos Personales</title>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">';
echo '<style>';
echo 'body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background-image: url("fondo.jpg"); background-size: cover; background-attachment: fixed; color: #333; text-align: center; margin: 0; padding: 0; }';
echo 'h1 { font-size: 3em; margin-top: 20px; color: #30056b; }';
echo 'marquee { font-size: 2em; color: #ff5733; font-weight: bold; margin-top: 10px; }';
echo '.container { background: rgba(255, 255, 255, 0.9); border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px auto; width: 80%; max-width: 600px; }';
echo '.contact { margin-top: 20px; font-size: 1.2em; line-height: 1.6; }';
echo '.group { font-size: 1.5em; font-weight: bold; margin-top: 10px; color: #007bff; }';
echo 'footer { margin-top: 30px; font-size: 0.9em; color: #777; }';
echo '.contact a { color: #0056b3; text-decoration: none; font-weight: bold; }';
echo '.contact a:hover { text-decoration: underline; }';
echo '.boton-regreso {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px;
    background-color: #30056b;
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
echo '<h1>Sobre HTML/CSS/PHP</h1>';
echo '<marquee>JOSE EMMANUEL LOPEZ MEZA</marquee>';
echo '<div class="contact">';
echo '<p><i class="fas fa-code"></i> EJEMPLO DE PHP</p>';
echo '<p><i class="fas fa-book"></i> En la materia de Programación</p>';
echo '</div>';
echo '<div class="group"><i class="fas fa-users"></i> GRUPO 531 - TICS</div>';
echo '<a href="http://localhost/ProgramacionJELM/MENU2.HTML" class="boton-regreso"></a>';
echo '</div>';



echo '</body>';
echo '</html>';
?>
