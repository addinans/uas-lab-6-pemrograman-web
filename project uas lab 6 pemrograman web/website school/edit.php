<!--Data siswa untuk Edit data-->
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
<h3>Edit Data Siswa</h3>
<?php
include('koneksikan.php');
//id didapatkan dari link edit data yang bersumber dari id didatabase
$id=$_GET['id'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
 <tr>
  <td>NIS</td>
  <td>:</td>
  <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"required></td>
 </tr>
 <tr>
  <td>Nama Lengkap</td>
  <td>:</td>
  <td><input type="text" name="nama" size="30" value="<?php echo $data['nama'];?>"required></td>
 </tr>
 <tr>
  <td>Kelas</td>
  <td>:</td>
  <td>
   <select name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X" <?php if($data['kelas']=='X'){echo'selected';}?>>X</option>
    <option value="XI" <?php if($data['kelas']=='XI'){echo'selected';}?>>XI</option>
    <option value="XII" <?php if($data['kelas']=='XII'){echo'selected';}?>>XII</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>Jurusan</td>
  <td>:</td>
  <td>
   <select name="jurusan" required>
    <option value="">Pilih Jurusan</option>
    <option value="RPL" <?php if($data['jurusan']=='RPL'){echo'selected';}?>>Rekayasa Perangkat Lunak</option>
    <option value="TKJ" <?php if($data['jurusan']=='TKJ'){echo'selected';}?>>Teknik Komputer dan Jaringan</option>
    <option value="MM" <?php if($data['jurusan']=='MM'){echo'selected';}?>>Multimedia</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td></td>
  <td><input type="submit" name="simpan" value="Simpan"></td>
 </tr>
</table>
</form>

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
                        <li>Copyright © 2023 Yogi Noviana (211301137) & Addina Nabilah (211401140) </li>
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