<!-- tampilan awal daftar siswa-->
<html>
<head>

 <title>SMK AW</title>
 <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header -->
<header id="header" class="alt">
    <img src="images/logojohh.png" alt="#menu">
    <a href="index.html" class="logo"><span>SMK AW Website</span></a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li class="active"> <a href="index.html">Home </a> </li>

        <li> <a href="blog.html">Blog</a> </li> 

        <li> <a href="about-us.html">About Us</a> </li> 

        <li> <a href="team.html">Teachers</a> </li>
        
        <li> <a href="index1.php">Data Siswa</a> </li> 

        <li> <a href="index.php">Pendaftaran</a> </li> 

        <li><a href="contact.html">Contact Us</a></li>
    </ul>
</nav>


<p><a href="index1.php">Daftar Siswa</a> / <a href="tambah.php">Tambah Data</a></p>
<h3>Data Siswa</h3>
<table cellpadding="5" cellspacing="0" border="1">
 <tr bgcolor="#CCCCCC">
  <th>No.</th>
  <th>NIS</th>
  <th>Nama Lengkap</th>
  <th>Kelas</th>
  <th>Jurusan</th>
  <th>Opsi</th>
 </tr>
<?php
include('koneksikan.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nis]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['kelas'].'</center></td>';
   echo'<td><center>'.$data['jurusan'].'</center></td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
                        <li>Copyright © 2020 Yogi Noviana (211301137) dan Addina Nabilah (211401140)</li>
						<li> <a href="">School</a></li>
						</ul>	
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>