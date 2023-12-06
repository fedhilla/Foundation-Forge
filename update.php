<?php 
require('./php/config.php');

// ambil data di url
$id = $_GET['id'];
// query berdasarkan id
$query = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con, $query);
$beasiswa = mysqli_fetch_assoc($result);
// var_dump($beasiswa);

if(isset($_POST['submit'])){

    if(update($_POST) > 0){
        echo "
        <script>alert('data berhasil diupdate');
        document.location.href='admin.php'
        </script>;
        ";
    } else {
        echo "
        <script>alert('data gagal diupdate');
        document.location.href='admin.php'
        </script>;
        ";
    }
};


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <!-- make form for input data -->
  <div class="container mt-5">
    <div class="row justify-content-center">  
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method='post' enctype='multipart/form-data'>
                        <input type="hidden" name='id' value='<?= $beasiswa['id']; ?>'>
                    <div class="mb-2">
                        <label for="nama_beasiswa" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="nama_beasiswa" name='nama' required 
                        value="<?= $beasiswa['Kelas']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="tujuan_beasiswa" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="tujuan_beasiswa" name='tujuan' required
                        value="<?= $beasiswa['Harga']; ?>">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary" name='submit'>submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>