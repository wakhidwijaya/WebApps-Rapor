<php <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Rapor - Online</title>
    </head>

    <body>
        <h1>Siswa Kelas</h1>
        <?php
        foreach ($siswa as $datasiswa) {
            echo $datasiswa['nama'];
        }
        ?>
    </body>

    </html>