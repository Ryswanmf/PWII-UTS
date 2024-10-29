<?php
$conn = new mysqli("localhost", "root", "", "utspw2");

if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}

// General query function to fetch data
function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function insertData($table, $data)
{
  global $conn;
  $columns = implode(", ", array_keys($data));
  $values = implode("', '", array_values($data));

  $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
  return mysqli_query($conn, $sql);
}

function editMahasiswa($data)
{
  global $conn;

  $no = htmlspecialchars($data["no"]);
  $nama = htmlspecialchars($data["nama"]);
  $npm = htmlspecialchars($data["npm"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $prodi = htmlspecialchars($data["prodi"]);
  $angkatan = htmlspecialchars($data["angkatan"]);

  $query = "UPDATE mahasiswa SET 
            nama = '$nama', 
            npm = '$npm', 
            jurusan = '$jurusan', 
            prodi = '$prodi', 
            angkatan = '$angkatan' 
            WHERE no = $no";

  return mysqli_query($conn, $query);
}

function deleteData($table, $condition)
{
  global $conn;

  $sql = "DELETE FROM $table WHERE $condition";
  return mysqli_query($conn, $sql);
}

function closeConnection()
{
  global $conn;
  mysqli_close($conn);
}

function searchMahasiswa($table, $condition)
{
  global $conn;

  $query = "SELECT * FROM $table WHERE $condition";
  return query($query);
}