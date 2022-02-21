<?php
     require_once ("proses.php");

     $query = mysqli_query($conn, "SELECT * FROM tb_buku");
     
     $result = array();
     while($row = mysqli_fetch_array($query)){
          array_push($result, array(
               'id' => $row['ID'],
               'judul_buku' => $row['Judul_buku'],
               'tahun_pembuatan' => $row['Tahun_pembuatan'],
               'penerbit' => $row['Penerbit'],
               'penulis' => $row['Penulis']
          ));
     }

     echo json_encode(
          array ('result' => $result)
     )
?>