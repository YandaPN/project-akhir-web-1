<?php 
require "../koneksi.php";

$id= $_GET["id"];
if($id){
    $query2 = "DELETE FROM riwayat_pemesanan WHERE id_user = '$id'";
    $query = "DELETE FROM user WHERE id_user = '$id'";
    mysqli_query($conn, $query2);
    mysqli_query($conn, $query);
echo "<script>
            alert('Data berhasil dihapus')
            document.location.href = '../crud_user.php';
          </script>";
}
?>