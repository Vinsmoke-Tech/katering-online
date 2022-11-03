<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>katering online</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


</head>
  

  <style>
    body {
  font-family: "Poppins", sans-serif;

}

.page-content {
  margin-top: 100px;
}

footer {
  border-top: 1px solid #e4e4e4;
  margin-top: 150px;
}

.form-control {
  background-color: #f3f3f3;
  text-transform: lowercase;
}

  </style>
 
  <body>
  <?php 
  include 'controler/koneksi.php';
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasil"){
			echo "<div style='margin-bottom:-55px' class='alert alert-success' role='alert'><span class='glyphicon glyphicon-info-sign'></span>  Data Berhasil disimpan!!</div>";
		}
	}	
	?>

    <form action="controler/cek_login.php" method="post">
    <!-- Navigation -->

    <!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login ">
            <div class="col-6 col-md-5 col-lg-5 ">
              <img
                src="images/store.svg"
                alt=""
                class="w-100 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-12 col-md-5 col-lg-5 text-center">
              <h2>
                Website Katering Online
              </h2>
              <center>
              <form class="mt-3">
                <div class="form-group">
                <input type="text" class="form-control w-75" name="id_login" hidden />
                  <p>Username</p>
                  <input
                    type="text"
                    class="form-control w-75"
                    
                    aria-describedby="emailHelp"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <p>Password</p>
                  <input type="password" class="form-control w-75" name="password" />
                </div>
              
                <input type="submit" class="btn btn-success btn-block w-75 mt-4" value="Login">
                </center>
                <a class="btn btn-signup w-75 mt-2" href="register.php">
                  Sign Up
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">
            <div class="credit"> copyright @ 2022 by <span>Gregorius Bagas</span> </div>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.slim.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/navbar-scroll.js"></script>
  </body>
</html>
