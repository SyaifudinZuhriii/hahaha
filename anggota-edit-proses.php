<!-- Proses Update -->
<?php
    $id = $_POST['id_anggota'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tpt_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $kelas = $_POST['id_kelas'];
    $jurusan = $_POST['id_jurusan'];
    $tlp = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];

    $query_update = mysqli_query($koneksi,"UPDATE anggota SET nis = '$nis', 
                                                            nama = '$nama',
                                                            jk = '$jk',
                                                            tempat_lahir = '$tpt_lahir', 
                                                            tanggal_lahir = '$tgl_lahir', 
                                                            id_kelas = '$kelas', 
                                                            id_jurusan = '$jurusan', 
                                                            nomor_telepon = '$tlp', 
                                                            alamat = '$alamat'
                                                            WHERE id_anggota = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/website2-main/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>