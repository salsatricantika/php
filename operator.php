<html>
    <head>
        <title>belajar operator</title>
    </head>
    <body>
        <?php
            $nilai_a = 10;
            $nilai_b = 20;
            // penjumlahan
            $hasil = $nilai_a + $nilai_b;
            $hasil2 = $nilai_b - $nilai_a;
            $hasil3 = $nilai_a * $nilai_b;
            $hasil4 = $nilai_b / $nilai_a
        ?>
        <p>
        <?php echo "Nilai A = " .$nilai_a?>
        </p>
        <p>
        <?php echo "Nilai B = " .$nilai_b?>
        </p>
        <p>
        <?php echo "Hasil penjumlahan Nilai A dengan Nilai B = " .$hasil?>
        </p>
        <p>
        <?php echo "Hasil pengurangan Nilai B dengan Nilai A = " .$hasil2?>
        </p>
        <p>
        <?php echo "Hasil perkalian Nilai A dengan Nilai B = " .$hasil3?>
        </p>
        <?php echo "Hasil pembagian Nilai B dengan Nilai A = " .$hasil4?>
        <br>
        <?php
        $a = 2;
        $b = 3;
        $hasilbagi = $a % $b;
        $pangkat = $a ** $b;
        echo "2 pangkat 3 = " .$pangkat;
        echo "<br> hasil bagi 2/3 = " .$hasilbagi;
        ?>


    </body>
</html>