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
    <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/datepicker.css">
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
          <h1><?PHP echo $title; ?> </h1>
          <?PHP
            if(isset($_GET['id_department'])){
              $id_department = $_GET['id_department'];
            }
            else{
              $id_department = "";
            }

           ?>
      <!--<div><p>Department</p></div>
        <div>
          <select id="department" class="form-control" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
            <option value="">---All Departments---</option>
            <?PHP foreach ( $select_department as $row ): ?>
            <option value="<?PHP echo $row->id_department; ?>" <?PHP if($id_department == $row->id_department){echo "selected";}?>><?PHP echo $row->name_department; ?></option>
            <?php endforeach; ?>
          </select> </div> </br>-->

          <?PHP //echo form_open_multipart('ticket/add_ticket'); ?>

        <form action="add_ticket" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">

          <h2 align="center">Communications Brief</h2>


           <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
               <thead>
                  <tr>
                      <th width="20%"><font color="#0A6AF7">PROJECT NAME</font></th>
                      <td><input type="text" class="form-control " id="project_name" name="project_name" required></td>

                  </tr>
              </thead>
              <tbody>
              <tr>
                  <th><font color="#0A6AF7">Budget (if applicable)</font></th>
                  <td><input type="number"  id="budget" name="budget" style="width:60%"> BATH</td>
              </tr>
              </tbody>
          </table>

          <h2>BACKGROUND</h2>

          <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
              <thead>
                 <tr>
                     <td width="30%">
                         <div valign="top"><b><font color="#0A6AF7">BUSINESS OBJECTIVE</font></br>
                         What are you trying to achieve? (Sell more, raise awareness, launch new product)
                       </b>
                     </div>
                      <div style="color:#B40404;">
                        วัตถุประสงค์ของงานคืออะไร
                        (เพิ่มยอดขาย, ทำให้คนได้รู้จักกับเรามากขึ้น, โฆษณาสินค้าออกใหม่)

                      </div>
                    </td>

                     <td>
                      <table border="0.5">
                        <tr>
                          <th>
                            What is the business objective? What are the expected business results?
                            <div style="color:#B40404;">
                              เป้าหมายและวัตุประสงค์ของงาน ? คาดหวังอะไรจากงานนี้ ?
                            </div>
                          </th>
                        </tr>
                        <tr>
                          <td><textarea rows="4" cols="100%" class="form-control " id="business_objective" name="business_objective"></textarea></td>
                        </tr>
                      </table>
                     </td>
                 </tr>

                 <tr>
                     <td >
                         <div valign="top"><b><font color="#0A6AF7">TARGET</font></br>
                            Who do you want to talk to(the target consumer)?
                       </b>
                     </div>
                     <div style="color:#B40404;">
                       คุณต้องการสื่อสารกับกลุ่มเป้าหมายลูกค้าใด ?
                     </div>
                    </td>

                     <td>
                      <table border="0.5">
                        <tr>
                          <th>Describe the target consumer segment and/or shopper segment who needs/wants/believes/etc.
                            <div style="color:#B40404;">
                              โปรดระบุกลุ่มลูกค้าที่เป็นเป้าเหมาย โดยระบุ เพศ/ อายุ/ ความต้องการ/ และ พฤติกรรมของกลุ่มเป้าหมายนั้นๆ
                            </div>
                          </th>
                        </tr>
                        <tr>
                          <td><textarea rows="4" cols="100%" class="form-control" id="target" name="target"></textarea></td>
                        </tr>
                      </table>
                     </td>
                 </tr>
             </thead>
         </table>


         <h2>CREATIVE CONSIDERATIONS</h2>

         <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
             <tbody>
               <tr>
                   <th width="30%">
                     <font color="#0A6AF7">BRAND & VOICE</font>
                  </th>
                  <td>
                    <input type="text" class="form-control" id="brand_voice" name="brand_voice">
                  </td>
                <tr>
                    <td >
                        <div valign="top"><b><font color="#0A6AF7">MAIN IDEA</font></br>
What do you want to say? And what do you want your customer to take from your advertising?</br></br>

