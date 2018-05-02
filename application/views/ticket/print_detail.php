<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/bootstrap.min.css">
   <title><?PHP echo $title; ?></title>
  </head>
  <body onLoad="window.print()">
        <div align="right">

          <img src="<?PHP echo base_url(); ?>assets/img/logo.png" class="all-round" width="180px" height="100px">
          <?PHP $this->load->model('ticket_model'); ?>
        </div>
          <h2 align="center">Communications Brief</h2>
        </br>


          <table border="0" cellspacing="0" width="50%" align="right" >
            <thead>
            <tr>
              <td >
                  <table border="1" cellspacing="0" >
                    <thead>
                       <tr>
                           <th width="50%" style="text-align:center;"><font color="#0A6AF7">PROJECT NAME</font></th>
                       </tr>
                   </thead>
                   <tbody>
                     <td align="center"><?PHP echo $edit_detail->project_name; ?></td>
                   </tbody>
                  </table>
              </td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td>
                <table border="1" cellspacing="0" >
                  <thead>
                     <tr>
                         <th align="center"><font color="#0A6AF7">Budget (if applicable)</font></th>
                     </tr>
                 </thead>
                 <tbody>
                   <td align="center"><?PHP if($edit_detail->budget != 0){echo $edit_detail->budget;}else{echo "__________";} ?> BATH</td>
                 </tbody>
                </table>
              </td>

            </tr>
          </thead>
         </table>

          </br></br></br></br>
          <h2>BACKGROUND</h2>

          <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">

                 <tr>
                     <td width="30%">
                         <div valign="top"><font color="#0A6AF7"><b>BUSINESS OBJECTIVE</b></font>
                         <div>What are you trying to achieve? (Sell more, raise awareness, launch new product)</div>
                     </div>
                   </br>
                     <div style="color:#B40404;font-size:12px;">
                       วัตถุประสงค์ของงานคืออะไร
                       (เพิ่มยอดขาย, ทำให้คนได้รู้จักกับเรามากขึ้น, โฆษณาสินค้าออกใหม่)

                     </div>
                    </td>

                     <td>
                      <table border="0.5">
                        <tr>
                          <td><div>What is the business objective? What are the expected business results?</div>
                            <div style="color:#B40404;font-size:12px;">
                              เป้าหมายและวัตุประสงค์ของงาน ? คาดหวังอะไรจากงานนี้ ?
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><textarea rows="9" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->business_objective; ?></textarea></td>
                        </tr>
                      </table>
                     </td>
                 </tr>

                 <tr>
                     <td >
                         <div valign="top"><font color="#0A6AF7"><b>TARGET</b></font>
                            <div>Who do you want to talk to(the target consumer)?</div>
                     </div> </br>
                     <div style="color:#B40404;font-size:12px;">
                       คุณต้องการสื่อสารกับกลุ่มเป้าหมายลูกค้าใด ?
                     </div>
                    </td>

                     <td>
                      <table border="0.5">
                        <tr>
                          <td>Describe the target consumer segment and/or shopper segment who needs/wants/believes/etc.
                            <div style="color:#B40404;font-size:12px;">
                              โปรดระบุกลุ่มลูกค้าที่เป็นเป้าเหมาย โดยระบุ เพศ/ อายุ/ ความต้องการ/ และ พฤติกรรมของกลุ่มเป้าหมายนั้นๆ
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><textarea rows="8" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->target; ?></textarea></td>
                        </tr>
                      </table>
                     </td>
                 </tr>

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
                        <div valign="top"><font color="#0A6AF7"><b>MAIN IDEA</b></font></br>
                          <div> What do you want to say? And what do you want your customer to take from your advertising?</div></br>

                          <div>i.e Key Message of a promotions, or key message of new design, or is this Brand Building and Emotional to make them aware of a new brand?</div>
                    </div> </br>
                    <div style="color:#B40404;font-size:12px;">
                      คุณต้องการจะสื่อสารอะไร ไปยังลูกค้า ?
                    </div>
                   </td>

                    <td>
                        <div>What is the single most important thing you want your target audience to take away with this communication? List additional communication points/features & benefits in order of priority.</div>
                        <div style="color:#B40404;font-size:12px;">
                          สิ่งสำคัญหลักที่คุณต้องการให้กลุ่มเป้าหมายได้รับจากคุณ ?
                          ระบุเพิ่มเติมในส่วนของสิ่งที่ต้องการเพิ่มเติม ? (รายละเอียดอื่นๆของงาน)

                        </div>

                     <table border="1">

                       <tr>
                         <td width="15%"><font color="#0A6AF7">Single most important thing</font>
                           <div style="color:#B40404;font-size:12px;">
                             สิ่งสำคัญหลัก
                           </div>
                         </td>
                         <td align="center">1</td>
                         <td><textarea rows="7" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->single_most; ?></textarea></td>
                      </tr>
                     <tr>
                       <td rowspan="3"><font color="#0A6AF7">Additional communication points</font>
                         <div style="color:#B40404;font-size:12px;">
                           รายละเอียดเพิ่มเติมอื่นๆ
                         </div>
                       </td>
                       <td align="center" width="3%">1</td>
                       <td><textarea rows="7" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_1; ?></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">2</td>
                        <td><textarea rows="7" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_2; ?></textarea></td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td><textarea rows="7" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->additional_3; ?></textarea></td>
                      </tr>
                     </table>
                    </td>
                </tr>

            </tbody>
        </table>

