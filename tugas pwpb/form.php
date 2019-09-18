<!DOCTYPE html>
<html>
<head>
		<title>Selamat Datang</title>
  </head>
  <style type="text/css">
  	body{
  		background-repeat: no-repeat;
  	    background-size:cover;
  		background-image:url(1234.jpg);
  	}
  	ul{
  		float: left;
  		padding: 15px;
  		border:1px solid #fff;
  		margin-top: 10px;
  		box-shadow: 5px 5px 5px white;

  	}
  	li{
  		display: inline;
  		padding:5px;
  		border:1px;
  		margin-top: 5px;
  	}
  	li a{
  		padding:5px;
  		border:1px;
  		margin-top: 5px;
  		color:white;
  	}
  	form{
  		float: right;
  	}
  	dd{
  		color: white;
  		font-size: 30px;
  	}
  	p{
  		color: white;
  		font-size: 25px;
  	}
  	body form{
  		float:left;
  	}
  	h1{
  		text-align: center;
  		color: white;
  		font-size: 50px;
  	}
  	p{
  		text-align: center;
  		color: white;
  		font-size: 25px;
  	}
  	.main2{
  		color: white;
  	}
  	.p{
  		font-size: 25px;
  		color: white;
  	}
  	.div p{
  		font-size: 50px
  		color:white;

  	}
  </style>
</head>
<body>
		<header>
			<div id="box4">
			<center>
				<nav>
              	<ul>
              		<li><a href="index.php">Home</a></li>
              		<li><a href="halaman.php">Halaman 1</a></li>
              		<li><a href="tugas 2.php">tugas 2</a></li>
              		<li><a href="form.php">form</a></li>
              	</ul>
              </nav>  
		</div>
	</center>


	<div class="main2">
	<div id="box2">
		<br>
		<br>
		<br>
	<div class="div">
	<p>DATA IDENTITAS PESERTA DIDIK BARU</p>>
	<div class="p">
	<p>Tahun ajaran 2019/2020</p>

	<hr>
<form name="biodata" action="" method="POST">
	Nama Lengkap:
	<br>
	<input type="text" name="nmlngkp" maxlength="40" autocomplete="off" autofocus placeholder="nama lengkap">
	<br>
	<br>
	Nama Panggilan :
	<br> 
	<input type="text" name="nmpangg" maxlength="10" autocomplete="off" autofocus placeholder="nama panggilan">
	<br>
	<br>
	Password:
	<br>
	<input type="Password" name="psswrd" maxlength="8" autocomplete="off" autofocus placeholder="password">
	<br>
	<br>
	Jenis Kelamin : 
	<br>
	<input type="radio" name="jkel" value="Laki-Laki"> Laki-Laki
	<input type="radio" name="jkel" value="Perempuan"> Perempuan
	<br>
	<br>
	NISN :
	<br>
	<input type="number" name="nisn" maxlength="10" autofocus placeholder="Nomer NISN" autocomplete="off">
	<br>
	<br>
	NIK :
	<br>
	<input type="number" name="nik" maxlength="16" autofocus placeholder="Number NIK" autocomplete="off">
	<br>
	<br>
	Tempat Dan Tanggal Lahir :
	<br>
	<select name="ttlpeserta">
		<option value="">Tanggal</option>
		<? for($d=1;) $d <=31; $d++) ?>
	</select>
	<br>
	<br>
	Asal Sekolah :
	<br>
	<input type="text" name="aslsklh" autofocus placeholder="Asal sekolah" autocomplete="off">
	<br>
	<br>
	Nomor SKHUN :
	<br>
	<input type="number" name="skhun" autofocus placeholder="Nuber SKHUN" autofocus="off">
	<br>
	<br>
	Tanggal di terima disekolah ini :
	<br>
	<input type="date" name="tglsekolah" autofocus placeholder="Tanggal sekolah" autofocus="off">
	<br>
	<br>
	Jika Pindahan Sebutkan Alasan Pindahan Ke sekolah ini :
	<br>
	<textarea name="alasan" cols="20" rows="5"></textarea>
	<br>
	<br>
	Agama :
	<br>
	<input type="radio" name="agama" value="islam">Islam
	<input type="radio" name="agama" value="kristen">Kristen
	<input type="radio" name="agama" value="budha">Budha
	<input type="radio" name="agama" value="hindu">Hindu
	<input type="radio" name="agama" value="katolik">Katolik
	<br>
	<br>
	Alamat :
	<br>
	<textarea name="alamat" cols="20" rows="5"></textarea>
	<br>
	<br>
	Tinggal Bersama :
	<br>
	<input type="radio" name="tgglbersama" value="orangtua">Orang Tua
	<input type="radio" name="tgglbersama" value="paman">Paman
	<input type="radio" name="tgglbersama" value="tante">Tante
	<input type="radio" name="tgglbersama" value="Nenek">Nenek
	<input type="text" name="tgglbersama">Lainnya
	<br>
	<br>
	Transportasi Ke Sekolah :
	<br>
	<input type="radio" name="transport" value="motor">Motor <br>
	<input type="radio" name="transport" value="mobil">Mobil <br>
	<input type="radio" name="transport" value="angkot">Angkot <br>
	<input type="radio" name="transport" value="bus">Bus <br>
	<input type="radio" name="transport" value="ojek">Ojek <br>
	<br>
	Nomor Telepon :
	<br>
	<input type="number" name="notelp" autofocus placeholder="Nomer telpon" autocomplete="off">
	<br>
	<br>
	No.HP :
	<br>
	<input type="number" name="nohp" autofocus placeholder="Nomer HP" autocomplete="off">
	<br>
	<br>
	Nomor KPS (Kartu Perlindungan Sosial) bagi yang memiliki :
	<br>
	<input type="number" name="nokps" autofocus placeholder="Nomer KPS" autocomplete="off">
	<br>
	<br>
	Data Ayah Kandung :
	<br>
	Nama :
	<br>
	<input type="name" name="nmayah"autofocus placeholder="Nama ayah" autocomplete="off">
	<br>
	Tahun Lahir :
	<br>
	<input type="date" name="thnlahirayah"autofocus placeholder="tanggal lahir ayah" autocomplete="off">
	<br>
	Pendidikan :
	<br>
	<input type="text" name="pndkayah"autofocus placeholder="pendidikan ayah" autocomplete="off">
	<br>
	Pekerjaan :
	<br>
	<input type="text" name="pkrjnayah"autofocus placeholder="pekerjaan ayah" autocomplete="off">
	<br>
	Penghasilan Perbulan :
	<select>
		<option value="value" selected="Pilih Disini">---Pilih Disini---</option>
		<option>Rp100.000 - <=Rp1.000.000</option>
		<option>Rp1.000.000 - <=3.000.000</option>
		<option>Rp3.000.000 - <=Rp5.000.000</option>
		<option>Rp5.000.000 - <=Rp10.000.000</option>
		<option> >Rp10.000.000</option>
	</select>
	<br>
	<br>

	Data Ibu Kandung :
	<br> 
	Nama :
	<br>
	<input type="name" name="nmibu"autofocus placeholder="Nama Ibu" autocomplete="off">
	<br>
	Tahun Lahir :
	<br>
	<input type="date" name="thnlahiribu"autofocus placeholder="tanggal lahir ibu" autocomplete="off">
	<br>
	Pendidikan :
	<br>
	<input type="text" name="pndkibu"autofocus placeholder="pendidikan ibu" autocomplete="off">
	<br>
	Pekerjaan :
	<br>
	<input type="text" name="pkrjnibu"autofocus placeholder="pekerjaan ibu" autocomplete="off">
	<br>
	Penghasilan Perbulan :

	<select>

		<option value="value" selected="Pilih Disini">---Pilih Disini---</option>
		<option>Rp100.000 - <=Rp1.000.000</option>
		<option>Rp1.000.000 - <=3.000.000</option>
		<option>Rp3.000.000 - <=Rp5.000.000</option>
		<option>Rp5.000.000 - <=Rp10.000.000</option>
		<option> >Rp10.000.000</option>
	</select>
	<br>
	<br>
	<input id="tombol" type="submit" name="submit" value="Kirim Datamu!"> 
