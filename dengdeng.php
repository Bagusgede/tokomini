<?php
    // mulai session
    session_start();

    // url parameter
    $action = isset($_GET['action']) ? $_GET['action'] : NULL;
    $data   = isset($_GET['data']) ? $_GET['data'] : NULL;
    $jumlah = isset($_GET['jumlah']) ? $_GET['jumlah'] : NULL;

    // List barang yg ada
    $barang = [
        1 => ['name' =>'Barang 1', 'harga' => 1000],
        2 => ['name' =>'Barang 2', 'harga' => 2000],
        3 => ['name' =>'Barang 3', 'harga' => 3000],
    ];

    // session untuk nyimpen barang yg ditambahin
    $_SESSION['basket'] = isset($_SESSION['basket']) ? $_SESSION['basket'] : [];

    if ($action == 'add') {
        if (array_key_exists($data,$_SESSION['basket'])) {
            // kalau barang ada di session
            $totalSebelumnya = $_SESSION['basket'][$data];
            $totalBaru       = $totalSebelumnya + $jumlah;
            $_SESSION['basket'][$data]    = $totalBaru;
        }
        else {
            // kalau barang gak ada di session
            $_SESSION['basket'][$data] = $jumlah;
        }
    }
    elseif ($action == 'delete') {
        // hapus barang
        unset($_SESSION['basket'][$data]);
    }

    // session_destroy();
?>

<strong>List</strong><br>
<?php
    foreach ($barang as $key => $value):
?>
<?= $value['name'] ?> | <?= $value['harga'] ?> | <a href="index.php?action=add&data=<?= $key ?>&jumlah=1">Tambah 1</a> | <a href="index.php?action=add&data=<?= $key ?>&jumlah=10">Tambah 10</a><br>
<?php
    endforeach;
?>

<br>
<br>

<strong>Basket</strong><br>
<?php
    if (isset($_SESSION['basket']) || count($_SESSION['basket']) > 0):
        $totalBarang = 0;
        $totalHarga  = 0;
        foreach ($_SESSION['basket'] as $key => $value):
?>
<?= $barang[$key]['name'] ?> | Jumlah <?= $value ?> | <a href="index.php?action=delete&data=<?= $key ?>">Hapus</a><br>
<?php
            $totalBarang += $value;
            $totalHarga  += $value * $barang[$key]['harga'];
        endforeach;
?>
Total Barang = <?= $totalBarang ?><br>
Total Harga &nbsp; = <?= $totalHarga ?><br>
<?php
    else:
        echo 'Kosong';
    endif;
?>

<br>
<br>
<hr>
<?php if (isset($_SESSION['basket'])) echo json_encode($_SESSION['basket'], JSON_PRETTY_PRINT) ?><br>
<?php echo json_encode($barang, JSON_PRETTY_PRINT) ?>
