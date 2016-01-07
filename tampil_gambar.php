<html>
<body>
<p align="center">
  <?php
//Masukkan koneksi database disini
$namafolder="gambar/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("db_latihan")  or die("Gagal");
   $datatamu = mysql_query("select judul_gambar,nama_file from tb_gambar order by judul_gambar asc;") or die("Gagal :".mysql_error());  
   echo '<table width="400" align="center" border="1">';  
   echo '<tr>';  
   echo '<th>Judul Gambar</th>';  
   echo '<th>Gambar</th>';  
   echo '</tr>';  
   while ($rec=mysql_fetch_object($datatamu))   
   {      
     echo '<tr>';     
     echo '<td>'.$rec->judul_gambar.'</td>';     
     echo '<td>';
     //ini bagian memanggil file gambar
     echo '<img src="'.$rec->nama_file.'" alt="'.$rec->judul_gambar.'" title="'.$rec->judul_gambar.'" width="100" />';
     echo '</td>';     
     echo '</tr>';  
   }  
   echo '</table>';  
   mysql_close();//tutup koneksi database  
?>
</p>
<p align="center"><a href="Lat_simpan_gambar.php">&lt;&lt; Kembali</a></p>
</body>
</html>
