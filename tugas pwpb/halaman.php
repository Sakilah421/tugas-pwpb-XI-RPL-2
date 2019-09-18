  <?php
    $nama_a="siti mariam";
    $umur_a= 16;
    $tinggi_badan_a= 165;
    $hobby_a="bernyanyi";

    $nama_b="siti nur shakila";
    $umur_b= 16;
    $tinggi_badan_b= 155;
    $hobby_b="dengerin musik";

    $nama_c="ramadhan vidho";
    $umur_c= 16;
    $tinggi_badan_c=155;
    $hobby_c="Grasstrack";
     
    $hasil = ($tinggi_badan_a + $tinggi_badan_b + $tinggi_badan_c)/3; 
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
      float: center;
      width: 200px;
      height: 300px;
      border: 2px solid;
      display: inline-block;
      margin: 50px;
      padding: 50px;
      background-color: white;
      box-shadow: 5px 5px 5px white;
    }
    .isi-kotak3{
      text-align: center;
      border:5px solid;
    }
    .conten3{
      border: 3px solid;
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
         <img src="mariam.jpg" width="150px" height="150px">
         <br>

         <ul>
     <div class="conten">
            <?php
              echo "<li> nama : $nama_a </li><br>";
              echo "<li> umur : $umur_a tahun </li><br>";
              echo "<li> tinggi : $tinggi_badan_a </li><br>";
              echo "<li> hobby : $hobby_a </li><br>";
              ?>
           </ul>
        </div>
     </div>
     <div class="profile_2">
      <div class="isi-kotak2">
         <img src="shakila.jpg" width="150px" height="150px">
         <br>
         <ul>
    <div class="conten2">
            <?php
            echo "<li> nama : $nama_b </li><br>";
            echo "<li> umur : $umur_b tahun </li><br>";
            echo "<li> tinggi : $tinggi_badan_b </li><br>";
            echo "<li> hobby : $hobby_b </li><br>";
            ?>
         </ul>
      </div>
   </div>
   <div class="profile_3">
      <div class="isi-kotak3">
         <img src="red.png" width="150px" height="150px">
         <br>
         <ul>
     <div class="conten3">
            <?php
              echo "<li> nama : $nama_c </li><br>";
              echo "<li> umur : $umur_c tahun </li><br>";
              echo "<li> tinggi : $tinggi_badan_c </li><br>";
              echo "<li> hobby : $hobby_c </li><br> ";
              ?>
           </ul>
        </div>
     </div>
  </body>
  </html>