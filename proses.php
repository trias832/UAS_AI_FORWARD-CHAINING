<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
//mencari id solusi berdasarkan gejala yang di inputkan
	$qry='select id from rule where ';
	array_pop($_POST);
	$rule_input=array();
	foreach ($_POST as $where) {
		$qry.=$where."=1 and ";
		array_push($rule_input,$where);
	}
	$qry.="1=1";
	$data=mysqli_query($conn,$qry);
	$id='';
	
//memindahkan rule dari database ke array
	$db_rule=mysqli_query($conn,"select * from rule");
	while ($d=mysqli_fetch_array($db_rule)) {
		$arr_rule[]=$d;
	}
//mencari value dari  yg memiliki nilai 1 dan akan di simpan dalam array rule
	$rule=array();
	for ($i=0; $i <sizeof($arr_rule) ; $i++) { 
		$key=array_keys($arr_rule[$i]);
		$val=$arr_rule[$i];
		$sub_rule=array();
		for($j=3;$j<(sizeof($key));$j+=2){
			if($val[$key[$j]]==1)
				$sub_rule[]=$key[$j];
		}
		$rule[]=$sub_rule;
	}
	$status=false;
//mencocokan gejala yang di inputkan user dengan rule yang ada
	for ($i=0; $i <sizeof($rule); $i++) {
		$result=($rule_input==$rule[$i]);
		if ($result) {
			$status=true;
		}
	}
	
//jika di temukan akan menampilkan data dari Solusi
	if($status==true){
		while ($d=mysqli_fetch_array($data)) {
			$id=$d['id'];
		}
	$car="select * from gejala_terpilih where id=$id";
  	$dk=mysqli_query($conn,$car);
		$cari="select * from solusi where id=$id";
		$db=mysqli_query($conn,$cari);
		while ($d=mysqli_fetch_array($db)) {
			
			$nama_solusi=$d['nama_solusi'];
			$solusi=$d['solusi'];
			 include 'hasil_tes.php';
		}
	}else{
		echo "<script>alert('Maaf Solusi untuk Gejala Yang Anda Inputkan Tidak Ditemukan');window.history.go(-1);</script>";
	}
	
	


}


?>
