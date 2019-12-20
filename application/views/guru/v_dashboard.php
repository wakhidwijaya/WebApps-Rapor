<php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rapor - Online</title>
</head>
<body>
<h1>Guru</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($datadiri as $data_diri) { ?>
                <div>
                    <label>NIP</label>
                    <?php echo $data_diri['nip']?>
                </div>
                <div>
                    <label>Nama</label>
                    <?php echo $data_diri['nama']?>
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <?php if ($data_diri['jenis_kelamin'] = 0){
                        echo "Laki - Laki";
                        }else{
                        echo "Perempuan";
                    }
                    ?>
                </div>
                <div>
                    <label>Alamat</label>
                    <?php echo $data_diri['alamat']?>
                </div>
                <div>
                    <label>TTL</label>
                    <?php echo $data_diri['tempat_lahir']?>,
                    <?php echo date('d F Y', strtotime($data_diri['tanggal_lahir']))?>
                </div>
                <div>
                    <label>Mata Pelajaran</label>
                    <?php echo $data_diri['mapel']?>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>
