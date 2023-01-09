<html>
    <head>
        <title>latihan variable php</title>
    </head>
    <body>
        <?php
        $nama = "Salsa Tri Cantika";
        $kelas = "XI";
        $jurusan = "Pengembangan Perangkat Lunak dan Gim(PPLG)";

        ?>
        <h1 style="color:#A52A2A">BIODATA</h1>
        <hr>
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td style="background:#D2691E"><?="<b>$nama </b>"?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?=$kelas?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?=$jurusan?></td>
        </tr>
    </table>
    <hr>
    <p><i>Latihan variable dengan PHP</i></p>
    </body>
</html>