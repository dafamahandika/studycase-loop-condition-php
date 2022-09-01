<?php

if(isset($_POST['cetak'])) {
     $start =  $_REQUEST['start'];
     $finish = $_REQUEST['finish'];

     if ($start < $finish) {
          for ($i = $start; $i <= $finish; $i++) {
               echo "Perulangan Ke- $i <br>";
          }
     } else {
          for ($i = $start; $i >= $finish; $i--) {
               echo "Perulangan Ke-$i <br>";
          }
     }
     }
?>