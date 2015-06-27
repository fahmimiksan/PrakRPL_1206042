<?php
include("koneksi.php");

	
	if(!isset($_GET['idpertanyaan'])){
		//tampilkan pertanyaan pertama
		$sqlp = "select * from diagnosa where mulai='Y'";
		$rs=mysql_query($sqlp);
		
		$data=mysql_fetch_array($rs);
		
		//bentuk pertanyaan
		echo "<form>"; 
        echo "<CENTER><H1>KELOMPOK INTERPACE SWI MENGUNAKAN PHP</H1></CENTER>";
		echo "<CENTER><IMG SRC='virus.JPG' WIDTH='348' HEIGHT='257' BORDER=0 ALT=''></CENTER>";
		
		echo "<h1>DIAGNOSA</h1>";
		echo $data['solusi_dan_pertanyaan']."<br>";
		echo "<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."'>Ya<br>";
		echo "<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>";
		echo "<input type='submit' value='Lanjut >> ' >";		
		echo "</form>";
		
	}else{
		//tampilkan pertanyaan pertama
		$idsolusi=$_GET['idpertanyaan'];
		$sqlp = "select * from diagnosa where id=$idsolusi";
		$rs=mysql_query($sqlp);
		
		$data=mysql_fetch_array($rs);
		
		//bentuk pertanyaan
		echo "<form>"; 
        echo "<CENTER><H1>KELOMPOK INTERPACE SWI MENGUNAKAN PHP</H1></CENTER>";
		echo "<CENTER><IMG SRC='virus.JPG' WIDTH='348' HEIGHT='257' BORDER=0 ALT=''></CENTER>";
		
		
		echo "<h1>DIAGNOSA</h1>";
		echo "<h1>virus ini bernama</h1>";
		echo $data['solusi_dan_pertanyaan']."<br>";
		
		if($data['selesai']!="Y"){
			echo "<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."'>Ya<br>";
			echo "<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>";
			echo "<input type='submit' value='Lanjut >> ' >";		
		}else{
			//jika ingin menambah pertanyaan
		}
		echo "</form>";		
		echo "<p>SYSTEM PAKAR MENGUNAKAN PHP</p>";
		echo "</form>";		
		echo "<a href='http://localhost/virus/index.php?idpertanyaan=1'>HALAMAN AWAL</p>";
	}