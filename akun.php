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
  <body>
  <form action="controler/aksi_user.php" method="post">
    <!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content page-auth mt-5" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4">
              <h2>
                Memulai untuk Membeli <br>
                Katering Online
              </h2>
              <form class="mt-3">
                <div class="form-group">
                  <label>nama lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    aria-describedby="nameHelp"
                    name="nama"
                    
                  />
                </div>
                
                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" class="form-control" name="alamat" aria-describedby="passHelp"  />
                </div>
                <div class="form-group">
                <label>no hp</label>
                  <input type="text" class="form-control" name="nohp" aria-describedby="passHelp"  />
                </div>
                  <div class="form-group">
                  <label>kode pos</label>
                  <input type="text" class="form-control" name="kd_pos" aria-describedby="passHelp"  />
                </div>
                  <input
                    type="hidden"
                    class="form-control is-valid"
                    value="user"
                    name="level"
                    
                  />
                </div>
                
                </div>

                <center>

                  <button type="submit" class="btn btn-success  mt-4" >
                    Sign Up Now
                  </button>
                </center>
               
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
            <div class="credit"> copyright @ 2021 by <span>Mas Bagas</span> </div>
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
