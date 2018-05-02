<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="<?PHP echo base_url(); ?>assets/img/logo.png" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="<?PHP echo base_url(); ?>assets/img/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option" id="language">
                        <option value="english" <?PHP if($this->session->language == "english"){echo "selected";} ?>>English </option>
                        <option value="lao" <?PHP if($this->session->language == "lao"){echo "selected";} ?>>Lao </option>
                        <option value="th" <?PHP if($this->session->language == "th"){echo "selected";} ?>>Thai </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="<?PHP echo base_url(); ?>assets/img/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="blog.html">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Single <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Community<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.html">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div id="div1"></div>
<script>
$(document).ready(function(){

    $("#language").change(function(){
      //alert($("#language").val());
        $.ajax({
				   type: "POST",
				   url: "home/switchLanguage",
				   cache: false,
				   data: "language="+$("#language").val(),
				   success: function(msg){
               location.reload();


             //$("#div1").html(msg);
					 //alert(msg);
					/* $("p").append(msg);*/
				   }
				 });
    });


});
</script>
