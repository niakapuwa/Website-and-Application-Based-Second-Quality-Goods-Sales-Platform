<?php
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['id'])){
    
   include "../dbconnect.php";
   //kalo ada berarti lakukan perintah delete
   $kode = $_GET['id'];
   $sql = "DELETE FROM produk WHERE idproduk='$kode'";
   $kueri = mysqli_query($conn, $sql);
   if($kueri){
       //kalo deletenya berhasil
    //tampilkan alert dan pindah ke halaman daftar barang
    echo "<script>alert('Data barang berhasil dihapus');document.location='produk.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='produk.php'</script>";
   }
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Silahkan pilih barang yang ingin dihapus');document.location='produk.php'</script>";
}
?>