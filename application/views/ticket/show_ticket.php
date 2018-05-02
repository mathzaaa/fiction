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

            if(isset($_GET['id_status_ticket'])){
              $id_status_ticket = $_GET['id_status_ticket'];
            }
            else{
              $id_status_ticket = "";
            }

           ?>
          <div><p>Department</p></div>
            <div>
              <select id="department" class="form-control" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
                <option value="">---All Departments---</option>
                <?PHP foreach ( $select_department as $row ): ?>
                <option value="<?PHP echo $row->id_department; ?>&id_status_ticket=<?PHP echo $id_status_ticket; ?>" <?PHP if($id_department == $row->id_department){echo "selected";}?>><?PHP echo $row->name_department; ?></option>
                <?php endforeach; ?>
              </select> </div> </br>

          <div><p>Status</p></div>
            <div>
              <select id="status_ticket" class="form-control" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
                <option value="&id_department=<?PHP echo $id_department; ?>">---All Status---</option>
                <?PHP foreach ( $select_status_ticket as $row ): ?>
                <option value="<?PHP echo $row->id_status_ticket; ?>&id_department=<?PHP echo $id_department; ?>" <?PHP if($id_status_ticket == $row->id_status_ticket){echo "selected";}?>><?PHP echo $row->name_status; ?></option>
                <?php endforeach; ?>
              </select> </div> </br>
           <table id="example" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Title</br>(หัวข้อ)</th>
                <th>Deadline</br>(วันส่งงาน)</th>
                <th>Start Date</br>(วันเริ่มงาน)</th>
                <th>Department</br>(แผนก)</th>
                <th>Status</br>(สถานะ)</th>
                <th>Date Edit</br>(วันที่แก้ไข)</th>
                <th>Recent Edit</br>(แก้ไขล่าสุด)</th>
                <th>Ticket Create</br>(วันที่สร้่าง)</th>
                <th>Print</th>
                <?PHP if($this->session->status_user == "ADMIN"){ ?><th>DEL</th><?PHP } ?>
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
                <td style="text-align:left;"><a href="<?PHP echo base_url();?>ticket/detail?ticket=<?PHP echo $r->id_ticket;?>" ><?PHP echo $r->project_name;?></a></td>
                <td><?PHP
                if($r->deadline != Null){
                  if($ck_date == $r->deadline){
                      echo "<font color='red'><b>".$this->ticket_model->get_date($r->deadline)."</b></font>";
                  }
                  else{
                      echo $this->ticket_model->get_date($r->deadline);
                  }

                }
                ?></td>
                <td><?PHP echo $this->ticket_model->get_date($r->start_date);?></td>
                <td><?PHP echo $r->name_department;?></td>
                <td><?PHP echo $r->name_status;?></td>
                <td><?PHP

                if($r->date_edit != Null){
                  if($ck_date == $r->date_edit){
                      echo "<font color='red'><b>".$this->ticket_model->get_date($r->date_edit)."</b></font>";
                  }
                  else{
                      echo $this->ticket_model->get_date($r->date_edit);
                  }

                }
                else{ echo ""; }
                ?></td>
                <td><?PHP
                if($r->date_edit != Null){
                  if($ck_date == $r->date_edit){
                      echo "<font color='red'><b>".$r->time_edit."</b></font>";
                  }
                  else{
                      echo $r->time_edit;
                  }

                }
                else{ echo ""; }
                ?></td>
                <td><?PHP echo $this->ticket_model->get_date($r->date_create);?></td>
                  <td><a href="<?PHP echo base_url();?>ticket/print_detail?ticket=<?PHP echo $r->id_ticket;?>" target="_blank"><img src="<?PHP echo base_url(); ?>assets/img/print.png" class="all-round"></a></td>
                <!--<td><a href="<?PHP echo base_url();?>ticket/edit/<?PHP echo $r->id_ticket;?>" >Edit</a></td>-->
                <?PHP if($this->session->status_user == "ADMIN"){ ?><td><a href="<?PHP echo base_url();?>ticket/ticket_del/<?PHP echo $r->id_ticket;?>"OnClick="return chkdel();" ><img src="<?PHP echo base_url(); ?>assets/img/cancel.png" class="all-round" width="26px" height="26px"></a></td><?PHP } ?>
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
                window.location.href="<?php echo base_url('ticket/show_ticket/?id_department='); ?>"+$(this).val();
            }
            else{
                window.location.href="<?php echo base_url('ticket/show_ticket/'); ?>"+$(this).val();
            }

      });
      $('#status_ticket').change( function() {
            if($(this).val() != ''){
                window.location.href="<?php echo base_url('ticket/show_ticket/?id_status_ticket='); ?>"+$(this).val();
            }
            else{
                window.location.href="<?php echo base_url('ticket/show_ticket/'); ?>"+$(this).val();
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
