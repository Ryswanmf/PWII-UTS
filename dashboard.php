<?php
include 'function.php';
session_start();

if (!isset($_SESSION['logged_in'])) {
  header("Location: login.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['add'])) {
    insertData('mahasiswa', [
      'no' => $_POST['no'],
      'nama' => $_POST['nama'],
      'npm' => $_POST['npm'],
      'jurusan' => $_POST['jurusan'],
      'prodi' => $_POST['prodi'],
      'angkatan' => $_POST['angkatan']
    ]);
  } elseif (isset($_POST['edit'])) {
    $editData = [
      'no' => $_POST['no'],
      'nama' => $_POST['nama'],
      'npm' => $_POST['npm'],
      'jurusan' => $_POST['jurusan'],
      'prodi' => $_POST['prodi'],
      'angkatan' => $_POST['angkatan']
    ];
    editMahasiswa($editData);
  } elseif (isset($_POST['delete_confirm'])) {
    deleteData('mahasiswa', "no = {$_POST['no']}");
  }
}

$students = query("SELECT * FROM mahasiswa ORDER BY no ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h2>Dashboard - Manajemen Mahasiswa</h2>
    <a href="logout.php" class="btn btn-danger float-right">Logout</a>

    <!-- Form Tambah Mahasiswa -->
    <h3>Tambah Mahasiswa</h3>
    <form method="POST">
      <input type="hidden" name="no" value="">
      <div class="form-group">
        <label>No</label>
        <input type="text" name="no" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="form-group">
        <label>NPM</label>
        <input type="text" name="npm" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Prodi</label>
        <input type="text" name="prodi" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Angkatan</label>
        <input type="text" name="angkatan" class="form-control" required>
      </div>
      <button type="submit" name="add" class="btn btn-primary">Tambah</button>
    </form>

    <!-- Table Mahasiswa -->
    <table class="table table-bordered mt-4">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NPM</th>
          <th>Jurusan</th>
          <th>Prodi</th>
          <th>Angkatan</th>
          <th>Action</th>
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
          <td>
            <!-- Edit Button -->
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
              data-target="#editModal<?= $student['no']; ?>">Edit</button>

            <!-- Delete Button -->
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
              data-target="#deleteModal<?= $student['no']; ?>">Delete</button>
          </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal<?= $student['no']; ?>" tabindex="-1" role="dialog"
          aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Mahasiswa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="edit" value="true">
                  <div class="form-group">
                    <label>No</label>
                    <input type="text" name="no" class="form-control" value="<?= $student['no']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $student['nama']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>NPM</label>
                    <input type="text" name="npm" class="form-control" value="<?= $student['npm']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $student['jurusan']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" name="prodi" class="form-control" value="<?= $student['prodi']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" value="<?= $student['angkatan']; ?>"
                      required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal<?= $student['no']; ?>" tabindex="-1" role="dialog"
          aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah Anda yakin ingin menghapus data mahasiswa <strong><?= $student['nama']; ?></strong> dengan
                    NPM <strong><?= $student['npm']; ?></strong>?</p>
                  <input type="hidden" name="no" value="<?= $student['no']; ?>">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" name="delete_confirm" class="btn btn-danger">Hapus</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>