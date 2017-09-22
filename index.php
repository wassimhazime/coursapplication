<?php
use core\model\database\database;
use core\model\model;

define('D_S', DIRECTORY_SEPARATOR);
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']) );

define('ROOTWEB', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

require ROOT . 'vendor' . D_S . 'autoload.php'; 

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$m = new model('tele');
//$data=['nom'=>"awa",'prenom'=>'awa','id_tele'=>'1','tele'=>""];


$g=$m->getTableSQL();
var_dump($g);
$data=$_GET;

if(isset($data['nom'])){
$m->setData($data);}


?>
<!DOCTYPE html>
<html>
<body>

<form action="#" >
    <input type="text" name="id_tele" hidden value="1">
  nom:<br>
  <input type="text" name="nom" value="Mickey">
  <br>
  prenom:<br>
  <input type="text" name="prenom" value="Mouse">
  <br>
  
  tele:<br>
  <input type="text" name="tele" value="Mouse">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>



