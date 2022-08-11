<?php

  // ARRAY HANDS ON
  $arrayNama = ["yusril", "mahendri", "ihza", "bagus", 0, false];
            //    0          1           2      3      4    5
  // how to akes array
  echo $arrayNama[1];

  //akes with foreach
  foreach($arrayNama as $arr) {
    echo $arr;
  }

  // ARRAY CASE
  $keranjangSaya = ["Telur", "Daging", "Sayur"];
  foreach ($keranjangSaya as $keranjang) {
    echo $keranjang;
  }

  $kelerengSaya =["merah", "hitam", "emas"];
  foreach ($kelerengSaya as $kelereng) {
      if ($kelereng == "emas") {
        echo "ini kelereng sangat mahal";
      }
      echo $kelereng;
  }

 ?>
