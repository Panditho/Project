<?php @session_start();
include "./config/database.php";
include 'component/com-kamar.php';
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

						<!-- =============================================== N A V B A R ====================================== -->


	<div class="car1 container" style="margin-top: -20px; width: 1200px;">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="./res/img/pic1.jpg" style="height: 400px; width: 1200px;">
			</div>

			<div class="item" role="listbox">		
				<img src="./res/img/pic2.jpg" style="height: 400px; width: 1200px;">	
			</div>

			<div class="item" role="listbox">
				<img src="./res/img/pic3.jpg" style="height: 400px; width: 1200px;">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
		</a>
		</div>
	</div>


<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default container " style="margin-top: 10px; width: 750px; border-radius: 0px; margin-left: 90px">
			<div class="panel-body">
				<div class="col-md-4">
					<?php foreach ($kamar as $kamar) { ?>
					<div class="panel panel-default hvr-overline-reveal">
						<div class="panel-body">
							<div class="autofit">
								<img src="./res/img/pic3.jpg" alt="..." class="img-thumbnail hvr-grow">
							</div>
						</div>
						<div class="panel-footer" style="border-radius: 0px;">
							<?php echo $kamar['nama_kamar_tipe']; ?>
						</div>
						<div class="panel-footer">
							Rp <?php echo number_format($kamar['harga_malam']); ?>
							 <a href="?module=kamar/room-detail<?php echo $kamar['id_kamar']; ?>" class="btn btn-default">Check</a>
						</div>
				</div>
			</div>
			</div>
				<?php } ?>
			
			<div class="col-md-4">
					<div class="panel panel-default hvr-overline-reveal">
						<div class="panel-body">
							<div class="autofit">
								<img src="./res/img/pic3.jpg" alt="..." class="img-thumbnail hvr-grow">
							</div>
						</div>
						<div class="panel-footer" style="border-radius: 0px;">
							ROOM NAME
						</div>
						<div class="panel-footer">
							RP. XXXX,- <button type="button" class="btn btn-default hvr-underline-reveal" ><a href="room-detail.php">Check</a></button>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="panel panel-default" style="margin-top: 10px; width: 400px; margin-left:  -59px; border-radius: 0px;">
		<div class="panel-heading" style="border-radius: 0px;"><h4 style="margin-left:120px">
			RESERVATION
		</div>
		<div class="panel-body">
			<form class="form-horizontal">
				<div class="form-group" style="width: 300px;">
					<label for="date" class="col-sm-2 control-label" >Check In</label>
					<div class="col-sm-10">
						<div class="input-group date" data-provide="datepicker" style="margin-left: 30px;" >
							<input type="text" class="form-control" placeholder="Check In">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group" style="width: 300px;">
					<label for="date" class="col-sm-2 control-label" >Check Out</label>
					<div class="col-sm-10">
						<div class="input-group date" data-provide="datepicker" style="margin-left: 30px;">
							<input type="text" class="form-control" placeholder="Check Out">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group" style="width: 300px;">
					<label for="room" class="col-sm-2 control-label">Room</label>
					<div class="col-sm-10">
						<select class="form-control" style="margin-left: 30px; border-radius: 0px;">\
							<option>------PILIH------</option>
							<?php foreach ($kamar_tipe as $kamar_tipe) { ?>
								<option value="<?php echo $kamar_tipe['id_kamar_tipe']; ?>"><?php echo $kamar_tipe['nama_kamar_tipe']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
					<button type="button" id="loading" data-loading-text="Checking..." class="btn btn-default hvr-underline-reveal" autocomplete="off" style="margin-left: 80px;">Check Availability</button>
			</form>
		</div>
	</div>
</div>
</div>

<!-- ===================== J S ============================================ -->
<script type="text/javascript" src="./res/js/jquery.min.js"></script>
<script type="text/javascript" src="./res/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./res/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
		  		$( '#loading' ).on( 'click' , function()
		  		{
		  			$( this ).button( 'loading' ).delay();
		  		});

		  	</script>
</body>
</html>

	
>