<?php
require 'array.php'

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
      

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <dl class="uk-description-list uk-description-list-divider">
                    <dt>Your Name</dt>
                    <dd><?= $_SESSION['nama']?></dd>
                    <dt>Your Addres</dt>
                    <dd><?=$_SESSION['alamat']?></dd>
                    <dt> No Telepon</dt>
                    <dd><?= $_SESSION['telepon']?></dd><br>
                    </dl>

    </div>
</div>

    
</body>
</html>




