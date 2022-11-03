
<?php
    include '../view/header.php';
?>
<style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap");
    *{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; 
    border:none;
    
    text-transform: capitalize;
}
    body {
    background: #27ae60;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #27ae60;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 14px;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: sol  1px #BA68C8
}

</style>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
                <?php
               
    include "../controler/koneksi.php"; 
   
    if(isset($_GET['id_user'])){
        $id_user=$_GET['id_user'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    
    $query    =mysqli_query($koneksi, "SELECT *FROM user WHERE id_user=$id_user");
    while($result = mysqli_fetch_array($query)){
        
?>

        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                    
                </div>
                <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                        value="<?=  $result['nama'] ?>"></div>
                <div class="col-md-6"><label class="labels">Alamat</label><input type="text" class="form-control"
                        value="<?=  $result['alamat'] ?>" ></div>
            
                <div class="col-md-6"><label class="labels">no hp</label><input type="text"
                        class="form-control"  value="<?=  $result['nohp'] ?>"></div>
           
          
                <div class="col-md-6"><label class="labels">kd_pos</label><input type="text" class="form-control"
                        value="<?=  $result['kd_pos'] ?>"></div>
              
            </div>
            <div class="mt-2 pb-3 text-center"><button class="btn btn-primary profile-button" type="button">Save
                    Profile</button></div>
        </div>
        
        </div>
                    
                <?php 
		}
		?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">

                <div class="row mt-2">
               
              
        </div>
    </div>
</div>

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