</form>
</div>
<br>
<br>

<?php
	if (isset($_POST['submit'])) {
		echo "Informasi Tentang". $_POST['nmlngkp'];
		echo "<br> Nama Lengkap anda adalah :".$_POST['nmlngkp'];
		echo "<br> Nama Panggilan anda :".$_POST['nmpangg'];
		echo "<br> password :".$_POST['psswrd'];
		echo "<br> Jenis Kelamin anda :".$_POST['jkel'];
		echo "<br> NISN Anda Adalah :".$_POST['nisn'];
		echo "<br> NIK anda adalah :".$_POST['nik'];
		echo "<br> TTL mu di :".$_POST['ttlpeserta'];
		echo "<br> Asal Sekolah anda dari :".$_POST['aslsklh'];
		echo "<br> Nomor SKHUN Anda Adalah :".$_POST['skhun'];
		echo "<br> Anda diterima disekolah ini pada tanggal :".$_POST['tglsekolah'];
		echo "<br> Alasan mengapa anda pindah kesekolah ini adalah :".$_POST['alasan'];
		echo "<br> Agama anda adalah :".$_POST['agama'];
		echo "<br> Alamat Rumah Anda di :".$_POST['alamat'];
		echo "<br> Anda Tinggal bersama :".$_POST['tgglbersama'];
		echo "<br> Transportasi yang anda naiki kesekolah :".$_POST['transport'];
		echo "<br> Nomor Telepon anda :".$_POST['notelp'];
		echo "<br> Nomor HP anda :".$_POST['nohp'];
		echo "<br> Nomor KPS anda :".$_POST['nokps'];
		echo "<br> Nomor HP Anda :".$_POST['nohp'];
		echo "<br> NIK anda adalah :".$_POST['nik'];

		echo "<br> Informasi Orang Tua dari ananda ". $_POST['nmlngkp'];
		echo "<br> Nama ayah anda :". $_POST['nmayah'];
		echo "<br> Tahun lahir ayah anda :". $_POST['thnlahirayah'];


	}
?>
</div>
</header>
</body>
</html>

