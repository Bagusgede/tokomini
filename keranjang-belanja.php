<?php
    require 'array.php';
 
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

        <?php
        require 'index-navbar.php';

        ?>

<div class="uk-overflow-auto">
    <form action="" method="post"></form>
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class=" uk-text-secondary">Gambar</th>
                <th class="uk-text-secondary"> Nama Barang</th>
                <th class="uk-text-secondary">Jumlah</th>
                <th class="uk-text-secondary">Total Harga</th>
                <th class="uk-text-secondary">Delete </th>
            </tr>
        </thead>
        <tbody>
        <?php

                if (isset($_SESSION['barang']) || count($_SESSION['barang']) > 0):
                $totalBarang = 0;
                $totalHarga2  = 0;
                foreach ($_SESSION['barang'] as $key => $value):

                $nama = $barang[$key]['nama'];
                $harga = $barang[$key]['harga'];
                $img = $barang[$key]['img'];

                    
                $totalHarga= $harga * $value; 
                ?>
                <tr>
                <td><img class="uk-preserve-width " width="100" src="<?= $img ?>"></td>
                <td class="uk-text-left"><?= $nama?></td>
                <td class="uk-text-left"><?=$value?></td>
                <td class="uk-text-left"><?= "Rp " . number_format($totalHarga,2, ",","." )?></td>
                <td><button class="uk-text-center"><a href="deleted.php?id=<?= $key ?>" uk-icon="icon:close"></a></button></td>
                </tr>
                
                        
        
          

                <?php
                    $totalBarang += $value;
                    $totalHarga2 += $harga * $value;
                   endforeach;

                ?>
                
                <tr>
                    <td colspan="5" rowspan="5" style="padding-left:1000px; font-family: 'Poppins', sans-serif;">Total
                        Barang = <?= $totalBarang ?><br>Total Harga &nbsp; =
                        <?= "Rp " . number_format($totalHarga2, 2, ",", ".")?></td>
                </tr>
               
                
                
                
                
                <?php
                else:
                    echo 'Kosong';
                endif;

                ?>
        

            
        </tbody>
        


    </table>
  <div class=" uk-padding" >
                    <button class=" uk-button uk-button-secondary" ><a href="index.php">Tambah Keranjang</a> </button>
                </div>
               
</div>

<div class="uk-card uk-card-default  uk-card-small uk-width-1-3 uk-padding-small  uk-card-body uk-text-center">
                <form action="proses-data-pembeli.php" method="post">
                <div class="uk-margin">
                <h1>Your Information</h1>
                <div class="uk-inline">
                    <a class="uk-form-icon"uk-icon="icon: users"></a>
                    <input class="uk-input" name="namapembeli"  type="text" placeholder="" value="<?= isset($_SESSION['nama']) ? $_SESSION['nama'] : '';?>">
                </div>
            </div>

            <div class="uk-margin">
                <div class="uk-inline">
                    <a class="uk-form-icon "uk-icon="icon: location"></a>
                    <input class="uk-input" name="alamatpembeli" type="text" placeholder=" " value="<?= isset($_SESSION['alamat']) ? $_SESSION['alamat'] : '';?>">
                </div>
            </div>

                
            <div class="uk-margin">
                <div class="uk-inline">
                    <a class="uk-form-icon " uk-icon="icon: receiver"></a>
                    <input class="uk-input" name="teleponpembeli" type="text" placeholder="" value="<?= isset($_SESSION['telepon']) ? $_SESSION['telepon'] : '';?>">
                </div>
            </div>

                <button  type="submit" class=" uk-button uk-button-primary ">Buy Now</button>

                
                
                </form>
                </div>
    
</body>
</html>
