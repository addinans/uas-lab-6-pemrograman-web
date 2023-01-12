<!-- Mengkoneksikan tabel pendaftaran ke mysql-->
<?php include("koneksi.php"); ?>

<!DOCTYPE HTML>
<html>
	<head>
        <title>SMK AL-WASHLIYAH 02 PERDAGANGAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

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

				<header>
                    <h3>Daftar siswa yang sudah mendaftar</h3>
                </header>
                
                <nav>
                    <a href="index.php">[+] Tambah Baru</a>
                </nav>
                
                <br>
                
                <table class="table table-striped table-hover" class="table-success">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>nik</th>
                            <th>tempat_lahir</th>
                            <th>tanggal_ahir</th>
                            <th>jk</th>
                            <th>kewarganegaraan</th>
                            <th>agama</th>
                            <th>nama_ibu</th>
                            <th>email</th>
                            <th>no_telp</th>
                            <th>alamat</th>
                            <th>kode_pos</th>
                            <th>provinsi</th>
                            <th>kabupaten</th>
                            <th>kecamatan</th>
                            <th>pendidikan</th>
                            <th>sekolah</th>
                            <th>nilai_raport</th>
                            <th>prog1</th>
                            <th>prog2</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php

                    $sql="SELECT * fROM pendaftaran";
                    $hasil=mysqli_query($kon,$sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                        echo "<tr>";
                        
                        echo "<td>".$data['id_pendaftaran']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['nik']."</td>";
                        echo "<td>".$data['tempat_lahir']."</td>";
                        echo "<td>".$data['tanggal_lahir']."</td>";
                        echo "<td>".$data['jk']."</td>";
                        echo "<td>".$data['kewarganegaraan']."</td>";
                        echo "<td>".$data['agama']."</td>";
                        echo "<td>".$data['nama_ibu']."</td>";
                        echo "<td>".$data['email']."</td>";
                        echo "<td>".$data['no_telp']."</td>";
                        echo "<td>".$data['alamat']."</td>";
                        echo "<td>".$data['kode_pos']."</td>";
                        echo "<td>".$data['provinsi']."</td>";
                        echo "<td>".$data['kabupaten']."</td>";
                        echo "<td>".$data['kecamatan']."</td>";
                        echo "<td>".$data['pendidikan']."</td>";
                        echo "<td>".$data['sekolah']."</td>";
                        echo "<td>".$data['nilai_raport']."</td>";
                        echo "<td>".$data['prog1']."</td>";
                        echo "<td>".$data['prog2']."</td>";
                        
                        echo "</tr>";
                    }		
                    ?>
                    
                </tbody>
            </table>

                <p>Total: <?php echo mysqli_num_rows($hasil) ?></p>
				
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