<?php

require 'array.php';
    $id = $_GET['id'];

    unset($_SESSION['barang'][$id]);

    header("location:keranjang-belanja.php");
?>