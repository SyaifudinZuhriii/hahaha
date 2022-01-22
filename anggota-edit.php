<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data Anggota</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota = '$id'");
            foreach ($query as $row) {
        ?>
        <!-- -------------------------------------------------- -->
        <form action="?page=anggota-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id anggota yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_anggota'] ?>" class="form-control" type="hidden" name="id_anggota">
            <!-- --------------------------------------------------------------------------------------------------------- -->
            <!-- Modal -->
            <div class="form-group">
                <label for="">NIS</label>
                <input value="<?php echo $row['nis'] ?>" class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group mt-2">
            <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Gender</label>
                <select class="form-control" name="jk">
                    <option value="<?php echo $row['jk'] ?>"><?php echo $row['jk'] ?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tempat Lahir</label>
                <input value="<?php echo $row['tempat_lahir'] ?>" class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Tanggal Lahir</label>
                <input value="<?php echo $row['tanggal_lahir'] ?>" class="form-control" type="date" name="tanggal_lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Kelas</label>
                <select class="form-control" name="id_kelas" required>
                    <option value="<?php echo $row['id_kelas'] ?>"><?php echo $row['id_kelas'] ?></option>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM kelas");
                    foreach ($query as $kelas) {
                        ?>
                        <option value="<?php echo $row["id_kelas"]?>">
                            <option value="111">XII RPL 1</option>
                            <option value="112">XII RPL 2</option>
                            <option value="645">XII RPL 3</option>
                            
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Jurusan</label>
                <select class="form-control" name="id_jurusan" required>
                    <option value="<?php echo $row['id_jurusan'] ?>"><?php echo $row['id_jurusan'] ?></option>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM jurusan");
                    foreach ($query as $kelas) {
                        ?>
                        <option value="<?php echo $row["id_jurusan"]?>">
                        <option value="">--Pilih id_jurusan--</option>
                            <option value="111">XII RPL 1</option>
                            <option value="112">XII RPL 2</option>
                            <option value="645">XII RPL 3</option>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
                        
            <div class="form-group mt-2">
                <label for="">Nomor_Telepon</label>
                <input value="<?php echo $row["nomor_telepon"]?>" class="form-control" type="text" name="nomor_telepon" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
                </div>
            <br>
            <center>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>