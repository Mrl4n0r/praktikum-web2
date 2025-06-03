<?php
// Ambil ID dari parameter URL
$id = $_GET['id'];

// Ambil data matakuliah berdasarkan ID
$result = mysqli_query($con, "SELECT * FROM matakuliah WHERE id = $id");
while ($data = mysqli_fetch_array($result)) {
    $kode = $data['kode'];
    $nama = $data['nama'];
    $sks = $data['sks'];
    $semester = $data['semester'];
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="panel-title">Ubah Data Mata Kuliah</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-update" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="control-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" name="kode" value="<?php echo $kode; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">SKS</label>
                        <input type="number" class="form-control" name="sks" value="<?php echo $sks; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="semes
