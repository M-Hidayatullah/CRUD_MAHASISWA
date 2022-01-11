<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Mahasiswa | Home</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
        background-color: #fff;
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEEEE;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Mahasiswa</h1><center>
      <center> <a href="tambah_mahasiswa.php">+ &nbsp; Tambah Mahasiswa</a></center>
    <br/>
    <table>
      <thead>
        <tr>
          <th style="text-align: center;">No</th>
          <th style="text-align: center;">Nama</th>
          <th style="text-align: center;">Email</th>
          <th style="text-align: center;">Nim</th>
          <th style="text-align: center;">Prodi</th>
          <th style="text-align: center;">Gambar</th>
          <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM mahasiswa ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo$row['prodi']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td style="text-align: center;">
              <a href="tambah_mahasiswa.php">+ &nbsp; Tambah</a> |
              <a href="edit_mahasiswa.php?id= <?php echo $row['id']; ?>">Edit</a> |
              <a href="detail_mahasiswa.php?id=<?php echo $row['id']; ?>">Detail</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>