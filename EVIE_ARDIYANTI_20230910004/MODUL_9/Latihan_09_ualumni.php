<?php if (isset($row)) { ?>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
        <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?php echo $row['tahun_lulus']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto (biarkan kosong jika tidak diubah)</label>
        <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <button type="submit" class="btn btn-primary">Perbarui Data</button>
</form>
<?php } ?>
