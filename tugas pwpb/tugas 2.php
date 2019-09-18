 <?php
    $nama_a="kubus";
    $volume_a= "sisi x sisi x sisi";
    $luas_a= "6 x (sisi x sisi)";
    $keliling_a="12 x rusuk";

    $nama_b="kerucut";
    $volume_b= "1/3 x 22/7xr2";
    $luas_b= "(22/7xr2)";
    $keliling_b="(22/7xrxs)";

    $nama_c="limas segi empat";
    $volume_c= "v 1/3 x luas alas x tinggi=" ;
    $luas_c="(22/7x r2)+(22/7x r x r x s)";


    $nama_d="balok";
    $volume_d= "panjang x lebar x tinggi x air" ;
    $luas_d="(22/7x r2)+(22/7x r x r x s)";

    ?>
<!DOCTYPE html>
  <html>
  <head>
  	<title>Selamat Datang</title>
  	<link rel="stylesheet" href="style.css">
  </head>
  <style type="text/css">
  	body{
      background-image: url(1234.jpg);
  		background-repeat: no-repeat;
  		background-size: cover;
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
      float:right;
    }
    .profile_1{
      float:left;
      width:200px;
      height:300px;
      border: 2px solid;
      display: inline-block;
      margin: 50px;
      padding: 50px;
      background-color: white;
      box-shadow: 5px 5px 5px white;
    }
    .isi-kotak{
      text-align: center;
      border: 5px solid;
    }
    .conten{
      border:3px solid;
    }
    .profile_2{
      width: 200px;
      height: 300px;
      border: 2px solid;
      display: inline-block;
      margin: 50px;
      padding: 50px;
      background-color: white;
      box-shadow: 5px 5px 5px white;
    }
    .isi-kotak2{
      text-align: center;
      border: 5px solid;
    }
    .conten2{
      border:3px solid;
    }
    .profile_3{
       float: right;
      width: 200px;
      height: 300px;
      border: 2px solid;
      display: inline-block;
      margin: 50px;
      padding: 50px;
      background-color: white;
      box-shadow: 5px 5px 5px white;
      text-align: center;

    }
    .isi-kotak3{
      text-align: center;
      border: 5px solid;
    }
   .content3{
    border: 5px solid;
   }
  </style>
  <body>
  	<div class="main">
   <header>
              <nav>
              	<ul>
              		<li><a href="index.php">Home</a></li>
              		<li><a href="halaman.php">Halaman 1</a></li>
                  <li><a href="tugas 2.php">tugas 2</a></li>
                  <li><a href="form.php">form</a></li>
              	</ul>
              </nav>  
              <br><br> 	
                   <form action="" method="post">
         <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian" autocomplete="off">
         <button type ="submit" name="cari">Cari</button>
       </form>
   </header>
</div>    
<br>
<br>
<br>
<br>
<div class="card">
   <div class="profile_1">
      <div class="isi-kotak">
         <img src="kubus.gif" width="150px" height="150px">
         <br>

         <ul>
     <div class="conten">
            <?php
              echo "<li> nama : $nama_a </li><br>";
              echo "<li> volume : $volume_a </li><br>";
              echo "<li> luas : $luas_a </li><br>";
              echo "<li> keliling : $keliling_a </li><br>";
              ?>
           </ul>
        </div>
     </div>
     <div class="profile_2">
      <div class="isi-kotak2">
         <img src="kerucut1.gif" width="150px" height="150px">
         <br>
         <ul>
    <div class="conten2">
            <?php
            echo "<li> nama : $nama_b </li><br>";
            echo "<li> volume : $volume_b </li><br>";
            echo "<li> luas : $luas_b </li><br>";
            echo "<li> keliling : $keliling_b </li><br>";
            ?>
         </ul>
      </div>
   </div>
   <div class="profile_3">
      <div class="isi-kotak3">
         <img src="segi ketupat.gif" width="150px" height="150px">
         <br>
         <ul>
     <div class="content3">
            <?php
              echo "<li> nama : $nama_c </li><br>";
              echo "<li> volume : $volume_c </li><br>";
              echo "<li> luas : $luas_c </li><br>";
              ?>

              <br>
           </ul>
        </div>
     </div>
  </body>
  </html>