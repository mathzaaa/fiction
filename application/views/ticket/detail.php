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
  <body onload="myHide();">




      <style class="cp-pen-styles">html, body {
        background-color: #f0f2fa;
        font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
        color: #555f77;
        -webkit-font-smoothing: antialiased;
      }

      input, textarea {
        outline: none;
        border: none;
        display: block;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
        font-size: 1rem;
        color: #555f77;
      }
      input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
        color: #ced2db;
      }
      input::-moz-placeholder, textarea::-moz-placeholder {
        color: #ced2db;
      }
      input:-moz-placeholder, textarea:-moz-placeholder {
        color: #ced2db;
      }
      input:-ms-input-placeholder, textarea:-ms-input-placeholder {
        color: #ced2db;
      }

      p {
        line-height: 1.3125rem;
      }

      .comments {
        margin: 2.5rem auto 0;
        max-width: 60.75rem;
        padding: 0 1.25rem;
      }

      .comment-wrap {
        margin-bottom: 1.25rem;
        display: table;
        width: 100%;
        min-height: 5.3125rem;
      }

      .photo {
        padding-top: 0.625rem;
        display: table-cell;
        width: 3.5rem;
      }
      .photo .avatar {
        height: 2.25rem;
        width: 2.25rem;
        border-radius: 50%;
        background-size: contain;
      }

      .comment-block {
        padding: 1rem;
        background-color: #fff;
        display: table-cell;
        vertical-align: top;
        border-radius: 0.1875rem;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);
      }
      .comment-block textarea {
        width: 100%;
        resize: none;
      }

      .comment-text {
        margin-bottom: 1.25rem;
      }

      .bottom-comment {
        color: #acb4c2;
        font-size: 0.875rem;
      }

      .comment-date {
        float: left;
      }

      .comment-actions {
        float: right;
      }
      .comment-actions li {
        display: inline;
        margin: -2px;
        cursor: pointer;
      }
      .comment-actions li.complain {
        padding-right: 0.75rem;
        border-right: 1px solid #e1e5eb;
      }
      .comment-actions li.reply {
        padding-left: 0.75rem;
        padding-right: 0.125rem;
      }
      .comment-actions li:hover {
        color: #0095ff;
      }
      .all-round {
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        }

      </style>


    <div class="container-fluid">
      <div class="row">
        <?PHP
			$data['title'] = $title;
			$this->load->view ('ticket/left_menu',$data);
		?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>DETAIL</h1>

          <?PHP $this->load->model('ticket_model');?>

          <h2 align="center">Communications Brief</h2>


           <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
               <thead>
                  <tr>
                      <th width="20%"><font color="#0A6AF7">PROJECT NAME</font></th>
                      <td><?PHP echo $edit_detail->project_name; ?></td>

                  </tr>
              </thead>
              <tbody>
              <tr>
                  <th><font color="#0A6AF7">Budget (if applicable)</font></th>
                  <td><?PHP if($edit_detail->budget != 0){echo $edit_detail->budget;}else{echo "__________";} ?> BATH</td>
              </tr>
              </tbody>
          </table>

          <h2>BACKGROUND</h2>

          <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
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
                          <td><textarea rows="4" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->business_objective; ?></textarea></td>
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
                          <td><textarea rows="4" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->target; ?></textarea></td>
                        </tr>
                      </table>
                     </td>
                 </tr>
             </thead>
         </table>


         <h2>CREATIVE CONSIDERATIONS</h2>

         <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
             <tbody>
               <tr>
                   <th width="30%">
                     <font color="#0A6AF7">BRAND & VOICE</font>
                  </th>
                  <td>
                    <?PHP echo $edit_detail->brand_voice; ?>
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
                         <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->single_most; ?></textarea></td>
                      </tr>
                     <tr>
                       <th rowspan="3"><font color="#0A6AF7">Additional communication points:</font>
                         <div style="color:#B40404;">
                           รายละเอียดเพิ่มเติมอื่นๆ
                         </div>
                       </th>
                       <td align="center" width="3%">1</td>
                       <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_1; ?></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">2</td>
                        <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_2; ?></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_3; ?></textarea></td>
                      </tr>
                     </table>
                    </td>
                </tr>

            </tbody>
        </table>

      </br></br>

      <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
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
                      <td><textarea rows="4" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->mandatories; ?></textarea></td>
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
                      <td><textarea rows="4" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->deliverables; ?></textarea></td>
                    </tr>
                  </table>
                 </td>
             </tr>
         </thead>
     </table>

     <h2>MEETINGS & APPROVAL</h2>

     <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
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
                     <th width="15%" >DATE</th>
                     <th>EVENT</th>
                   </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td valign="middle" align="center"><?PHP if(!empty($edit_detail->date_1)){echo $this->ticket_model->get_date($edit_detail->date_1);} ?></td>
                     <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->event_1; ?></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle" align="center"><?PHP if(!empty($edit_detail->date_2)){echo $this->ticket_model->get_date($edit_detail->date_2);} ?></td>
                     <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->event_2; ?></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle" align="center"><?PHP if(!empty($edit_detail->date_3)){echo $this->ticket_model->get_date($edit_detail->date_3);} ?></td>
                     <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->event_3; ?></textarea></td>
                   </tr>
                   <tr>
                     <td valign="middle" align="center"><?PHP if(!empty($edit_detail->date_4)){echo $this->ticket_model->get_date($edit_detail->date_4);} ?></td>
                     <td><textarea rows="2" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->event_4; ?></textarea></td>
                   </tr>
                 </tbody>
                 </table>
                </td>
            </tr>

        </thead>
    </table>

    <h2>Timeline</h2>


     <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
         <thead>
            <tr>
              <th width="30%"><font color="#0A6AF7">Final Deadline of the artwork/project</font>
                <div style="color:#B40404;">
                  กำหนดวันส่งงาน
                </div></th>
                <td><?PHP if($edit_detail->deadline == date('Y-m-d')){echo "<font color='red'><b>".$this->ticket_model->get_date($edit_detail->deadline)."</b></font>";}else{echo $this->ticket_model->get_date($edit_detail->deadline);}  ?></td>

            </tr>
        </thead>
        <tbody>
        <tr>
          <th><font color="#0A6AF7">Start Date of the project</font>
            <div style="color:#B40404;">
              กำหนดวันเริ่มใช้งาน
            </div></th>
            <td><?PHP echo $this->ticket_model->get_date($edit_detail->start_date); ?></td>
        </tr>
        </tbody>
    </table>

     <h2>OTHER</h2>

    <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
        <thead>
          <tr>
              <th width="20%">Priority</th>
              <td>
                <select id="priority" name="priority" class="form-control" disabled>
                  <option value="">Open this select menu</option>
                  <option value="LOW" <?PHP if($edit_detail->priority == "LOW"){echo "selected";} ?>>LOW</option>
                  <option value="NORMAL" <?PHP if($edit_detail->priority == "NORMAL"){echo "selected";} ?>>NORMAL</option>
                  <option value="HIGH" <?PHP if($edit_detail->priority == "HIGH"){echo "selected";} ?>>HIGH</option>
                </select>

              </td>
          </tr>
          <tr>
              <th>Attach</th>
              <td>
                <a href="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/files/<?PHP echo $edit_detail->attach; ?>"><?PHP echo $edit_detail->attach; ?></a>
              </td>
          </tr>
        </thead>
      </table>




