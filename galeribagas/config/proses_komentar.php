<?php 
session_start();
include 'koneksi.php';

$fotoid = $_POST['fotoid'];
$userid = $_SESSION['userid'];
$isikomentar = $_POST['isikomentar'];
$tanggalkomentar = date('Y-m-d');

$query = mysqli_query($koneksi, "INSERT INTO komentarfoto VALUES('','$fotoid','$userid','$isikomentar','$tanggalkomentar')");

echo "<script>
location.href='../admin/index.php';
</script>";

if(isset($_POST['isikomentar'])) {
    $isikomentar = $_POST['isikomentar']; // Menggunakan 'hapus_komentar' yang sesuai dengan nama yang digunakan di atribut 'name'

    // Query untuk menghapus komentar dari database
    $query_delete = mysqli_query($koneksi, "DELETE FROM komentarfoto WHERE isikomentar = '$isikomentar'");

    // Periksa apakah penghapusan berhasil
    if($query_delete) {
        echo "<script>
        alert('Komentar berhasil dihapus.');
        window.location.href='../admin/index.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal menghapus komentar.');
        window.location.href='../admin/index.php';
        </script>";
    }
}
?>

 ?>