
<!-- mengkoneksikan tabel data siswa ke mysql-->
<?php
 //nama host defaultnya dari XAMPP yaitu localhost
 $host="localhost";
 //default user dari XAMPP yaitu root
 $user="root";
 //tidak perlu menggunakan password
 $pass="";
 //nama database
 $name="web_school";
 //membuat koneksi
 $koneksi=mysqli_connect($host,$user,$pass,$name)or die("Koneksi ke database gagal!");
?>