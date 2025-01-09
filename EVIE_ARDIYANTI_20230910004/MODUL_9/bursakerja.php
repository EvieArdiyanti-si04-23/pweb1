<h3>Bursa Kerja</h3>
<?php
include 'Latihan_09_config.php';

// Ambil data dari tabel bursa_kerja
$sql = "SELECT * FROM bursa_kerja ORDER BY batas_waktu DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<thead class='thead-light'>
            <tr>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Lokasi</th>
                <th>Kualifikasi</th>
                <th>Batas Waktu</th>
            </tr>
          </thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['posisi']) . "</td>
                <td>" . htmlspecialchars($row['perusahaan']) . "</td>
                <td>" . htmlspecialchars($row['lokasi']) . "</td>
                <td>" . htmlspecialchars($row['kualifikasi']) . "</td>
                <td>" . htmlspecialchars($row['batas_waktu']) . "</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p class='text-center'>Tidak ada lowongan pekerjaan saat ini.</p>";
}
?>