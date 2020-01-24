<?php
    require 'array.php';
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
<body>
 

  <form action="prosesbarang.php" method="post"> 
        <div class =" uk-flex uk-padding ">
      <div class="uk-card uk-card-default uk-width-1-2@m uk-padding">
        <img src="<?= $barang[$id]['img'] ?>" alt="" width="100%;" >
      </div>
      <div class="uk-card uk-card-default uk-width-1-2@m uk-padding  ">
        <h1 class=" uk uk-heading-medium"><?=$barang[$id]['nama'] ?></h1>
        <h3>Harga :</h3>
        <p style="color:black; font-size:30px;"><?= "Rp " . number_format($barang[$id]['harga'],2, ",","." )?></p>
         <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas illo numquam? Vitae, natus corporis, 
         voluptates architecto illum quisquam enim asperiores 
        </p>
      <input type="number" name="jumlah" class="uk-input uk-width-1-3" required min="1" >
      <input type="hidden" name="id" value="<?= $id ?>"> 
      <br><br>
        <button type="submit" style="box-shadow : 5px 5px 26px rgba(45, 52, 54,.3);" class="uk-button uk-button-default">BUY NOW</button>
      </div>

      </div>
      </form>


</body>
</html>




