<?php
  define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
  define('HOST','localhost');
  define('USERNAME', 'root');
  define('PASSWORD','');
  define('DB','eblog');
  $db = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
   
?>


