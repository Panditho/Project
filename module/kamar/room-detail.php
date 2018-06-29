<?php @session_start();
include("./config/database.php");
include('component/com-kamar.php');


?>	
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<link rel="stylesheet" type="text/css" href="./res/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./res/css/hotel.css">
<link rel="stylesheet" type="text/css" href="./res/css/hover.css">
<link rel="stylesheet" type="text/css" href="./res/css/datepicker3.css">
<body class="body">	
	<div class="navbar navbar-default container" style="border-radius: 0px;">
		<div class="navbar-header">
			<a href="" class="navbar-brand">Name/Logo</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="" class="hvr-underline-reveal">Home</a></li>
			<li><a href="" class="hvr-underline-reveal">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<div class="container">
		<div class="jumbotron" style="background: white; border-radius: 0px;">
  <h3>Detail</h3>
 	<table class="table">
 	 
 	  <thead> 
 	  	<?php foreach ($kamar as $kamar) { ?>
 	  	<tr> 
 	  		<th>#</th> 
 	  	</tr>
 	  	<tr>
 	  		<th>Kamar</th><th><?php echo $kamar['nomor_kamar']; ?></th> 
 	  	</tr>
 	  	<tr>
 	  		<th>Tipe Kamar</th><th><?php echo $kamar['nama_kamar_tipe']; ?></th> 
 	  	</tr>
 	  	<tr>
 	  		<th>Harga/Malam</th><th>Rp <?php echo number_format($kamar['harga_malam']); ?></th>  
 	  	</tr>
 	  	<tr>
 	  		<th>Max.Dewasa</th><th><?php echo $kamar['max_dewasa']; ?> Orang</th>
 	  	</tr>
 	  	<tr>
 	  		<th>Max.Anak-Anak</th><th><?php echo $kamar['max_anak']; ?> Orang</th>
 	  	</tr>
 	  		<th>Status</th><th>
 	  			
							<?php

							if($kamar['status_kamar']=='TERSEDIA') {

								$status_kamar='green';
							}

							if($kamar['status_kamar']=='TERPAKAI') {

								$status_kamar='red';
							}

							if($kamar['status_kamar']=='KOTOR') {

								$status_kamar='yellow';
							}

							?>
							<span class="badge bg-<?php echo $status_kamar; ?>"><?php echo $kamar['status_kamar']; ?></span>
 	  		</th> 
 	  	<?php } ?> 

 	  </thead> 
 	  <tbody> 
 	  	<tr> 
 	  		
 	  	</tr> 
 	  </tbody>
 	</thead>
 	</table>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Book!</a></p>
</div>
	</div>
</body>
</html>