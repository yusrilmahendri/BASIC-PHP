<?php

$umurSaya = 23;
$punyaKtp = true;

if ($umurSaya > 18 && $punyaKtp) {
  echo "boleh nntn film dewasa";
}else {
  echo "tidak diperbolehkan nntn";
}

$menguasaiPhp = true;
$menguasaiJs = false;

if ($menguasaiPhp || $menguasaiJs) {
  echo "cant create web";
}else {
  echo "cannot create web";
}


 ?>
