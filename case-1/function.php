<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CASE 1</title>
</head>
<body>
     
</body>
</html>
<?php
if(isset($_POST['cetak'])) {
     $a =  $_REQUEST['start'];
     $b = $_REQUEST['finish'];

     if ($a < $b) {
          for ($a; $a <= $b; $a++) {
               echo "Perulangan Ke- $a <br>";
          }
     } else {
          for ($a; $a >= $b; $a--) {
               echo "Perulangan Ke-$a <br>";
          }
     }
     }
?>