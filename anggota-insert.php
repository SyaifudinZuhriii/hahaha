<?php
if(isset($_POST['save']))
{
    $nis              = $_POST['nis'];
    $nama             = $_POST['nama'];
    $jk               = $_POST['jk'];
    $tempat_lahir     = $_POST['tempat_lahir'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $id_kelas         = $_POST['id_kelas'];
    $id_jurusan       = $_POST['id_jurusan'];
    $nomor_telepon    = $_POST['nomor_telepon'];
    $alamat           = $_POST['alamat'];

    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$jk','$tempat_lahir','$tanggal_lahir','$id_kelas','$id_jurusan','$nomor_telepon','$alamat')");

//
if($query_insert) {
    ?>
        <div class="alert alert-success">
           Data Berhasil Disimpan !!!
        </div>
    <?php
    header('refresh:2; url=http://localhost/website2-main/admin.php?page=anggota');
}else{
  ?>
    <div class="alert alert-damgerous">
           Data Gagal Disimpan !!!
        </div>
    <?php
  }   
}
?>