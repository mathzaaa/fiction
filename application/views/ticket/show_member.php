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
          <h1><?PHP echo $title;?></h1>
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

           <table id="example" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Department</th>
                <th>Major</th>
                <th>Status</th>
                <th>STATUS MAIL</th>
                <th>Active</th>
                <?PHP if($this->session->status_user == "ADMIN"){ ?>
                  <th>DEL</th>
                <?PHP } ?>
            </tr>
        </thead>
        <tbody>
		<?php $i=1;
    $this->load->model('ticket_model');
		foreach ( $query as $r ):
      $ck_date = date('Y-m-d');
      ?>
            <tr style="text-align:center;">
                <td><?PHP echo $i++;?></td>
                <td style="text-align:left;"><a href="<?PHP echo base_url();?>ticket/edit_member?token=<?PHP echo $r->token;?>&t=1" ><?PHP echo $r->name." ".$r->lname;?></a></td>
                <td><?PHP echo $r->email;?></td>
                <td><?PHP echo $r->name_department;?></td>
                <td><?PHP echo $r->name_major;?></td>
                <td><?PHP echo $r->status_user;?></td>
                <td><?PHP
                  if($r->status_mail == 0){
                    echo "Non Active";
                  }
                  else{
                    echo "Active";
                  }
                ?></td>
                <td><?PHP
                  if($r->status_appoval == 0){
                    echo "Non Active";
                  }
                  else{
                    echo "Active";
                  }
                ?></td>
                <?PHP if($this->session->status_user == "ADMIN"){ ?><td><a href="<?PHP echo base_url();?>ticket/member_del/<?PHP echo $r->id_user;?>"OnClick="return chkdel();" ><img src="<?PHP echo base_url(); ?>assets/img/cancel.png" class="all-round" width="26px" height="26px"></a></td><?PHP } ?>
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
            if($(this).val() != ''){
                window.location.href="<?php echo base_url('ticket/show_member/?id_department='); ?>"+$(this).val();
            }
            else{
                window.location.href="<?php echo base_url('ticket/show_member/'); ?>"+$(this).val();
            }

      });
			$('#example').DataTable();

			$("#ck").click(function(){
				alert('test');

			});
		});
	</script>

  </body>
</html>