</br>
      <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
          <thead>
             <tr>
                 <td width="30%">
                     <div valign="top"><b><font color="#0A6AF7">MANDATORIES or CONSIDERATIONS</font>
                   </b>
                 </div> </br>
                 <div style="color:#B40404;font-size:12px;">
                   สิ่งที่ต้องคำนึงถึง
                 </div>
                </td>

                 <td>
                  <table border="0.5">
                    <tr>
                      <td>Identify bilingual, trilingual, legal requirements, logos, specific ideas, or elements (Trademark)
                        <div style="color:#B40404;font-size:12px;">
                          โปรดระบุความต้องการอื่นๆ เช่น ต้องการทำงานออกมาสองภาษา/ หรือมากกว่าสองภาษา/  โลโก้/ ไอเดีย/ ความถูกต้องตามกฎหมาย/ และ องค์ประกอบอื่นๆ (เครื่องหมายการค้า)?
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><textarea rows="5" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->mandatories; ?></textarea></td>
                    </tr>
                  </table>
                 </td>
             </tr>

             <tr>
                 <td >
                     <div valign="top"><b><font color="#0A6AF7">DELIVERABLES</b></font>
                        <div>PPT Deck, boards, 3-D rendering, disc, EPS file, PDF, AI, electronic transmission etc.</div>

                 </div> </br>
                 <div style="color:#B40404;font-size:12px;">
                   ระบุรูปแบบไฟล์แนบสกุลต่างๆของงานที่ต้องการให้ทำออกมาเป็นรูปแบบใด เช่น สตอรี่บอร์ด หรือเป็นไฟล์ เป็นต้น
                 </div>
                </td>

                 <td>
                  <table border="0.5">
                    <tr>
                      <td>List all elements associated with this brief.
                        <div style="color:#B40404;font-size:12px;">
                          โปรดระบุองค์ประกอบที่เกี่ยวข้องกับบรีฟงานนี้
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><textarea rows="5" cols="100%" class="form-control" readonly><?PHP echo $edit_detail->deliverables; ?></textarea></td>
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
                    <div valign="top"><b><font color="#0A6AF7">KEY DATES</b></font>
                    <div>List applicable Research Dates, Customer Meetings, Gate Dates, Internal Approval Dates, Launch Dates, Ship from Stock, or Other.
                    </div>

                </div> </br>
                <div style="color:#B40404;font-size:12px;">
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
<h2>Timeline & OTHER</h2>


 <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
     <thead>
        <tr>
            <th width="30%"><font color="#0A6AF7">Final Deadline of the artwork/project</font>
              <div style="color:#B40404;font-size:12px;">
                กำหนดวันส่งงาน
              </div></th>
            <td><?PHP if($edit_detail->deadline == date('Y-m-d')){echo "<font color='red'><b>".$this->ticket_model->get_date($edit_detail->deadline)."</b></font>";}else{echo $this->ticket_model->get_date($edit_detail->deadline);}  ?></td>

        </tr>
    </thead>
    <tbody>
    <tr>
        <th><font color="#0A6AF7">Start Date of the project</font>
          <div style="color:#B40404;font-size:12px;">
            กำหนดวันเริ่มใช้งาน
          </div></th>
        <td><?PHP echo $this->ticket_model->get_date($edit_detail->start_date); ?></td>
    </tr>
    <tr>
        <th width="20%">Priority <font color="#B40404" style="font-size:12px;">ระดับความสำคัญ<font></th>
        <td><?PHP echo $edit_detail->priority; ?></td>
    </tr>
    <tr>
        <th>Attach <font color="#B40404" style="font-size:12px;">เอกสารแนบ<font></th>
        <td>
          <a href="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/files/<?PHP echo $edit_detail->attach; ?>"><?PHP echo $edit_detail->attach; ?></a>
        </td>
    </tr>
    </tbody>
