<h3>BUKU TAMU</h3>
<hr>
<?php
include "Latihan_09_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $pesan = trim($_POST['pesan']);
    $errors = [];

    // Validasi data input
    if (strlen($nama) < 3 || strlen($nama) > 50) {
        $errors[] = "Nama harus antara 3 hingga 50 karakter.";
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (strlen($pesan) < 5 || strlen($pesan) > 500) {
        $errors[] = "Pesan harus antara 5 hingga 500 karakter.";
    }

    // Jika tidak ada error, simpan ke database
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO bukutamu (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $pesan);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Pesan berhasil dikirim.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        // Tampilkan error validasi
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}

// Ambil data buku tamu dari database
$sql = "SELECT * FROM bukutamu ORDER BY tanggal DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <table class='table table-bordered'>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . htmlspecialchars($row["nama"]) . "</td>
            <td>" . htmlspecialchars($row["email"]) . "</td>
            <td>" . htmlspecialchars($row["pesan"]) . "</td>
            <td>" . $row["tanggal"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<div class='alert alert-info'>Belum ada pesan.</div>";
}

$conn->close();
?>

<!-- Form Buku Tamu -->
<div class="mt-4">
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required maxlength="50" minlength="3">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" maxlength="100">
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required maxlength="500" minlength="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<!-- Navigasi -->
<nav class="col-md-2 bg-light p-3">
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="Latihan_09_index.php?menu=home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="Latihan_09_index.php?menu=about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="Latihan_09_index.php?menu=alumni">Data Alumni</a></li>
        <li class="nav-item"><a class="nav-link" href="Latihan_09_index.php?menu=bukutamu">Buku Tamu</a></li>
    </ul>
</nav>
