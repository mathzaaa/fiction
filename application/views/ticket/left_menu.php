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

<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
	<?PHP if(isset($_SESSION['id_user'])){ ?>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link <?PHP if(isset($ac_title1)){echo $ac_title1;} ?>" href="<?PHP echo base_url(); ?>ticket/">DASHBOARD</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?PHP if(isset($ac_title2)){echo $ac_title2;} ?>" href="<?PHP echo base_url(); ?>ticket/show_ticket">TICKET</a>
            </li>

						<li class="nav-item">
              <a class="nav-link <?PHP if(isset($ac_title3)){echo $ac_title3;} ?>" href="<?PHP echo base_url(); ?>ticket/create">CREATE TICKET</a>
            </li>

						<li class="nav-item">
              <a class="nav-link <?PHP if(isset($ac_title6)){echo $ac_title6;} ?>" href="<?PHP echo base_url(); ?>ticket/manual">Manual</a>
            </li>

<?PHP if($this->session->status_user == "ADMIN"){ ?>
							<li class="nav-item">
								<a class="nav-link <?PHP if(isset($ac_title4)){echo $ac_title4;} ?>" href="<?PHP echo base_url(); ?>ticket/show_member">MEMBER</a>
							</li>
						<li class="nav-item">
              <a class="nav-link <?PHP if(isset($ac_title5)){echo $ac_title5;} ?>" href="<?PHP echo base_url(); ?>ticket/email_promotion">EMAIL PROMOTION</a>
            </li>
						<?PHP } ?>
          </ul>
					<?PHP } ?>
        </nav>
