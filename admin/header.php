<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Store </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>
   
</head>
<body>

	
	
	<!-- cek apakah sudah login -->


	<!-- cek apakah sudah login -->

<!-- header -->
    <div class="navbar navbar-default">
      
            <div class="navbar-header">
                    <div class="navbar-brand"> Outdoor_Shop</div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a id="pesan_sedia" href="#"data-toggle="modal" data-target="#modalpesan"> <span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
                           <li> <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"> <span class='glyphicon glyphicon-user'></span>&nbsp&nbsp </a> </li>
                           <li><a role="button" href="logout.php">  <span class='glyphicon glyphicon-log-out'></span>  Keluar</a></li>
                    
                    </ul>

            </div>
        </div>
    </div>   

<!--modal iput-->

    <div id="modalpesan" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
			
                </div>
                <div class="modal-body">

                    
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>						
 
                </div>
            </div>
        </div>
    </div>    

<!-- menubar -->

<div class="col-md-2">   

   
    <ul class="nav nav-pills nav-stacked">
                <li> <h4>core </h4> </li>
                <li class="active"> <a href="index.php"> <span class="glyphicon glyphicon-home"></span> Dashboard </a> </li>
                <li> <h4> interface </h4> </li>
                <li><a href="akun.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Akun </a></li>
                <li><a href="profile.php"><span class="glyphicon glyphicon-briefcase"></span>  Data User Login </a></li>
                <li><a href="paket.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Paket</a></li>
                <li><a href="menu.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Menu </a></li>  
                <li><a href="transaksi.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Transaksi Paket </a></li> 
                <li><a href="transaksi_menu.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Transaksi Menu </a></li> 
                <li><a href="bukti.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Bukti Pembayaran </a></li>
               

	
    </ul>
  </div>

<div class="col-md-10">