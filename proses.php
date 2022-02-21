<?php
     // koneksi
     $conn = mysqli_connect("localhost","root","","db_buku");

     // upload
     if(isset($_POST['adddt'])){
          $jb = $_POST['jb'];
          $tp = $_POST['tp'];
          $pn = $_POST['pn'];
          $ps = $_POST['ps'];

          $addtable = mysqli_query($conn, "insert into tb_buku (Judul_buku, Tahun_pembuatan, Penerbit, Penulis) values('$jb','$tp','$pn','$ps')");
          
          header('Location:index.php');
          die();
     }
?>