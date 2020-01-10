<section class="content">
    <div class="container-fluid">
        <div class="row">
            <table>
                <tr></tr>
                <?php foreach ($datasiswa as $siswa){
                    echo $siswa['nama'];
                    foreach ($datanilai as $nilai){
                        if ($siswa['nis'] == $nilai['id_siswa']){
                            echo $nilai['nilai'].'+'.$nilai['id_kd'];
                            echo '<br/>';
                        }
                    }
                }?>
            </table>
        </div>
    </div>
</section>
</div>