<?php include "koneksi.php"; $articleID = $_GET['artikel_id']; 
$perintah="DELETE FROM articles WHERE articleID =\"$artikel_id\""; 
$hasil= mysqli_query($db,$perintah); 
if ($hasil) { 
echo "Artikel berhasil dihapus<br>"; echo "<a href=\"edit_articles.php\">Back</a>"; } 
else { echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL."; }
 ?>