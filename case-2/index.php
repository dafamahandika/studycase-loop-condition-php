
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CASE 2</title>
</head>
<body>
     <h1>Kalkulator IMT</h1>

     <form action="" method="post" autocomplete = "off">
          <label>Berat Badan :
               <input type="text" name="bb" required placeholder = "Masukan Berat Badan">
          </label>
          <br>
          <label>Tinggi Badan :
               <input type="text" name="tb" required placeholder = "Masukan Tinggi Badan">
          </label>
          <br>
          <button name = "hitung" >Hitung</button>

     </form>
</body>
</html>

<?php



if(isset ($_POST['hitung'])) {
     $tb = $_REQUEST['tb'];
     $bb = $_REQUEST['bb'];
     
     $tb /= 100;

     $imt = $bb / ($tb**2);

     $hasil = number_format($imt, 1);
     

}
?>