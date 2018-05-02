<link rel="shortcut icon" href="<?PHP echo base_url();?>/assets/img/favicon_naraya.ico" />
<?PHP
	if($title == "DASHBOARD"){ $ac_title1 = "active";}
	else if($title == "TICKET"){ $ac_title2 = "active";}
  else if($title == "CREATE TICKET"){ $ac_title3 = "active";}
	else if($title == "MEMBER"){ $ac_title4 = "active";}
	else if($title == "SEND EMAIL PROMOTION"){ $ac_title5 = "active";}
	else if($title == "Manual"){ $ac_title6 = "active";}
	else if($title == "สถิติผู้เยี่ยมชม"){ $ac_title7 = "active";}
	else if($title == "RECORD"){ $ac_title8 = "active";}
?>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">NaRaYa</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?PHP if(isset($ac_title1)){echo $ac_title1;} ?>">
              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/">DASHBOARD </a>
            </li>
						<?PHP if(!empty($this->session->id_user)){ ?>
            <li class="nav-item <?PHP if(isset($ac_title2)){echo $ac_title2;} ?>">
              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/show_ticket">TICKET </a>
            </li>

						<li class="nav-item <?PHP if(isset($ac_title3)){echo $ac_title3;} ?>">
              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/create">CREATE TICKET </a>
            </li>

						<li class="nav-item <?PHP if(isset($ac_title6)){echo $ac_title6;} ?>">
              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/manual">Manual </a>
            </li>

						<?PHP if($this->session->status_user == "ADMIN"){ ?>
							<li class="nav-item <?PHP if(isset($ac_title4)){echo $ac_title4;} ?>">
	              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/show_member">MEMBER </a>
	            </li>
							<li class="nav-item <?PHP if(isset($ac_title5)){echo $ac_title5;} ?>">
	              <a class="nav-link" href="<?PHP echo base_url(); ?>ticket/email_promotion">EMAIL PROMOTION </a>
	            </li>

						<?PHP } ?>


					</ul>



				 <div style="color:#fff"><a class="nav-link" href="<?PHP echo base_url(); ?>ticket/edit_member?token=<?PHP echo $this->session->token;?>" style="color:#fff;"><?PHP echo $this->session->name." ".$this->session->lname." : สาขา ".$this->session->major."&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></a></div>
				 <a href="<?PHP echo base_url(); ?>ticket/logout" style="color:#fff">LOGOUT </a>

			 <!--<form class="form-inline mt-2 mt-md-0">
				 <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			 </form>-->
		 </div>
		 <?PHP } ?>

      </nav>
