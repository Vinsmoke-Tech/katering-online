<?php

include 'view/header.php';
session_start();

?>

  
   
<body>
    
<!-- header section starts      -->

<header>

    <img src="images/logo.png" alt="" srcset="" style="width: 60px; height: 60px;"> 

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">paket</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="order.php">order</a>
    </nav>
    
    <div class="icons">
   
        <i class="fas fa-bars" id="menu-bars"></i>   
            
        
        <a href="user/profile.php?id_user=<?php echo $_SESSION['id_user']?>" class="fas fa-user"></a>
        <a href="logout.php " class="fas fa-power-off "></a>
    </div>
   

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class=" home-slider">

        <div class=" wrapper">

            <div class="slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>Catering bu dar</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#order" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/logo.png"  >
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->
 
<section class="dishes" id="dishes">

    <h3 class="sub-heading"> PAKET MENU</h3>
    <h1 class="heading"> Paling Populer </h1>

    <div class="box-container">

        <form action="beli.php" method="POST">
        <div class="row ">
            <div class="col  mb-5">
            
                <div class="card-deck mr-4" >   
           <table>
               <tr>

            
                   <?php 
                  include 'controler/koneksi.php';
                 
                  $kolom = 4;
                  $i = 0;
                  $sqlSelectWisata = mysqli_query($koneksi, "select * from paket");
                
                  foreach ($sqlSelectWisata as $key => $value) {
                      if($i >= $kolom) {
                          echo ' <tr> </tr> ';
                          $i = 0;
                        }               
                        
                        
                        $i++;
                                               ?>   
           <td>
           <div class="col mb-4" >
               <div class="card"  style="width: 25rem; height:38rem">  
                <img width = "250" height="150" value="<?=$value['foto_pak'] ?>" src="admin/images/<?=$value['foto_pak'] ?>" class="card-img-top" alt="...">
                
                <div class="card-body">
                
                    <h3 class="card-title"><?=$value['nama_pak'] ?></h3></br>
                    <h3 class="card-title"><?=$value['keterangan'] ?></h3></br>
                    <h3 class="card-title">Rp.<?=$value['harga_pak'] ?></h3></br>
                </div>
                
                <div class="card-footer">
                    <p class="card-text text-center"> <a   class = " btn btn-success ntm-lg" name="id_paket"  href ="user/beli.php?id_paket=<?php echo $value['id_paket']?>"> Beli </a>
                </div>
            </div>
            </div>
        </td>
            
            <?php
                  }
                  ?>
                
            </tr>
        </table>
    </div>
    
    
    
</div>
</form>
    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>best food in the country</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="user/map.php" class="btn"> MAP Lokasi</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> MENU KAMI </h3>
    <h1 class="heading"> Spesial Hari Ini </h1>

    <div class="box-container">

    <form action="beli.php" method="POST">
        <div class="row ">
            <div class="col  mb-5">
            
                <div class="card-deck mr-4" >   
           <table>
               <tr>

            
                   <?php 
                  include 'controler/koneksi.php';
             
                  $kolom = 4;
                  $i = 0;
                  $sqlSelectWisata = mysqli_query($koneksi, "select * from menu");
                
                  foreach ($sqlSelectWisata as $key => $value) {
                      if($i >= $kolom) {
                          echo ' <tr> </tr> ';
                          $i = 0;
                        }               
                        
                        
                        $i++;
                                               ?>   
           <td>
           <div class="col mb-4" >
               <div class="card"  style="width: 25rem; height:38rem">  
                <img width = "250" height="150" value="<?=$value['foto_men'] ?>" src="admin/images/<?=$value['foto_men'] ?>" class="card-img-top" alt="...">
                
                <div class="card-body">
                
                    <h3 class="card-title"><?=$value['nama_men'] ?></h3></br>
                    <h3 class="card-title"><?=$value['ket'] ?></h3></br>
                    <span class="price">  <h3 class="card-title">Rp.<?=$value['harga_men'] ?></h3></br></span>
                </div>
                
                <div class="card-footer">
                    <p class="card-text text-center"> <a   class = " btn btn-success ntm-lg" name="id_menu"  href ="user/beli_menu.php?id_menu=<?php echo $value['id_menu']?>"> Beli </a>
                </div>
            </div>
            </div>
        </td>
            
            <?php
                  }
                  ?>
                
            </tr>
        </table>
    </div>
    
    
    
</div>
</form>

    </div>

</section>

<!-- menu section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

  
              
                <div class="container">
       
    	
    	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
        <a href ="review.php" type="button" name="add_review"  class="btn btn-primary">See more Review</a>
    </div>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>


        </div>

    </div>
    
</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">Surakarta</a>
            <a href="#">Sragen</a>
            <a href="#">Boyolali</a>
            <a href="#">Sukoharjo</a>
            <a href="#">Karanganyar</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">dishes</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">reivew</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">09383838</a>
            <a href="#">02020</a>
            <a href="#">Bagas21@gmail.com</a>
            <a href="#">BagasBagas@gmail.com</a>
            <a href="#">Dempo, Mojosongo</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span>Mas Bagas</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<!--
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>
    -->


    <style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 5; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-4 pb-3"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right"><h5>On '+data.review_data[count].datetime+'</h5></div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>