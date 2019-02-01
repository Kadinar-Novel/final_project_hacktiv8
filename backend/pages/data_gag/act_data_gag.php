<?php
	session_start();
	include "../../lib/conn.php";
	
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	if(isset($_GET['page']) && isset($_GET['act']))
	{
		$mod = $_GET['page'];
		$act = $_GET['act'];
	}
	else
	{
		$mod = "";
		$act = "";
	}

	if($mod == "data_gag" AND $act == "simpan")
	{
		//variable input
		
		$judul_pic= $_POST['judul_pic'];
		$pic = isset($_FILES['pic']['name']) ? $_FILES['pic']['name'] : NULL;
		
			
		$kategori= $_POST['kategori'];

		mysqli_query($conn, "INSERT INTO data_gag(
										judul_pic, 
										pic, 
										kategori)
									VALUES (
										'$judul_pic', 
										'$pic', 
										'$kategori')") ;
		
		
		move_uploaded_file($_FILES['pic']['tmp_name'], "../images/".$_FILES['pic']['name']);
		
		echo"<script>
			window.history.go(-2);
		</script>";
		
		
	}

	elseif ($mod == "data_gag" AND $act == "edit") 
	{
		//variable input
		$idGag = trim($_POST['id']);
		$judul_pic= $_POST['judul_pic'];
		$pic= $_POST['pic'];
		$kategori= $_POST['kategori'];

		mysqli_query($conn, "UPDATE data_gag SET 
										judul_pic= '$judul_pic', 
										pic= '$pic', 
										kategori= '$kategori' 
					WHERE idGag = '$_POST[id]'");

		echo"<script>
			window.history.go(-2);
		</script>";
	}

	elseif ($mod == "data_gag" AND $act == "hapus") 
	{
		mysqli_query($conn, "DELETE FROM data_gag WHERE idGag = '$_GET[id]'");
		echo"<script>
			window.history.back();
		</script>";	
	}

?>