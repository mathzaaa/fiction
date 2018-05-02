<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/bootstrap.min.css">
	<style type="text/css">
/* CSS Document */

body{margin-top: 50px; margin-bottom: 100px;}

/* equal card height */
.row-equal > div[class*='col-'] {
    display: flex;
    flex: 1 0 auto;
}

.row-equal .card {
   width: 100%;
}

/* ensure equal card height inside carousel */
.carousel-inner>.row-equal.active, 
.carousel-inner>.row-equal.next, 
.carousel-inner>.row-equal.prev {
    display: flex;
}

/* prevent flicker during transition */
.carousel-inner>.row-equal.active.left, 
.carousel-inner>.row-equal.active.right {
    opacity: 0.5;
    display: flex;
}


/* control image height */
.card-img-top-250 {
    max-height: 250px;
    overflow:hidden;
}


.card-header{color:dodgerblue}
	</style>
</head>
<body>
<a href='<?php echo base_url(); ?>fiction/switchLanguage/english'>English</a>
<a href='<?php echo base_url(); ?>fiction/switchLanguage/lao'>Lao</a>
<div>
<?PHP echo $error_email_missing; ?>
</div>
<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12">
            <h1><span style="color: crimson">Bootstrap 4 Card Slider</span> by webseotips</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-4">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower2</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <div class="card-header"><h3>flower1</h3></div>
                        <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	
	
</body>
</html>

<script src="<?PHP echo base_url();?>/assets/js/jquery-3.2.1.min.js" ></script>
<script src="<?PHP echo base_url();?>/assets/js/bootstrap.min.js" ></script>
	<script>
   (function($){
	   "use strict";
	   $('.next').click(function(){ $('.carousel').carousel('next');return false; });
	   $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
   })	
   (jQuery);
</script>
	
<script>
		$(document).ready(function() {
			

			$("#btn_add").click(function(){

				if($("#username").val() == ''||$("#password").val() == ''){
					alert('กรุณากรอกข้อมูลให้ครบด้วยคะ!!');
					exit();
				}
				$.ajax({
				   type: "POST",
				   url: "<?PHP echo base_url(); ?>ticket/login_ajax",
				   cache: false,
				   data: "username="+$("#username").val()+"&password="+$("#password").val(),
				   success: function(msg){
					  //$("#show").html(msg);

            if(msg == "ยินดีต้อนรับ"){
              window.location.href="<?php echo base_url('ticket/index'); ?>";
            }
            else{
              alert(msg);
              //window.location.href="<?php echo base_url('ticket/login'); ?>";
            }

					 //alert( "Data Call : " + msg);
					 //$("p").append(msg);
				   }
				 });

			});
		});
	</script>