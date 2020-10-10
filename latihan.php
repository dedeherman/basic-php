<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan</title>
</head>

<body>
  <h3 align="center"><u>Apa Itu PHP?</u></h3>​
  <p><b>PHP</b> adalah script untuk pemrograman script web server-side, script yang membuat dokumen <b>HTML</b> secara
    on the
    fly,
    dokumen <b>HTML</b> yang dihasilkan dari suatu aplikasi bukan dokumen <b>HTML</b> yang dibuat dengan menggunakan
    editor teks atau
    editor <b>HTML</b>.</p>​
  <p>Dengan menggunakan <b>PHP</b> maka maintenance suatu situs web menjadi lebih mudah. Proses update data dapat
    dilakukan
    dengan menggunakan aplikasi yang dibuat dengan menggunakan script <b>PHP</b>.​</p>
  <p><b>PHP/FI</b> merupakan nama awal dari <b>PHP</b>. <b>PHP</b> merupakan singkatan dari Personal Home Page dan FI
    adalah singkatan dari
    Form Interface. Dibuat pertama kali oleh Rasmus Lerdoff. <b>PHP</b>, awalnya merupakan program CGI yang dikhususkan
    untuk
    menerima input melalui form yang ditampilkan dalam browser web.</p>

  <div class="container" style="height: 1000px;">
    <img src="img/foto.jpg" alt="foto" style="width: 250px;">
    <h1>Bio Data</h1>
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>Dede Herman</td>
      </tr>

      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>Laki-Laki</td>
      </tr>

      <tr>

        <td>Alamat</td>
        <td>:</td>
        <td>Jakarta</td>
      </tr>

      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>Islam</td>
      </tr>

      <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>ngoding</td>
      </tr>

      <tr>
        <td>Cita-cita</td>
        <td>:</td>
        <td>Web Developper expert</td>
      </tr>

      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>STMIK ANTAR BANGSA</td>
      </tr>
    </table>
    <br><br><br><br><br><br><br><br>
    <!-- tugas 3 -->
    <div style="font-size: 17px; margin-left: 200px;">
      <?php

      echo ('<h1 align="center">Data Peminjaman Buku Perpustakaan</h1>');

      echo ('<img align="center" src="img/buku.png"><br><br>');


      $nim = "2010005";
      $nama = "Dede Herman";
      $kelas = "1.1B Teknik Informatika";
      $kode_buku = "B0012";
      $nama_buku = "Pemrograman PHP";
      $lama = "2 Hari";

      echo "NIM Peminjam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp \t = $nim<br>";
      echo "Nama Peminjam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; = $nama<br>";
      echo "Kelas Peminjam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; = $kelas<br>";
      echo "Kode Buku yang dipinjam = $kode_buku<br>";
      echo "Nama Buku yang dipinjam = $nama_buku<br>";
      echo "Lama Peminjaman &nbsp; &nbsp; &nbsp &nbsp &nbsp; &nbsp; = $lama<br><br>";

      echo "**Apabila pengembalian buku melewati batas maka akan dikenakan denda**<br><br><br><br><br><br><br><br>";
      ?>
    </div>
    <!-- end tugas 3 -->

  </div>
</body>

</html>