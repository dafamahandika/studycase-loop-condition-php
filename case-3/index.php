<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CASE 3</title>
</head>
<body>
     <h1>Mengetahui Bilangan Prima atau Bukan Prima</h1>
     <form action = "" method = "post" autocomplete = "off">
          <label> Masukan Bilangan : 
               <input type="text" name="bil" placeholder = "Masukan Bilangan" required>
          </label>
          <button type="submit" name = "cek">Cek</button>
     </form>
     
</body>
</html>

<?php

if (isset ($_POST['cek'])) {
     $bil = $_REQUEST['bil'];
     $a = 0;

     for ($i = 1; $i <= $bil; $i++) {
          if ($bil % $i == 0 ) {
               $a += 1; 
          }
     }
     echo "$a <br>";
     if ($a == 2) {
          echo "$bil Prima";

     } else {
          echo "$bil Bukan Prima";
     }
}
     // if ($bil / 1 == $bil && $bil / $bil == 1) {
     //      echo "Prima <br>";
     // } else {
     //      for($i = 2 ; $i <= $bil / 2;  $i++) {
     //           if($bil % $i == 0 ) {
     //                echo "Bukan Bilangan Prima <br>";
     //           }
               
     //      }

     // for ($i = 1 ; $i <= $bil ; $i++) {
     //      $a = 0;
     //      for ($j = 1 ; $j <= $i; $j++) {
     //           if ($i % $j == 0 ) {
     //                $a++;
     //           }
     //      }
     //      if ($a == 2) {
     //           echo "$i Prima <br>";
     //      } else {
     //           echo "$i Bukan Prima <br>";
     //      }
     // }


// $no = 3;

// for ($i = 2 ; $i < $no; $i++) {
     //      echo "$i <br>";
     // }
     // $angka = 1;
     // $bool = true;
     // for ($i = 2; $i < $angka; $i++)
     // {
     //     if ($angka % $i == 0)
     //         $bool = false;
     // }
     // echo "Angka : $angka <br>";
     // echo $bool ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';

     // for($i=1;$i<=50;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengan 50 , i increment
     //      $a = 0; //variable a sama dengan 0
     //      for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 50 , j increment
     //          if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibagi
     //              $a++; //// variable a increment
     //          }
     //      }
     //      if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
     //       echo $i.' '; // mengeluarkan nilai var $i dengan whitespace
     //      }
     //  }
