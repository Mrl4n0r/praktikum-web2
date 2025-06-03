<?php
if (isset($_POST['Submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    // Asumsikan koneksi database sudah aktif dalam variabel $con
    $result = mysqli_query($con, "INSERT INTO matakuliah(kode, nama, sks, semester) 
    VALUES('$kode', '$nama', $sks, $semester)");

    header("Location:?page=matakuliah-show");
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Mata Kuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="control-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" name="kode" placeholder="Contoh: IF101" required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" name="nama" placeholder="Contoh: Algoritma dan Pemrograman" required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">SKS</label>
                        <input type="number" class="form-control" name="sks" min="1" max="6" required>
                    </div>
                    <div class="form-group">
                        <label for="semester" class="control-label">Semester</label>
                        <input type="number" class="form-control" name="semester" min="1" max="14" required>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>
