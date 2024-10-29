<?php
require_once 'function.php';

$students = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Pencarian Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5 text-left">
    <div class="">
      <h1>Data Mahasiswa</h1>
    </div>
    <table class="table table-bordered mt-4 btn-primary">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NPM</th>
          <th>Jurusan</th>
          <th>Prodi</th>
          <th>Angkatan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
          <tr>
            <td><?= $student['no']; ?></td>
            <td><?= $student['nama']; ?></td>
            <td><?= $student['npm']; ?></td>
            <td><?= $student['jurusan']; ?></td>
            <td><?= $student['prodi']; ?></td>
            <td><?= $student['angkatan']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>