<?PHP

if(($this->session->status_user == "HEAD DEPARTMENT"&&$this->session->id_department == $edit_detail->send_id_department)||$this->session->id_user == $edit_detail->id_user){

?>
    <h2 style="color:red;">STATUS UPDATE</h2>
<form action="update_status_ticket" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">
   <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
       <thead>
         <tr>
             <th width="20%">STATUS</th>
             <td>
               <select id="id_status_ticket" name="id_status_ticket" class="form-control" >
                 <option value="">---STATUS---</option>
                 <?PHP foreach ( $select_status_ticket as $row ): ?>
                 <option value="<?PHP echo $row->id_status_ticket; ?>" <?PHP if($edit_detail->id_status_ticket == $row->id_status_ticket){echo "selected";}?>><?PHP echo $row->name_status; ?></option>
                 <?php endforeach; ?>
               </select>

             </td>
         </tr>
         <tr>
             <th></th>
             <td>
               <input type="submit" id="btn_add" name="btn_add" class="btn btn-primary" value="SUBMIT">
               <input type="hidden" id="id_ticket" name="id_ticket" value="<?PHP echo $_GET['ticket']; ?>">
             </td>
         </tr>
       </thead>
     </table>
    </form>
<?PHP } ?>

<p>*If the brief or scope of work that has been submitted for kick-off meeting changes – a new Communications Approval is required prior to beginning work.</p>
<p>-Attach the appropriate Brand Guidelines (where applicable) with this Communications brief</p>
<p>-Please attach Reference packaging, advertising,& Graphic Style Guides when they are available</p>
</br>
<p style="color:#B40404;font-size:12px;">*กรณีบรีฟงานนี้ได้ส่งเข้าที่ประชุมแล้วและได้มีการเปลี่ยนแปลงใดๆเพิ่มเติม จะต้องทำแบบฟอร์ม Communications Brief นี้ขึ้นมาใหม่อีกครั้ง</p>
<p style="color:#B40404;font-size:12px;">-โปรดแนบ Brand Guidelines นั้นๆมาพร้อมแบบฟอร์ม Communications brief</p>
<p style="color:#B40404;font-size:12px;">-โปรดแนบเอกสารอ้างอิงหรือตัวอย่างงาน ที่เกี่ยวกับ บรรจุภัณฑ์/ การโฆษณา และ รูปแบบหรือแนวของกราฟฟิคที่ต้องการ</p>


