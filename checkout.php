<?php

    require 'array.php';
  $showDate = date("Y.m.d");
  $_SESSION['date'] = $showDate;

  date_default_timezone_set("Asia/Makassar");
  $showTime = date("H:i");
  
  $_SESSION['time'] = $showTime; 

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

               
                </div>
               
                <dl class="uk-description-list uk-padding-large">
                    <dt>Your Name</dt>
                    <dd><?= $_SESSION['nama']?></dd>
                    <dt>Your Addres</dt>
                    <dd><?=$_SESSION['alamat']?></dd>
                    <dt> No Telepon</dt>
                    <dd><?= $_SESSION['telepon']?></dd><br>
                    
                    <a  class="uk-button uk-button-primary" href="#modal-center" uk-toggle>BUY NOW!</a>
                    </dl>


                   
                    
                    <!--invoice.php  -->
                    <div id="modal-center" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">  
                        <dl class="uk-description-list uk-description-list-divider">
                        <h1 class="uk-text-center">MELANJE.COM</h1>
                        <br>
                    <dt>Your Name</dt>
                    <dd><?= $_SESSION['nama']?></dd>
                    <dt>Your Addres</dt>
                    <dd><?=$_SESSION['alamat']?></dd>
                    <dt> No Telepon</dt>
                    <dd><?= $_SESSION['telepon']?></dd>
                    <dt>Tanggal</dt>
                    <dd><?= $_SESSION['date']?></dd>
                    <dt>Waktu</dt>
                    <dd><?= $_SESSION['time']?></dd><br>                  
                    </dl>
                    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
             
                <th class="uk-text-secondary"> Nama Barang</th>
                <th class="uk-text-secondary">Jumlah</th>
                <th class="uk-text-secondary">Total Harga</th>
             
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
               
                <td class="uk-text-left"><?= $nama?></td>
                <td class="uk-text-left"><?=$value?></td>
                <td class="uk-text-left"><?= "Rp " . number_format($totalHarga,2, ",","." )?></td>
              
                </tr>
                
                        
        
          

                <?php
                    $totalBarang += $value;
                    $totalHarga2 += $harga * $value;
                   endforeach;

                ?>
                
                <tr>
                    <td colspan="5" rowspan="5" style="padding-left:300px; font-family: 'Poppins', sans-serif;">Total
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

                <div>
                    
                    <h4 class="uk uk-text-center">Terima kasih Telah Berkunjung Ke MELANJE.COM</h4>

                </div>

    </div>
</div>

                   

    
</body>
</html>