i.e Key Message of a promotions, or key message of new design, or is this Brand Building and Emotional to make them aware of a new brand?
                      </b>
                    </div>

                    <div style="color:#B40404;">
                      คุณต้องการจะสื่อสารอะไร ไปยังลูกค้า ?
                    </div>

                   </td>

                    <td>
                        <div><b>What is the single most important thing you want your target audience to take away with this communication? List additional communication points/features & benefits in order of priority.</b></div>
                        <div style="color:#B40404;">
                          สิ่งสำคัญหลักที่คุณต้องการให้กลุ่มเป้าหมายได้รับจากคุณ ?
                          ระบุเพิ่มเติมในส่วนของสิ่งที่ต้องการเพิ่มเติม ? (รายละเอียดอื่นๆของงาน)

                        </div>
                     <table border="1">

                       <tr>
                         <th width="18%"><font color="#0A6AF7">Single most important thing</font>
                           <div style="color:#B40404;">
                             สิ่งสำคัญหลัก
                           </div>
                         </th>
                         <td align="center">1</td>
                         <td><textarea rows="2" cols="100%" class="form-control" id="single_most" name="single_most"></textarea></td>
                      </tr>
                     <tr>
                       <th rowspan="3"><font color="#0A6AF7">Additional communication points:</font>
                         <div style="color:#B40404;">
                           รายละเอียดเพิ่มเติมอื่นๆ
                         </div>
                       </th>
                       <td align="center">1</td>
                       <td><textarea rows="2" cols="100%" class="form-control" id="additional_1" name="additional_1"></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">2</td>
                        <td><textarea rows="2" cols="100%" class="form-control" id="additional_2" name="additional_2"></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td><textarea rows="2" cols="100%" class="form-control" id="additional_3" name="additional_3"></textarea></td>
                      </tr>
                     </table>
                    </td>
                </tr>

            </tbody>
        </table>

      </br></br>

      <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
          <thead>
             <tr>
                 <td width="30%">
                     <div valign="top"><b><font color="#0A6AF7">MANDATORIES or CONSIDERATIONS</font>
                   </b>
                 </div>
                 <div style="color:#B40404;">
                   สิ่งที่ต้องคำนึงถึง
                 </div>
                </td>

                 <td>
                  <table border="0.5">
                    <tr>
                      <th>Identify bilingual, trilingual, legal requirements, logos, specific ideas, or elements (Trademark)
                        <div style="color:#B40404;">
                          โปรดระบุความต้องการอื่นๆ เช่น ต้องการทำงานออกมาสองภาษา/ หรือมากกว่าสองภาษา/  โลโก้/ ไอเดีย/ ความถูกต้องตามกฎหมาย/ และ องค์ประกอบอื่นๆ (เครื่องหมายการค้า)?
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td><textarea rows="4" cols="100%" class="form-control" id="mandatories" name="mandatories"></textarea></td>
                    </tr>
                  </table>
                 </td>
             </tr>

             <tr>
                 <td >
                     <div valign="top"><b><font color="#0A6AF7">DELIVERABLES</font></br>
                        PPT Deck, boards, 3-D rendering, disc, EPS file, PDF, AI, electronic transmission etc.
                   </b>
                 </div>
                 <div style="color:#B40404;">
                   ระบุรูปแบบไฟล์แนบสกุลต่างๆของงานที่ต้องการให้ทำออกมาเป็นรูปแบบใด เช่น สตอรี่บอร์ด หรือเป็นไฟล์ เป็นต้น
                 </div>
                </td>

                 <td>
                  <table border="0.5">
                    <tr>
                      <th>List all elements associated with this brief.
                        <div style="color:#B40404;">
                          โปรดระบุองค์ประกอบที่เกี่ยวข้องกับบรีฟงานนี้
                        </div></th>
                    </tr>
                    <tr>
                      <td><textarea rows="4" cols="100%" class="form-control" id="deliverables" name="deliverables"></textarea></td>
                    </tr>
                  </table>
                 </td>
             </tr>
         </thead>
     </table>

     <h2>MEETINGS & APPROVAL</h2>

     <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
         <thead>
            <tr>
                <td width="30%">
                    <div valign="top"><b><font color="#0A6AF7">KEY DATES</font></br>
                    List applicable Research Dates, Customer Meetings, Gate Dates, Internal Approval Dates, Launch Dates, Ship from Stock, or Other.
                  </b>
                </div>
                <div style="color:#B40404;">
                  กำหนดการตรวจงาน หรือ/ วันนัดดูงานระยะแรก/ วันกำหนดส่งงาน /หรือ วันนัดดูงานกับลูกค้า
                </div>
               </td>

                <td>
                 <table border="1" width="100%" height="100%">
                   <thead>
                   <tr align="center">
                     <th >DATE</th>
                     <th>EVENT</th>
                   </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td valign="middle"><input type="text" class="datepicker form-control" placeholder="Date" id="date_1" name="date_1" data-date-format="dd-mm-yyyy"></td>
                     <td><textarea rows="2" cols="100%" class="form-control" id="event_1" name="event_1"></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle"><input type="text" class="datepicker form-control" placeholder="Date" id="date_2" name="date_2" data-date-format="dd-mm-yyyy"></td>
                     <td><textarea rows="2" cols="100%" class="form-control" id="event_2" name="event_2"></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle"><input type="text" class="datepicker form-control" placeholder="Date" id="date_3" name="date_3" data-date-format="dd-mm-yyyy"></td>
                     <td><textarea rows="2" cols="100%" class="form-control" id="event_3" name="event_3"></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle"><input type="text" class="datepicker form-control" placeholder="Date" id="date_4" name="date_4" data-date-format="dd-mm-yyyy"></td>
                     <td><textarea rows="2" cols="100%" class="form-control" id="event_4" name="event_4"></textarea></td>
                   </tr>
                 </tbody>
                 </table>
                </td>
            </tr>

        </thead>
    </table>

    <h2>Timeline</h2>


     <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
         <thead>
            <tr>
                <th width="30%"><font color="#0A6AF7">Final Deadline of the artwork/project</font>
                  <div style="color:#B40404;">
                    กำหนดวันส่งงาน
                  </div></th>
                <td><input type="text" class="datepicker form-control" placeholder="Date" id="deadline" name="deadline" data-date-format="dd-mm-yyyy"></td>

            </tr>
        </thead>
        <tbody>
        <tr>
            <th><font color="#0A6AF7">Start Date of the project</font>
              <div style="color:#B40404;">
                กำหนดวันเริ่มใช้งาน
              </div></th>
            <td><input type="text" class="datepicker form-control" placeholder="Date" id="start_date" name="start_date" data-date-format="dd-mm-yyyy"></td>
        </tr>
        </tbody>
    </table>

     <h2>OTHER</h2>

    <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)" border="2" cellspacing="0" width="50%">
        <thead>
          <tr>
              <th width="20%">Priority</th>
              <td>
                <select id="priority" name="priority" class="form-control" required>
                  <option value="">Open this select menu</option>
                  <option value="LOW">LOW</option>
                  <option value="NORMAL">NORMAL</option>
                  <option value="HIGH">HIGH</option>
                </select>

              </td>
          </tr>
          <tr>
              <th>Attach</th>
              <td>
                    <input type="file" name="featured" id="featured" />
              </td>
          </tr>
          <tr>
              <th></th>
              <td>
                <input type="submit" id="btn_add" name="btn_add" class="btn btn-primary" value="SUBMIT">
                <input type="hidden" id="send_id_department" name="send_id_department" value="2">
              </td>
          </tr>
        </thead>
      </table>


    </form>

    <p>*If the brief or scope of work that has been submitted for kick-off meeting changes – a new Communications Approval is required prior to beginning work.</p>
    <p>-Attach the appropriate Brand Guidelines (where applicable) with this Communications brief</p>
    <p>-Please attach Reference packaging, advertising,& Graphic Style Guides when they are available</p>
    </br>
    <p style="color:#B40404;font-size:13px;">*กรณีบรีฟงานนี้ได้ส่งเข้าที่ประชุมแล้วและได้มีการเปลี่ยนแปลงใดๆเพิ่มเติม จะต้องทำแบบฟอร์ม Communications Brief นี้ขึ้นมาใหม่อีกครั้ง</p>
    <p style="color:#B40404;font-size:13px;">-โปรดแนบ Brand Guidelines นั้นๆมาพร้อมแบบฟอร์ม Communications brief</p>
    <p style="color:#B40404;font-size:13px;">-โปรดแนบเอกสารอ้างอิงหรือตัวอย่างงาน ที่เกี่ยวกับ บรรจุภัณฑ์/ การโฆษณา และ รูปแบบหรือแนวของกราฟฟิคที่ต้องการ</p>



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
    <script src="<?PHP echo base_url();?>/assets/js/bootstrap-datepicker.js" ></script>

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

      $('.datepicker').datepicker();

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