<div class="comments">
		<div class="comment-wrap">
				<div class="photo">
							<!--<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>-->
              <img src="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/member/<?PHP echo $this->session->img; ?>" class="all-round" width="40px" height="40px">
				</div>
				<div class="comment-block">
          <?PHP
          //echo form_open_multipart('ticket/add_reply');
          ?>
        <form action="add_reply" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">

								<textarea style="display: none;" id="detail" name="detail"  cols="30" rows="3" placeholder="Add comment...">
                  <?PHP
                    if(!empty($_GET['reply'])){
                      echo "</br></br>";
                      echo "<table border=1>";
                      echo "<tr><td>";
                      echo "Reply : ".$reply_member->name." ".$reply_member->lname."/".$reply_member->name_department;
                      echo $reply_member->detail;
                      echo "</td></tr>";
                      echo "</table>";
                    }
                  ?>
                </textarea><br>

                <input type="file" name="featured" id="featured" /><br>

                <input type="submit" id="btn_add" name="btn_add" class="btn btn-primary" value="SUBMIT">
                <input type="hidden" name="id_ticket" id="id_ticket" value="<?PHP echo $_GET['ticket'];?>">
						</form>
				</div>
		</div>
<?PHP
$this->load->model('ticket_model');
foreach ( $reply_detail as $r ): ?>
		<div class="comment-wrap">
				<div class="photo">
          <img src="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/member/<?PHP echo $r->img; ?>" class="all-round" width="40px" height="40px">
						<!--<div class="avatar" style="background-image: url('<?PHP echo base_url(); ?>assets/js/kcfinder/upload/member/<?PHP echo $r->img; ?>')"></div>-->
				</div>
				<div class="comment-block">
          <p ><?PHP echo $r->name." ".$r->lname." / ".$r->name_department; ?></p>
						<p class="comment-text"><?PHP echo $r->detail; ?></p>
						<div class="bottom-comment">
              <div class="comment-date">
                <?PHP if(!empty($r->file_name)){ ?>
                <font color="#000">Attach : </font><a href="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/files/<?PHP echo $r->file_name; ?>"><?PHP echo $r->file_name; ?></a>
                <?PHP } ?>
              </div>
								<ul class="comment-actions">
                    <li class="complain"><?PHP echo $this->ticket_model->get_date_time($r->date_reply); ?></li>
                    <li class="reply"><a href="<?PHP echo base_url();?>/ticket/detail?ticket=<?PHP echo $_GET['ticket'] ?>&reply=<?PHP echo $r->id_reply; ?>">Reply</a></li>
										<!--<li class="complain">Complain</li>
										<li class="reply">Reply</li>-->
								</ul>
						</div>
				</div>
		</div>
<?php endforeach; ?>

</div>

</div>

<div id="loading" style="display:none; position: fixed; top: 40%; left: 50%;" align="center" width="100%"><br>
<IMG SRC="<?PHP echo base_url(); ?>assets/img/loading.gif" id="loading" WIDTH="150px" HEIGHT="150px" BORDER="0" ALT=""><br>
กรุณารอสักครู่...</div>


<div id="hidepage2" style="display:block; position: fixed; top: 40%; left: 50%;" align="center" width="100%">
<br>
<IMG SRC="<?PHP echo base_url(); ?>assets/img/loading.gif"  WIDTH="150px" HEIGHT="150px" BORDER="0" ALT=""><br>
กรุณารอสักครู่...
</div>

<div id="hidepage" style="display:none;">



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

    <script>
    $(document).ready(function() {
        /*  $("#reply").click(function(){
              alert($("#reply_detail").val());
              $("#ck_detail").text($("#reply_detail").val());
          });*/


    });

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
