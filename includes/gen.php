<?php
function gen_promo() {
  $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $res = "";
  for ($i = 0; $i < 10; $i++) {
    $res .= $chars[mt_rand(0, strlen($chars)-1)];
  }
  return $res;
}

  $a = gen_promo();
  echo $a;

 /*$code = array();
 for ($x = 0; $x <= 10; $x++) {
    array_push($code, gen_promo());
}

  for ($x = 0; $x <= 10; $x++) {
    echo $code[$x].'</br>';
  }*/
?>
