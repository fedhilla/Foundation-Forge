<?php 
 
 $con = mysqli_connect("localhost","root","","foundationforge", 8111) or die("Couldn't connect");

function tambah($data){
    global $con;

    $Kelas = htmlspecialchars($data['Kelas']);
    $Harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO crud VALUES('','$Kelas', '$Harga')";
    mysqli_query($con, $query);
    
    return mysqli_affected_rows($con);
};

function hapus($id){
    global $con;
    $query = "DELETE FROM crud WHERE id = $id";
    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
};

function update($data){
    global $con;

    $Kelas = htmlspecialchars($data['Kelas']);
    $Harga = htmlspecialchars($data['Harga']);
    $id = $data['id'];
    
    // kenapa harus ditulis semua? karena update akan me replace semua kolom
    $query = "UPDATE crud SET
                Kelas = '$Kelas',
                Harga = '$Harga',
                WHERE id=$id";
                
    mysqli_query($con, $query);
    
    return mysqli_affected_rows($con);
}
?>

