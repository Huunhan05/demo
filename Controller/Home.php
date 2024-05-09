<?php
class Home{
    private static  function  index(){
        require_once "Model/book.php";
        $model = new ModelBOOK();
        $result = $model-get_du_lieu();
        require_once "View/home/index.php";
    }
}
?>