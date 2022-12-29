<?php
include '../../config.php';

#query insert product
$product_name = $_POST['product_name'];
$slug = strtolower(str_replace(" ","-", $_POST['product_name']));
$category = $_POST['category'];
$price = $_POST['price'];
$deskripsi = $_POST['deskripsi'];
$berat = $_POST['berat'];

mysqli_query($config,"INSERT INTO products VALUES(NULL, '$product_name', '$slug', '$category', '$price','$deskripsi','$berat')");

// query INSERT gambar
$query = mysqli_query($config, "SELECT products_id FROM products ORDER BY products_id  DESC LIMIT 1");
$result = mysqli_fetch_array($query);
$products_id  = $result['products_id'];

$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);


for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
	if($ukuran > $limit){
		header("location:index.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:index.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, '../../images/products/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($config,"INSERT INTO product_galleries VALUES (NULL, '$products_id', '$x')");
			header("location:index.php?alert=simpan");
		}
	}
}


