<?php
    require 'array.php';
?>


<!DOCTYPE html>
<html>

<head>
    <title>Melanje.COM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-padding-small">
            <h1 style="font-size; 30px; font-family : popins;"> MELANJE.COM</h1>
            <ul class="uk-navbar-nav">
                <li>
                    <a href="keranjang-belanja.php" class="uk-position-top-right uk-padding-small" uk-icon="icon : cart; ratio : 2;"
                        style="color : brown;"></a>
                </li>
            </ul>
            </ul>
        </div>
    </nav>




    <div class="uk-grid-medium uk-child-width-1-3 uk-text-center" uk-grid >

        <?php
            foreach ($barang as $key=>$value):
            $nama = $value['nama'];
            $harga = $value['harga'];
            $img = $value['img'];
     
        ?>
        <div class=" uk-text-center ">
            <div class="uk-card uk-card-hover uk-card-body uk-inline-clip uk-transition-toggle uk" tabindex="0">
                <img src="<?= $img ?>" alt="" width="100%" >
                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                    <p style="color:black;"> <b><?= $nama ?></b> </p>
                    <p style="color:black;"><?= "Rp " . number_format("$harga",2, ",","." )?></p>
                    <div>
                        <a href="detail.php?id=<?= $key ?>" class="uk-button uk-button-text" style="color:black;"
                            data-caption=" Detail Barang <?= $nama ?> ">Lihat
                            Detail</a>
                    </div>

                </div>
            </div>
        </div>

        <?php
            endforeach;
    ?>

    </div>



</body>

</html>