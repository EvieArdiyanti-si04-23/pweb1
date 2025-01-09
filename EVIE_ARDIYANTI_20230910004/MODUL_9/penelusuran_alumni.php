<h3>Penelusuran Alumni</h3>
<hr>
<form method="GET" action="">
    <input type="hidden" name="menu" value="penelusuran_alumni">
    <div class="mb-3">
        <label for="query" class="form-label">Cari Alumni:</label>
        <input type="text" class="form-control" id="query" name="query" placeholder="Masukkan nama atau jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Cari</button>
</form>

<?php
// Include konfigurasi database
include "Latihan_09_config.php";

// Cek apakah parameter query telah diisi
if (isset($_GET['query'])) {
    // Escape input untuk mencegah SQL Injection
    $query = $conn->real_escape_string($_GET['query']);
    
    // Query pencarian menggunakan FULLTEXT
    $sql = "SELECT * FROM alumni WHERE nama LIKE '%$query%' OR jurusan LIKE '%$query%'";
    $result = $conn->query($sql);

    // Periksa apakah ada hasil
    if ($result->num_rows > 0) {
        // Tampilkan hasil dalam tabel
        echo "<table class='table table-bordered'>
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Foto</th>
            </tr>";
        
        // Loop melalui hasil pencarian
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . htmlspecialchars($row['nama']) . "</td>
                <td>" . htmlspecialchars($row['jurusan']) . "</td>
                <td>" . htmlspecialchars($row['tahun_lulus']) . "</td>
                <td><img src='" . htmlspecialchars($row['foto']) . "' width='50' alt='Foto'></td>
            </tr>";
        }

        echo "</table>";
    } else {
        // Jika tidak ada hasil
        echo "<p>Tidak ada data ditemukan.</p>";
    }
}
?>
