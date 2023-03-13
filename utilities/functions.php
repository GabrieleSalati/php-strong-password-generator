<?php

$length = $_GET["psw_length"];
$pw = '';

function generate_pw($length) {
  
  $password_length = $length;
  $pw = '';

  for($i = 0; $i < $password_length; $i++) {
    $pw .= chr(rand(0, 100));
  }
  return $pw;
}

?>

