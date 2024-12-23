<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tracer Alumni</h1>
        <form id="alumniForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="job" name="job" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Tahun Lulus</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <h2 class="mt-5">Data Alumni</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pekerjaan</th>
                    <th>Tahun Lulus</th>
                </tr>
            </thead>
            <tbody id="alumniTable">
            </tbody>
        </table>
    </div>
<!-- Bagian bawah: footer -->
         <footer class="bg-primary text-white text-center py-4 mt-5">
            <p>&copy;2024 Website Tracer Alumni</p>
    </footer>
    <script>
        $(document).ready(function () {
            $('#alumniForm').submit(function (e) {
                e.preventDefault();

                // Ambil data dari form
                var name = $('#name').val();
                var email = $('#email').val();
                var job = $('#job').val();
                var year = $('#year').val();

                // menambah data ke tabel
                $('#alumniTable').append(
                    '<tr>' +
                    '<td>' + name + '</td>' +
                    '<td>' + email + '</td>' +
                    '<td>' + job + '</td>' +
                    '<td>' + year + '</td>' +
                    '</tr>'
                );

                // Bersihkan form
                $('#alumniForm')[0].reset();
            });
        });
        
    </script>
</body>
</html>
