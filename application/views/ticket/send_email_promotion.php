<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow" />
    <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/dashboard.css">
    <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">

    <title><?PHP echo $title; ?></title>
  </head>
  <body>


    <div class="container-fluid">
      <div class="row">
        <?PHP
			$data['title'] = $title;
			$this->load->view ('ticket/left_menu',$data);
		?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1><?PHP echo $title; ?></h1>

          <?PHP $this->load->model('ticket_model');?>

<div class="comments">
		<div class="comment-wrap">
        <form action="active_mail_promotion" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">

          <table class="table">
            <tr>
              <th style="text-align:right;">TOPIC</th>
              <td>
                <input type="text" name="topic" id="topic" name="topic" class="form-control"/>
              </td>
            </tr>

            <tr>
              <th style="text-align:right;">DETAIL</th>
              <td>
								<textarea style="display: none;" id="detail" name="detail"  cols="30" rows="3" placeholder="Add Detail..."></textarea>
              </td>
            </tr>

            <tr>
              <th style="text-align:right;">ATTACH</th>
              <td>
                <input type="file" name="featured" id="featured" /><br>
              </td>
            </tr>
            <tr>
              <th></th>
              <td>
                <input type="submit" id="btn_add" name="btn_add" class="btn btn-primary" value="SUBMIT">
              </td>
            </tr>
          </table>
						</form>

            <div id="loading" style="display:none; position: fixed; top: 40%; left: 50%;" align="center" width="100%"><br>
            <IMG SRC="<?PHP echo base_url(); ?>assets/img/loading.gif" id="loading" WIDTH="150px" HEIGHT="150px" BORDER="0" ALT=""><br>
            กรุณารอสักครู่...</div>

        </main>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?PHP echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?PHP echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <script src="<?PHP echo base_url();?>/assets/js/ckeditor/ckeditor.js" ></script>
    <!--<script src="<?PHP echo base_url();?>/assets/js/ckfinder/ckfinder.js" ></script>-->
    <script src="<?PHP echo base_url();?>/assets/plugins/fceditor/fckeditor.js" type="text/javascript"></script>
    <script>
    function myHide()
    {
      //$("#loading").show();
    	document.getElementById('hidepage').style.display='block';//content ที่ต้องการแสดงหลังจากเพจโหลดเสร็จ
    	document.getElementById('hidepage2').style.display='none';//content ที่ต้องการแสดงระหว่างโหลดเพจ
    }
    </script>

    <script type="text/javascript">

    CKEDITOR.replace( 'detail', {

    });

    jQuery("textarea.FCKeditor").each(function(){
        var oFCKeditor = new FCKeditor(this.name);
        oFCKeditor.BasePath = '<?PHP echo base_url();?>assets/plugins/fckeditor/' ;
        oFCKeditor.Width = '100%';
        oFCKeditor.Height = '300';
        oFCKeditor.ReplaceTextarea() ;
    });
    </script>



	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>


  </body>
</html>
