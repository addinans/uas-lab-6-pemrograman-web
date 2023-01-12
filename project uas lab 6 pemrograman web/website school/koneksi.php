<!-- mengkoneksikan table pendaftaran ke mysql-->
<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="web_school";

    $kon = mysqli_connect($host,$user,$password,$db);
        if (!$kon){
            die("Koneksi gagal:".mysqli_connect_error());
        }

?>