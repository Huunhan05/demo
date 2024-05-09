<?php
class MasterMode{
    public function  __contruct(){

}
 public function get_all_from($table){
    $db = new connect();
    $querry = "SELECT * FROM {$table}";
    $result = $db->getlist
}
}