<!DOCTYPE html>
<html lang="en">

  <head>
    <title>BeginnerCMS</title>
  </head>

  <body>

<?php

  include_once('_classSetup/cms.php');
  $obj = new BeginnerCMS();
  $obj->host = 'localhost';
  $obj->username = 'CMS_PHP';
  $obj->password = 'PhpBeginner';
  $obj->table = 'CMS_TABLE';
  $obj->connect();

  if ( $_POST )
    $obj->write($_POST);

  echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>

  </body>

</html>