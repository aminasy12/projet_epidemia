<?php

// Initialiser le contrôleur approprié en fonction de la requête de l'utilisateur
if (isset($_GET['action'])) {
    $controller = $_GET['action'];
} else {
    $controller = 'Pays';
}

// Inclure le fichier de contrôleur
require_once('controller/' . $controller . 'Controller.php');

// Initialiser le contrôleur
$controller_class = ucfirst($controller) . 'Controller';
$controller_instance = new $controller_class();

// Appeler la méthode appropriée du contrôleur
if (isset($_GET['method'])) {
    $method = $_GET['method'];
    $controller_instance->$method();
} else {
    $controller_instance->index();
}
