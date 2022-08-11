<?php

   // FUNCTION HANDS ON
      // $barangYusril = ["Robot", "kelereng", "hanphone"];
      function getYusrilItem($barangYusril){
      foreach ($barangYusril as $barang) {
        echo $barang;
      }
   }

   function deleteArray(){
      $barangYusril = ["Robot", "kelereng", "hanphone"];
      unset($barangYusril[0]);
      getYusrilItem($barangYusril);
   }

   //tampilkan isi fungsi getYusrilItem
  // getYusrilItem();
     deleteArray();


   // FUNCTION WITH RETURN STATEMENT
   function getName(){
     return "saya suka belajar pemrograman";
   }
   //tampilkan fungsi
   echo getName();

 ?>
