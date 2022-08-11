<?php


   // COMPARISSON OPERATOR (  ==, !=, >, < >=, <= )
/* if (condition) {
     // Stetment
   }else{
     // statment
   }
*/

   // ex :
   $umurSaya = 23;

   // apabila umur saya < 23 maka saya adalah siswa
   if ($umurSaya < 23 ) {
     echo "saya siswa";
   }else{
     echo "saya mahasiswa";
   }


  $uangSaya = 5000;
  $hargaSosis = 1000;
  $hargaTelur  = 2000;

  if ($uangSaya >= $hargaSosis) {
    echo 'Beli sosis';
  }else if ($uangSaya >= $hargaTelur) {
    echo 'beli telur';
  }else {
    echo "beli menu lainnya";
  }

 ?>
