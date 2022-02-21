<?php
     require "proses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>REST API</title>

     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <div class="content">
          <div class="judulb">
               <div class="judul">
                    <h1>BUKU</h1>
               </div>
          </div>

          <div class="btmenu">
               <button type="button" class="btn btn-primary" id="btnmi">Input data</button>
               <button type="button" class="btn btn-primary" id="btnmo">Lihat data</button>
               <button type="button" class="btn btn-primary" id="btnmh">Hapus data</button>
               <div class="clear"></div>
          </div>

          <!-- ============================input============================= -->
          <div class="input" id="ip">
               <form action="" method="POST">
                    <div class="input-group flex-nowrap">
                         <span class="input-group-text" id="addon-wrapping">Input</span>
                         <input name="jb" type="text" class="form-control" placeholder="Judul buku" id="ipjb" aria-describedby="addon-wrapping">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                         <span class="input-group-text" id="addon-wrapping">Input</span>
                         <input name="tp" type="text" class="form-control" placeholder="Tahun pembuatan" id="iptp" aria-describedby="addon-wrapping">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                         <span class="input-group-text" id="addon-wrapping">Input</span>
                         <input name="pn" type="text" class="form-control" placeholder="Penerbit" id="ippn" aria-describedby="addon-wrapping">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                         <span class="input-group-text" id="addon-wrapping">Input</span>
                         <input name="ps" type="text" class="form-control" placeholder="Penulis" id="ipps" aria-describedby="addon-wrapping">
                    </div>
                    <br>
                    <button name="adddt" type="submit" class="btn btn-primary" id="btninput">Submit</button>
               </form>
          </div>

          <!-- =================================tampil=============================== -->

          <div class="tampil" id="tm">
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Penerbit</th>
                              <th scope="col">Penulis</th>
                         </tr>
                    </thead>

                    <tbody>
                         <?php
                         $ambildata = mysqli_query($conn, "select * from tb_buku");
                         while($data = mysqli_fetch_array($ambildata)){
                              $i = $data['ID'];
                              $Nj = $data['Judul_buku'];
                              $Tp = $data['Tahun_pembuatan'];
                              $Pn = $data['Penerbit'];
                              $Ps = $data['Penulis'];
                         ?>
                         <tr>
                              <td><?=$i;?></td>
                              <td><?=$Nj;?></td>
                              <td><?=$Tp;?></td>
                              <td><?=$Pn;?></td>
                              <td><?=$Ps;?></td>
                         </tr>
                         <?php
                         }
                         ?>
                    </tbody>
               </table>      
          </div>
          
          <!-- ====================================hapus=================================== -->
          
          <div class="hapus" id="hp">
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Judul buku</th>
                              <th scope="col">Hapus</th>
                         </tr>
                    </thead>

                    <tbody>
                         <?php
                         $hapusdata = mysqli_query($conn, "select * from tb_buku");
                         while($datah = mysqli_fetch_array($hapusdata)){
                              echo "
                              <tr>
                                   <td>$datah[ID]</td>
                                   <td>$datah[Judul_buku]</td>
                                   <td><a href='?hps=$datah[ID]'>Hapus</td>
                              </tr>";
                         }
                         ?>
                    </tbody>
               </table>      
          </div>
     </div>
     
     <?php
          if(isset($_GET['hps'])){
               mysqli_query($conn, "delete from tb_buku where ID='$_GET[hps]'");
               
               echo "<meta http-equiv=refresh content=1;URL='index.php'>";
          }
     ?>

     <script src="javascript.js"></script>
     <script src="sweetalert.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>