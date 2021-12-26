<html>
<head>
  <title>CRUD BERITA</title>
</head>
<body>
  <h1>BERITA</h1>
  <a href="simpan_berita.php">TAMBAH_BERITA</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>id_berita</th>
    <th>Judul</th>
    <th>tanggal</th>
    <th>isi berita</th>
    <th>gambar</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM berita_sekolah");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id_berita']."</td>";
    echo "<td>".$data['Judul']."</td>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['isi berita']."</td>";
    echo "<td>".$data['gambar']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>