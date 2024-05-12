<?php
require dirname(__FILE__) . '/config/config.php';
require dirname(__FILE__) . '/init.php';

// Contrôleur par défaut
$controller = 'HomepageController';
$action = 'display';
if (isset($_GET['controller']) && !empty($_GET['controller'])) {
    // Detecter le Contrôleur
    $controller = ucfirst($_GET['controller']) . 'Controller';
    if (!file_exists(dirname(__FILE__) . ('/controller/front/') . $controller.'.php')) {
       die ("erreur");
    }
}
// Si contrôleur existe => charger le contrôleur
require (dirname(__FILE__) . ('/controller/front/') . $controller.'.php');
$controller = new $controller();

// Detecter l'action du contrôleur
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}
// Vérifier si la méthode existe dans contrôleur
$cl = get_class_methods($controller);
if(in_array($action, $cl)){
    $controller->$action();
}
else{
   die("erreur");
}