<?php

require("./php/config.php");

$query = "SELECT * FROM crud";
$result = mysqli_query($con, $query);

#iterate through the result set

// while($row = mysqli_fetch_assoc($result)){
//     echo "Nama Beasiswa : ".$row['nama_beasiswa']."<br>";
//     echo "Tujuan Beasiswa : ".$row['tujuan_beasiswa']."<br>";
//     echo "Tipe : ".$row['tipe']."<br>";
//     echo "Deadline : ".$row['deadline']."<br>";
//     echo "Link : ".$row['link']."<br>";
//     echo "<br>";
// }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prestasiku | BeasiswaKu</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
        #home .judul {
    font-size: 100px;
    font-weight: bolder;
    margin-bottom: 15px;
        }
        #home {
            background-image: url(../data/img/img-1.jpg);
            height: 90vh;
            background-position: center;
            background-size: cover;
        }

        #beasiswaku {
            background-image: url(../data/img/img-2.jpg);
            /* height: 100vh; */
            background-position: center;
            background-size: cover;

            /* Set tinggi elemen sebesar tinggi konten */
            /* min-height: 100vh; */
            height: 100%; 
        }

        #beasiswaku .judul {
            font-size :50px;
            font-weight: bolder;
        }

        #beasiswaku .caption {
            font-size: 20px;
        }

        #footer .kosongan {
            background-image: url(../data/img/img-2.jpg);
            background-size: cover;
            background-position: center;
        }
    </style>
  </head>
  <body>
    <div id="beasiswaku">
      <div class="container">
        <div class="row">
          <!-- title beasiswaku -->
          <div class="col-12 pt-5 mb-2">
            <h2 class="text-danger bold judul">
              Foundation Forge  <span class="text-dark">Class</span>
            </h2>
          </div>
          <div class="col mb-2">
            <!-- make button to add new beasiswa -->
            <a href="tambah.php">
              <button type="button" class="btn btn-primary">
              Tambahkan Kelas
            </button>
          </a>
          </div>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead class="table">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kelas</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 ?>
              <?php while($beasiswa = mysqli_fetch_assoc($result)) : ?>
              <tr>
                <th scope="row"> <?= $i ?></th>
                <td><?= $beasiswa['Kelas'] ?> </td>
                <td><?= $beasiswa['Harga'] ?></td>
                <td>
                  <a 
                    href="hapus.php?id=<?= $beasiswa['id']; ?>" 
                    onclick="return confirm('apakah ingin dihapus?')" 
                    style='color:white'
                    >
                    <button type="button" class="btn btn-danger">Delete</button>
                  </a>
                  <a href="update.php?id=<?= $beasiswa['id']; ?>">
                    <button type="button" class="btn btn-warning">Update</button>
                  </a>
                </td>
              </tr>
              <?php $i++ ?>
             <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
