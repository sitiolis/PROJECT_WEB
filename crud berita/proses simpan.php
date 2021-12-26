<html>
<head>
  <title>CRUD BERITA</title>
</head>
<body>
  <h1>BERITA</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>id_berita</td>
        <td><input type="int" name="id_berita"></td>
      </tr>
      <tr>
        <td>Judul</td>
        <td><input type="text" name="Judul"></td>
      </tr>
      <tr>
        <td>tanggal</td>
        <td>
            <td><input type="text" name="tanggal"></td>
        </td>
      </tr>
      <tr>
        <td>isi berita</td>
        <td><input type="text" name="isi berita"></td>
      </tr>
      <tr>
        <td>gambar</td>
        <td><textarea name="gambar"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="crudberita.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>

