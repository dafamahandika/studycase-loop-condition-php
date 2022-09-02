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
          <button name = "cek">Cek</button>
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
     
     echo ( $a == 2 ) ? "$bil (Prima)" : "$bil (Bukan Prima)";
}
?>