<?php
class home_model extends CI_Model {
    function __construct()
    {
        //Call the Model constructor
        parent::__construct();
    }

    function check_login($data,$data2){
        $this->db->select('*');
        $this->db->from('tk_member_ticket');
        $this->db->join('tk_major', 'tk_member_ticket.id_major = tk_major.id_major');
        $this->db->where('tk_member_ticket.username',$data);
        $this->db->where('tk_member_ticket.password',md5(md5($data2)));
        $this->db->where('tk_member_ticket.status_appoval',1);
        $query = $this->db->get();

  		  return $query->row_array();
    }

    function check_forget_email($email){
        $this->db->select('*');
        $this->db->from('tk_member_ticket');
        $this->db->where('email',$email);
        $query = $this->db->get();
  		  return $query->row_array();
    }

    function update_forget_email($password,$email,$token){
      $password = md5(md5($password));

      $this->db->set('password', $password);
      $this->db->where('email', $email);
      $this->db->where('token', $token);
      $query = $this->db->update('tk_member_ticket');
		  return $query;

    }

    function check_member_unique($username=null,$email=null){
        $this->db->select('*');
        $this->db->from('tk_member_ticket');

        if(!empty($username) && !empty($email)){
          $this->db->where('username',$username);
          $this->db->or_where('email',$email);
        }
        else if(!empty($username) && empty($email)){
          $this->db->where('username',$username);
        }
        else if(empty($username) && !empty($email)){
          $this->db->where('email',$email);
        }
        else{}
        $query = $this->db->get();
  		  return $query->num_rows();
    }

    function get_dashboard(){
      $sql = "SELECT *,count(t.id_status_ticket) as T_id_status_ticket,st.id_status_ticket as ST_id_status_ticket FROM tk_status_ticket st LEFT JOIN tk_ticket t ON t.id_status_ticket = st.id_status_ticket where st.status = '1'";
      $sql .= " group by st.id_status_ticket order by st.id_status_ticket asc";
      $query = $this->db->query($sql);
      return $query->result();
    }

    function get_sr_dashboard($x){
      $id_department = $_GET['id_department'];
      $sql = "SELECT *,count(id_status_ticket) as T_id_status_ticket FROM tk_ticket ";
      $sql .= " where id_department = '$id_department' ";
      $sql .= " and id_status_ticket = '$x' ";
      $query = $this->db->query($sql);
      return $query->row();
    }

    function get_all_ticket($x=null,$y=null){
      $sql = "SELECT * FROM tk_ticket t LEFT JOIN tk_member_ticket m ON t.id_user = m.id_user LEFT JOIN tk_department d ON t.id_department = d.id_department LEFT JOIN tk_status_ticket st ON t.id_status_ticket = st.id_status_ticket where 1 ";
      if(!empty($x)){
        $sql .= " and t.id_status_ticket = '$x'";
      }
      if(!empty($y)){
        $sql .= " and t.id_department = '$y'";
      }
      if($x == 4){
        $sql .= " order by t.date_edit desc , t.time_edit desc";
      }
      else{
        $sql .= " order by t.id_ticket desc";
      }

      $query = $this->db->query($sql);

      return $query->result();
    }

    function get_all_member($y=null){
      $sql = "SELECT * FROM tk_member_ticket m LEFT JOIN tk_department d ON m.id_department = d.id_department LEFT JOIN tk_major j ON m.id_major = j.id_major where 1 ";
      if(!empty($y)){
        $sql .= " and m.id_department = '$y'";
      }

      $sql .= " order by m.id_user desc";


      $query = $this->db->query($sql);

      return $query->result();
    }

    function get_department(){
		    $this->db->order_by('name_department', 'ASC');
        $this->db->where('status', 1);
		    $query = $this->db->get('tk_department');
		    return $query->result();
    }

    function get_status_ticket($x=NULL){
		    $this->db->order_by('id_status_ticket', 'ASC');
        if(!empty($x)){
            $this->db->where('id_status_ticket', $x);
        }
        $this->db->where('status', 1);
		    $query = $this->db->get('tk_status_ticket');
        if(!empty($x)){
          return $query;
        }else{
          return $query->result();
        }

    }

    function get_major(){
		    $this->db->order_by('id_major', 'ASC');
        $this->db->where('status_major', 1);
		    $query = $this->db->get('tk_major');
		    return $query->result();
    }

    function get_date($date){
		    $date = date('M-d-Y',strtotime($date));
		    return $date;
    }
    function get_date_time($date){
		    $date = date('d M Y H:i:s',strtotime($date));
		    return $date;
    }