</table>
    <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
        <thead>
           <tr>
               <td width="30%">
                   <div valign="top"><b><font color="#0A6AF7">KICK-OFF MEETING</b></font>
                     <div>Who should be invited to the kick-off meeting?</div> </br>
                     <div style="color:#B40404;font-size:12px;">
                       บุคคลที่ควรจะเป็นผู้เข้าประชุมเพื่อพิจารณางานนี้หลังจากดำเนินการเสร็จแล้ว ?
                     </div>
                   </br>
                    <div style="color:red;">Include anyone that will have “approval” or “consultant” rights.</div> </br>
                    <div style="color:#B40404;font-size:12px;">
                      รวมถึงผู้ตัดสินใจท่านอืนที่ไม่ได้กล่าวถึง ที่มีสิทธิ์พิจารณางานนี้
                    </div>
               </div>
              </td>

               <td>
                <table border="1" width="100%" height="100%">
                  <thead>
                  <tr align="center">
                    <th >NAME</th>
                    <th>TITLE</th>
                    <th>SIGNATURE</th>
                  </tr>
                 </thead>
                 <tbody>
                  <tr>
                    <td valign="middle">George Hartel</td>
                    <td valign="middle" width="35%">Chief Operating Officer</td>
                    <td valign="middle"></td>
                  </tr>
                  <tr>
                    <td valign="middle">Pasin Lathouras</td>
                    <td valign="middle">Assistant to CEO</td>
                    <td valign="middle"></td>
                  </tr>
                  <tr>
                    <td valign="middle">Ornanong Sittisuporn</td>
                    <td valign="middle">VM Manager</td>
                    <td valign="middle"></td>
                  </tr>
                  <tr>
                    <td valign="middle">Chart Meeprasert</td>
                    <td valign="middle">Brand Marketing  Manager</td>
                    <td valign="middle"></td>
                  </tr>
                  <tr>
                    <td valign="middle">Aldrin Buccuan</td>
                    <td valign="middle">Associate Brand  Marketing Manager</td>
                    <td valign="middle"></td>
                  </tr>
                  <tr>
                    <td valign="middle">Chuanchom Plaingam</td>
                    <td valign="middle">PR Supervisor</td>
                    <td valign="middle"></td>
                  </tr>
                </tbody>
                </table>
               </td>
           </tr>

       </thead>
   </table>

   <table class="table" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5);background-color:#fff;" border="2" cellspacing="0" width="50%">
    <thead>
        <tr>
                   <th valign="middle" width="22%">FINAL APPROVAL</th>
                   <th valign="middle" width="35%">Ms. Wasna Roongsaenthong</th>
                   <th valign="middle" width="20%">President</th>
                   <th valign="middle" width="23%"></th>
        </tr>
    </thead>
  </table>
</br>
      <table border="0">
        <tr>
            <th>
              <table border="1">
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </table>
            </th>
            <td>
              Approve <font color="#B40404" style="font-size:12px;">(ผ่านการอนุมัติ)<font>
            </td>
        </tr>
        <tr>
          <th>
            <table border="1">
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </table>
          </th>
            <td>
              Disapprove <font color="#B40404" style="font-size:12px;">(ไม่ผ่านการอนุมัติ)<font>
            </td>
        </tr>
        </table>
        </br>
<p>NOTES/COMMENTS : ______________________________________________________________________________________</p>
<p>______________________________________________________________________________________________________________</p>
</br>
<div style="text-align:right;">Remarks Next Page</div>
<p>*If the brief or scope of work that has been submitted for kick-off meeting changes – a new Communications Approval is required prior to beginning work.</p>
<p>-Attach the appropriate Brand Guidelines (where applicable) with this Communications brief</p>
<p>-Please attach Reference packaging, advertising,& Graphic Style Guides when they are available</p>
</br>
<p style="color:#B40404;font-size:12px;">*กรณีบรีฟงานนี้ได้ส่งเข้าที่ประชุมแล้วและได้มีการเปลี่ยนแปลงใดๆเพิ่มเติม จะต้องทำแบบฟอร์ม Communications Brief นี้ขึ้นมาใหม่อีกครั้ง</p>
<p style="color:#B40404;font-size:12px;">-โปรดแนบ Brand Guidelines นั้นๆมาพร้อมแบบฟอร์ม Communications brief</p>
<p style="color:#B40404;font-size:12px;">-โปรดแนบเอกสารอ้างอิงหรือตัวอย่างงาน ที่เกี่ยวกับ บรรจุภัณฑ์/ การโฆษณา และ รูปแบบหรือแนวของกราฟฟิคที่ต้องการ</p>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?PHP echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?PHP echo base_url();?>/assets/js/bootstrap.min.js" ></script>

  </body>
</html>
