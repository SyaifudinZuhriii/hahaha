
<center><h1 class="mt-4 mb-3">Data Anggota</h1></center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah Data
</button>
<!-- --------------------------------------------------------------------------------------------------- -->
<table class="table table-striped table-hover">
    <tr class="text-center">
        <th>No</th>
        <th>nis</th>
        <th>nama</th>
        <th>jk</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>id_kelas</td>
        <th>id_jurusan</th>
        <th>nomor_telepon</th>
        <th>alamat</th>
        <th>--action--</th>
    </tr>
    <?php
        $query = mysqli_query($koneksi,"SELECT * FROM anggota");
        $no = 1;
        foreach ($query as $row) {
    ?>
    <tr>
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td valign="middle"><?php echo $row['nis']; ?></td>
        <td valign="middle"><?php echo $row['nama']; ?></td>
        <td valign="middle"><?php echo $row['jk']=="L"?"Laki-laki":"Perempuan"; ?></td>
        <td valign="middle"><?php echo $row['tempat_lahir']; ?></td>
        <td valign="middle"><?php echo $row['tanggal_lahir']; ?></td>  
        <td valign="middle"><?php echo $row['id_kelas']; ?></td>
        <td valign="middle"><?php echo $row['id_jurusan']; ?></td>
        <td valign="middle"><?php echo $row['nomor_telepon']; ?></td>
        <td align="center" valign="middle"><?php echo $row['alamat']; ?></td>
        <td valign="middle">
        <a href="?page=anggota-delete&delete&id=<?php echo $row['id_anggota'];?>">
            <button class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></button>
        </a>
        <a href="?page=anggota-edit&edit&id=<?php echo $row['id_anggota'];?>">
            <button class="btn btn-warning"><i class="fas fa-edit">Update</i></button>
        </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<!-- ------------------------------------------------------------- -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ISI DATA DI SINI !!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="?page=anggota-insert"method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="nis" placeholder="NIS" require>
            </div>
            <div class="form-group mt-2">
              <input class="form-control" type="text" name="nama" placeholder="Nama Siswa" require>
            </div>
            <div class="form-group mt-2">
               <select class="form-control" name="jk">
                  <option value="">--Pilih jenis_kelamin--</option>
                  <option value="XIIRPL1"> laki</option>
                  <option value="XIIRPL2">perempuan</option>
                </select>
            </div>
            
            <div class="form-group mt-2">
              <input class="form-control" type="text" name="tempat_lahir" placeholder="tempat_lahir" require>
            </div>

            </div> 
            <div class="form-group mt-2">
               <span class="input-group-text"></span> 
               <input class="form-control" type="date" name="tanggal_lahir">
            </div>

            <div class="form-group mt-2">
               <select class="form-control" name="id_kelas">
                  <option value="">--Pilih id_kelas--</option>
                  <option value="111"> 101</option>
                  <option value="112">102</option>
                  <option value="221">103</option>
                </select>

                <div class="form-group mt-2">
               <select class="form-control" name="id_jurusan">
                  <option value="">--Pilih id_jurusan--</option>
                  <option value="111">XII RPL 1</option>
                  <option value="112">XII RPL 2</option>
                  <option value="645">XII RPL 3</option>
                </select>
            </div>

            <div class="form-group mt-2">
              <input class="form-control" type="text" name="nomor_telepon" placeholder=" No Telepon" require>
            </div>

            <div class="form-group mt-2">
              <textarea class="form-control" name="alamat" placeholder=" Alamat"></textarea>
            </div>
           
        <!-----------------------------------------------------------------------------------------------------------------  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success mt-2" type="submit" name="save">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>