    function insert_record($data){
		    $check = $this->db->insert('tk_reply', $data);
		    return $check;
    }

    function insert_reply($data){
		    $check = $this->db->insert('tk_record', $data);
		    return $check;
    }

    function insert_member($data){
		    $check = $this->db->insert('tk_member_ticket', $data);
		    return $this->db->insert_id();
    }

    function insert_record_user($data,$id_user,$id_ticket,$detail){
        $this->db->select('*');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_ticket', $id_ticket);
        $this->db->where('detail', $detail);
        $this->db->where('date_record', date('Y-m-d'));
        $query = $this->db->get('tk_record');
        $num = $query->num_rows();

        if($num == 0){
          $check = $this->db->insert('tk_record', $data);
        }
        else{
          $check = NULL;
        }

        return $check;

    }

    function update_activeM($token){
      $this->db->set('status_appoval', 1);
      $this->db->where('token', $token);
      $query = $this->db->update('tk_member_ticket');
		  return $query;
    }

    function update_member($id_user,$data){
      $this->db->where('id_user', $id_user);
      $check = $this->db->update('tk_member_ticket', $data);
		  return $check;
    }

    function get_reply_detail(){

      $sql = "SELECT * FROM tk_reply tr LEFT JOIN tk_member_ticket tmt ON tr.id_user = tmt.id_user LEFT JOIN tk_department tdm ON tmt.id_department = tdm.id_department where tr.id_ticket = '".$_GET['ticket']."'";
      $sql .= " order by tr.id_reply desc";
      $query = $this->db->query($sql);
      return $query->result();

    }

    function get_reply_member($x = NULL){

      $sql = "SELECT * FROM tk_reply tr LEFT JOIN tk_member_ticket tmt ON tr.id_user = tmt.id_user LEFT JOIN tk_department tdm ON tmt.id_department = tdm.id_department where tr.id_reply = '".$x."'";
      $query = $this->db->query($sql);
      return $query->row();

    }

    function get_show_detail(){
      $sql = "SELECT * FROM tk_ticket  where id_ticket = '".$_GET['ticket']."'";
      $query = $this->db->query($sql);
      return $query->row();

    }
    function insert_ticket($data){
		    $this->db->insert('tk_ticket', $data);
		    return $this->db->insert_id();
    }

    function get_check_send_reply_detail($x = NULL){

      $sql = "SELECT *,tk.id_user as TK_id_user FROM tk_reply tr LEFT JOIN tk_ticket tk ON tr.id_ticket = tk.id_ticket LEFT JOIN tk_member_ticket tmt ON tr.id_user = tmt.id_user LEFT JOIN tk_department tdm ON tmt.id_department = tdm.id_department where tr.id_ticket = '".$x."'";
      $sql .= " order by tr.id_reply desc";
      $query = $this->db->query($sql);
      return $query;

    }

    function get_ticket($x = NULL){

      $sql = "SELECT * from tk_ticket where id_ticket = '$x' ";
      $query = $this->db->query($sql);
      return $query;

    }


    function get_member($x = NULL){

      $sql = "SELECT * from tk_member_ticket where id_user = '$x' ";
      $query = $this->db->query($sql);
      return $query;

    }

    function get_member_token($x , $y = NULL){

      $sql = "SELECT * from tk_member_ticket where token = '$x' ";
      $query = $this->db->query($sql);

      if(empty($y)){
        return $query->row();
      }
      else{
        return $query;
      }


    }



    function check_user_header($send_id_department){
		    $this->db->where('id_department', $send_id_department);
        $this->db->where('status_user', "HEAD DEPARTMENT");
        $this->db->where('status_mail', 1);
		    $query = $this->db->get('tk_member_ticket');
		    return $query;

        //echo "OK";
    }

    function check_user_status_user($x = NULL){
        $this->db->where('status_user', $x);
        $this->db->where('status_mail', 1);
		    $query = $this->db->get('tk_member_ticket');
		    return $query;

        //echo "OK";
    }

    function get_update_status_ticket($id_ticket,$id_status_ticket){

      if($id_status_ticket == 4){
        $this->db->set('date_edit', date('Y-m-d'));
        $this->db->set('time_edit', date('H:i:s'));
      }
      $this->db->set('id_status_ticket', $id_status_ticket);
      $this->db->where('id_ticket', $id_ticket);
      $query = $this->db->update('tk_ticket');
		  return $query;
    }








/////////////////////////////////////////////////////////////////////////////////////////////////





