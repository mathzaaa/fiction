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
    <header>

    </header>

    <div class="container-fluid">
      <div class="row">
         <?PHP
			$data['title'] = $title;
			$this->load->view ('ticket/left_menu',$data);
		?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>DASHBOARD</h1>
          <?PHP
            if(isset($_GET['id_department'])){
              $id_department = $_GET['id_department'];
            }
            else{
              $id_department = "";
            }

           ?>
      <div><p>Department</p></div>
        <div>
          <select id="department" class="form-control" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
            <option value="">---All Departments---</option>
            <?PHP foreach ( $select_department as $row ): ?>
            <option value="<?PHP echo $row->id_department; ?>" <?PHP if($id_department == $row->id_department){echo "selected";}?>><?PHP echo $row->name_department; ?></option>
            <?php endforeach; ?>
          </select> </div> </br>
           <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="1" cellspacing="0" width="50%">
        <thead>
            <tr>
                <th style="background:#E6E6E6">Ticket</th>
                <th style="background:#E6E6E6">Number</th>
            </tr>
        </thead>
        <tbody>
		<?php $i=1;
		foreach ( $query as $r ):
      if(!empty($id_department)){
        $this->load->model('ticket_model');
        $r2 = $this->ticket_model->get_sr_dashboard($r->ST_id_status_ticket);
        $T_id_status_ticket = $r2->T_id_status_ticket;
        $ck_id_department = "&id_department=".$id_department;
      }
      else{
        $T_id_status_ticket = $r->T_id_status_ticket;
        $ck_id_department = "";
      }


      ?>
            <tr>
                <td><a href="<?PHP echo base_url(); ?>ticket/show_ticket/?id_status_ticket=<?PHP echo $r->ST_id_status_ticket; ?><?PHP echo $ck_id_department;?>"><?PHP echo $r->name_status;?></a></td>
                <td><a href="<?PHP echo base_url(); ?>ticket/show_ticket/<?PHP echo $r->ST_id_status_ticket; ?><?PHP echo $ck_id_department;?>"><?PHP echo $T_id_status_ticket;?></a></td>
            </tr>
		<?php endforeach; ?>

        </tbody>
    </table>
	<!-- <input type="button" id="ck" name="ck" value="click">-->

        </main>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?PHP echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?PHP echo base_url();?>/assets/js/bootstrap.min.js" ></script>

	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>

  <script language="JavaScript">
  function chkdel(){
    if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
    	return true;
    }else{
    	return false;
    }
  }
  </script>

	<script>


		$(document).ready(function() {
      $('#department').change( function() {
            //window.location.href="<?php echo base_url('ticket/index/'); ?>"+$(this).val();
            if($(this).val() != ''){
                window.location.href="<?php echo base_url('ticket/index/?id_department='); ?>"+$(this).val();
            }
            else{
                window.location.href="<?php echo base_url('ticket/index/'); ?>";
            }

      });


		/*	$('#example').DataTable();

			$("#ck").click(function(){
				alert('test');

			});*/
		});
	</script>

  </body>
</html>
