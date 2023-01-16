<html>
    <head>
        <title>belajar array</title>
    </head>
    <body>
        <h1>Belajar Array di PHP</h1>
        <hr>
        <?php
        // array adalah struktur data yang memiliki sekumpulan data dan memiliki index
            // cara membuat array
            $produk = array("mouse", "keyboard", "monitor");
            // cara menambahkan data kedalam array
            $produk[] = "CPU";
            $produk[] = "MOUSE PAD";
            Print_r($produk) . "<br>";

            // count digunakkan untuk menghitung jumlah data array
            echo count($produk) . "<br>";
            echo $produk[4];
        ?>
    </body>
</html>