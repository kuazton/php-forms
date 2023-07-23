<?php
if (isset($_GET['vista'])) {
    $vista = $_GET['vista'];
} else {
    $vista = 'vista1'; 
}
$vistasPermitidas = ['vista1', 'vista2', 'vista3', 'vista4', 'vista5'];

if (in_array($vista, $vistasPermitidas)) {
    $rutaVista = 'views/' . $vista . '.php';
    if (file_exists($rutaVista)) {
        include $rutaVista;
    } else {
        echo "Vista no encontrada.";
    }
} else {
    echo "Vista no encontrada.";
}
?>