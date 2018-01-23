<?php
class Login extends CI_Controller{

 function __construct(){
  parent::__construct();
  $this->load->model('data_login');

 }

 function index(){
  $this->load->view('v_login');
 }

 function cek_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
   'username' => $username,
   'password' => $password
   );
  $cek = $this->data_login->cek_login("admin",$where)->num_rows();
  if($cek > 0){

   $data_session = array(
    'nama' => $username,
    'status' => "login"
    );

   $this->session->set_userdata($data_session);

   redirect(base_url("admin"));

  }else{
   echo "<script type='text/javascript'>
               alert ('Akun Orang Ya !?!');
               document.write ('<center><h1> Harap Masukan Username Dan Password Dengan Benar !</h1></center><center><h1> www.Null.com</h1></center>');
      </script>";
  }
 }

 function logout(){
  $this->session->sess_destroy();
  redirect(base_url('login'));
 }
}
?>