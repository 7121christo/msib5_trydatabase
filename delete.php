<?php
 $db_connection = mysqli_connect("127.0.0.1", "root", "", "profil_teman") or die("Koneksi Gagal");
?>

<?php
if($_GET){
    $id = $_GET["id"];
    $sql = "DELETE FROM profil WHERE id ='".$id."'";
    $result = mysqli_query($db_connection,$sql);   
    
    echo '<h3 style="color:black;text-align:center;">Data Berhasil Dihapus</h3>';
}