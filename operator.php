<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP</title>
</head>
<body>
    <h1> Operator </h1>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
<hr>
    <h1> Kondisi IF </h1>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
<hr>
    <h1> Kondisi Switch </h1>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
        break;
        case "Monday":
            echo "Senin";
        break;
        case "Tuesday":
            echo "Selasa";
        break;
        default:
            echo "Sabtu";
        }
    ?>   
<hr>
    <h1>Perulangan For</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke : " . $i . '<br/>';
    }
    echo "Perulangan menurun dari 10 ke 1 <br/>";
    for ($i=10;$i>=1; $i--) {
        echo "Perulangan ke : " . $i . '<br/>';

    }
    ?>
<hr>
    <h1> Perulangan While </h1>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke:" . $i . '<br/>';
        $i++;
    }
    ?>
<hr>
    <h1> Perulangan Dowhile </h1>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    $i=1;
    do {
        echo "Perulangan ke:" . $i . '<br/>';
        $i++;
    } while ($i<=10);
    ?>
</body>
</html>