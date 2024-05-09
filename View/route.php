<?php
require_once "controller"/{$controller.php};
switch ($controller){
    case "Home"
        $controller = new Home();
        break;
}
$controller->{ $action }();
?>
