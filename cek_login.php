<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']==1){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 1;
		// alihkan ke halaman dashboard admin
		header("location:1.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']==2){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 2;
		// alihkan ke halaman dashboard pegawai
		header("location:2.php");
	// cek jika user login sebagai pegawai
	 }else if($data['level']==3){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 3;
	  // alihkan ke halaman dashboard pegawai
	  header("location:3.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==4){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 4;
	  // alihkan ke halaman dashboard pegawai
	  header("location:4.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==5){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 5;
	  // alihkan ke halaman dashboard pegawai
	  header("location:5.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==6){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 6;
	  // alihkan ke halaman dashboard pegawai
	  header("location:6.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==7){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 7;
	  // alihkan ke halaman dashboard pegawai
	  header("location:7.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==8){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 8;
	  // alihkan ke halaman dashboard pegawai
	  header("location:8.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==9){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 9;
	  // alihkan ke halaman dashboard pegawai
	  header("location:9.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==10){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 10;
	  // alihkan ke halaman dashboard pegawai
	  header("location:10.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==11){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 11;
	  // alihkan ke halaman dashboard pegawai
	  header("location:11.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==12){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 12;
	  // alihkan ke halaman dashboard pegawai
	  header("location:12.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==13){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 13;
	  // alihkan ke halaman dashboard pegawai
	  header("location:13.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==14){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 14;
	  // alihkan ke halaman dashboard pegawai
	  header("location:14.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==15){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 15;
	  // alihkan ke halaman dashboard pegawai
	  header("location:15.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==16){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 16;
	  // alihkan ke halaman dashboard pegawai
	  header("location:16.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==17){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 17;
	  // alihkan ke halaman dashboard pegawai
	  header("location:17.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==18){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 18;
	  // alihkan ke halaman dashboard pegawai
	  header("location:18.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==19){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 19;
	  // alihkan ke halaman dashboard pegawai
	  header("location:19.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==20){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 20;
	  // alihkan ke halaman dashboard pegawai
	  header("location:20.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==21){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 21;
	  // alihkan ke halaman dashboard pegawai
	  header("location:21.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==22){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 22;
	  // alihkan ke halaman dashboard pegawai
	  header("location:22.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==23){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 23;
	  // alihkan ke halaman dashboard pegawai
	  header("location:23.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==24){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 24;
	  // alihkan ke halaman dashboard pegawai
	  header("location:24.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==25){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 25;
	  // alihkan ke halaman dashboard pegawai
	  header("location:25.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==26){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 26;
	  // alihkan ke halaman dashboard pegawai
	  header("location:26.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==27){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 27;
	  // alihkan ke halaman dashboard pegawai
	  header("location:27.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==28){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 28;
	  // alihkan ke halaman dashboard pegawai
	  header("location:28.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==29){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 29;
	  // alihkan ke halaman dashboard pegawai
	  header("location:29.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==30){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 30;
	  // alihkan ke halaman dashboard pegawai
	  header("location:30.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==31){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 31;
	  // alihkan ke halaman dashboard pegawai
	  header("location:31.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==32){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 32;
	  // alihkan ke halaman dashboard pegawai
	  header("location:32.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==33){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 33;
	  // alihkan ke halaman dashboard pegawai
	  header("location:33.php");

	// cek jika user login sebagai pegawai
	 }else if($data['level']==34){
	  // buat session login dan username
	  $_SESSION['username'] = $username;
	  $_SESSION['level'] = 34;
	  // alihkan ke halaman dashboard pegawai
	  header("location:34.php");


	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>