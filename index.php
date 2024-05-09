<?php
require_once "config/db.php"
require_once "Model/master.php"
If(isset($_GET["controller"], $_GET["action"])){
    $controller = $_GET["controller"];
    $action = $_GET["action"];
}else{
    $controller = "Home";
    $action ="index";
}
if($controller == "Admin"){

}
?>