	  function sr_desc_code(){
  		$this->db->select_max('id_code');
  		/*$this->db->where('type_code', $type_code);
      $this->db->where('code_link', $code_link);*/
  		$query = $this->db->get('activity_code');
          //$query = $this->db->query("SELECT MAX(name_code) m_code FROM activity_code where type_code = '$t_c'");
		  return $query;
    }

    function get_all_group_head(){
		    $this->db->order_by('id_head', 'ASC');
		    $query = $this->db->get('activity_head');
		    return $query->result();
    }

    function get_all_group_social(){
		    $this->db->order_by('type_link', 'ASC');
		    $query = $this->db->get('link_type');
		    return $query->result();
    }

    function get_all_link_type(){

		    $this->db->order_by('type_link', 'ASC');
		    $query = $this->db->get('link_type');
		    return $query->result();
    }
    function insert_link_type($data){
		    $check = $this->db->insert('link_type', $data);
		    return $check;
    }
    function get_all_record_view(){
      $this->db->select('*');
      $this->db->from('record_view');
      $this->db->join('link_type', 'record_view.type_view = link_type.code_link');
      $this->db->join('activity_head', 'record_view.type_head = activity_head.code_head');
      $this->db->order_by('id_record', 'DESC');
      $query = $this->db->get();
		  return $query->result();
    }

    function get_all_chart_view(){

      $query = $this->db->query("SELECT count(b.type_view) as c_t,a.type_link FROM link_type a left join record_view b ON a.code_link = b.type_view  group by a.type_link order by a.type_link asc");

		  return $query->result();
    }

    function get_all_chart_confirm_view(){

      $query = $this->db->query("SELECT count(b.status_view) as c_s,a.type_link FROM link_type a left join activity_code b ON a.code_link = b.code_link
    where b.status_view = '1' group by a.type_link order by a.type_link asc");

		  return $query->result();
    }

    function get_all_chart_confirm_shop_view(){

      $query = $this->db->query("SELECT count(b.status_view) as c_s,a.type_link FROM link_type a left join activity_code b ON a.code_link = b.code_link
    where b.status_code = '1' group by a.type_link order by a.type_link asc");

		  return $query->result();
    }

    function check_type($x,$y){
        $ip = $this->input->ip_address();

        $this->db->where('ip_address', $ip);
        $this->db->where('type_head', $x);
        $this->db->where('type_view', $y);
        $this->db->where('date_record', date('Y-m-d'));
		    $query = $this->db->get('record_view');
        $ck = $query->num_rows();

        if($ck == 0){
          $data = array(
              'type_head' => $x,
      				'type_view' => $y,
      				'ip_address' => $ip,
              'time_record' => date('H:i:s'),
      				'date_record' => date('Y-m-d')
      		);
           $check = $this->db->insert('record_view', $data);
           $s = false;
        }
        else{
          $s = true;
        }

		    return $s;

    }

    function get_all_code($type_code,$code_link){
  		$this->db->select('*');
  		$this->db->where('type_code', $type_code);
      $this->db->where('code_link', $code_link);
      $this->db->where('status_view', 0);
      $this->db->order_by('id_code', 'ASC');
  		$query = $this->db->get('activity_code');
          //$query = $this->db->query("SELECT MAX(name_code) m_code FROM activity_code where type_code = '$t_c'");
		  return $query;
    }

    function update_confirm($code_link,$name_code,$type_code){
      $this->db->set('status_view', '1');
      $this->db->where('type_code', $type_code);
      $this->db->where('code_link', $code_link);
      $this->db->where('name_code', $name_code);
      $query = $this->db->update('activity_code');

		  return $query;
    }

    function insert_submit($data){
		    $check = $this->db->insert('customer_submit', $data);
		    return $check;
    }



    function get_all_record_update(){
      $this->db->select('*');
      $this->db->from('record_update');
      $this->db->join('activity_code', 'record_update.id_code = activity_code.id_code');
      $this->db->join('link_type', 'activity_code.code_link = link_type.code_link');
      $this->db->join('member', 'record_update.id_user = member.id_user');
      $this->db->order_by('id_record_u', 'DESC');
      $query = $this->db->get();
		  return $query->result();
    }

    function sr_desc_email(){
     $this->db->select('*');
     $this->db->order_by('id_email', 'ASC');
     $query = $this->db->get('tk_email');
     return $query;
    }

}
?>
