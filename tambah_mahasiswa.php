<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Mahasiswa | Tambah Mahasiswa</title>
    <center><a href="index.php"> &nbsp; Kembali</a><center>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
      center{
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: red;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Mahasiswa</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="email"/>
        </div>
        <div>
          <label>Nim</label>
         <input type="number" name="nim" />
        </div>
        <div>
          <label>Prodi</label>
         <input type="text" name="prodi" required="" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data Mahasiswa</button>
        </div>
        </section>
      </form>
  </body>
</html>