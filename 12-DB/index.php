<?php
include_once "db.php";

$db = new DB("root", "root12345", "demo");
//var_dump($db);

$usuarios = $db->select("usuarios");
//var_dump($usuarios);

if(count($usuarios) == 2){
  $db->save("usuarios", "nombre,password,usuario", "'Francisco Lopez','12345','flopez'");
}

$ultimo = $db->first("usuarios","*","usuario = 'flopez'");
var_dump($ultimo);
?>
