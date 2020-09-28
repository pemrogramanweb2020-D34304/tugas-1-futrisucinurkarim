<?php
if ($_GET):
    $bilangan1 = $_GET['bilangan1'];
    $bilangan2 = $_GET['bilangan2'];
    $operasi = $_GET['operasi'];
    
    switch ($operasi) {
        case 'tambah':
            $hasil = $bilangan1 + $bilangan2;
            break;
        case 'kurang':
            $hasil = $bilangan1 - $bilangan2;
            break;
        case 'kali':
            $hasil = $bilangan1 * $bilangan2;
            break;
        case 'bagi':
            $hasil = $bilangan1 / $bilangan2;
            break;
    }
 ?>
       <br>
        Hasil: <strong><?php echo $hasil ?></strong>
      
        <?php
    endif; ?>
