<?php
    include_once('koneksi.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Read Sewa</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>PERPUSTAKAAN</header>

        <div class="header-left">
        <a href="formSewa.php" class="btn">Tambah Sewa</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Nama Penyewa</th>
                <th>Tanggal Sewa</th>
                <th>Durasi Sewa</th>
                <th>Tanggal Selesai</th>
                <th>Action</th>
            </tr>

            <?php

            $query = mysqli_query($koneksi, 'SELECT * FROM sewa');

            $no = 1;
            while($row = mysqli_fetch_array($query)){

                $tanggal_selesai = date('y-m-d', strtotime($row['tanggal_sewa'] . " + $row[durasi] days"));

                echo "<tr>"; 
                echo "<td>$no</td>"; 
                echo "<td>$row[judul]</td>"; 
                echo "<td>$row[penyewa]</td>"; 
                echo "<td>$row[tanggal_sewa]</td>"; 
                echo "<td>$row[durasi]</td>"; 
                echo "<td>$tanggal_selesai</td>"; 
                echo "<td><a href='formEditSewa.php?id=$row[id]'>Edit</a>
                    <a id='edit' href='delete.php?id=$row[id]'>Hapus</a></td>"; 
                $no++; } 
            ?>
        </table>
    </body>

    </html>