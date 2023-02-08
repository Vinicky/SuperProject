<?php
require_once "dbdriver.php";
Class Service {
private $OutputArray=array();
private $OutputJSON=array();
private $tab_firm="firm";
private $dbdrv;

public function __construct($conn) {
    
    $this->dbdrv=new dbdriver($conn);
    
}

public function getFirm($id) {

$id= intval($id);
return $this->dbdrv->selectWhere($this->tab_firm,"*"," where id=$id");
}

public function processRequest($input) {
$data= json_decode($input);
$idUser="";
}
}
?>
