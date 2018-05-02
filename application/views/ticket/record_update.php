<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
          <h1>บันทึกอัพเดท CODE</h1>

           <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Social</th>
                <th>Code</th>
                <th>USER</th>
                <th>Major</th>
                <th>Status</th>
                <th>TIME</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tbody>
		<?php $i=1;
		foreach ( $query as $r ): ?>
            <tr>
                <td><?PHP echo $i++;?></td>
                <td><?PHP echo $r->type_link;?></td>
                <td><?PHP echo $r->type_code.$r->name_code.$r->code_link;?></td>
                <td><?PHP echo $r->name." ".$r->lname;?></td>
                <td><?PHP echo $r->major;?></td>
                <td><?PHP if($r->status == 0){echo "ยกเลิกใช้งาน";}else{echo "<font color='red'>ยืนยันใช้งาน</font>";}?></td>
                <td><?PHP echo $r->time_record_u;?></td>
                <td><?PHP echo $r->date_record_u;?></td>
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
			$('#example').DataTable();

			$("#ck").click(function(){
				alert('test');

			});
		});
	</script>

  </body>
</html>
