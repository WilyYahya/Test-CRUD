<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

      function __construct(){

            parent::__construct();

            $this->load->model('m_data');

      }

     

      public function index(){

            $x['data']=$this->m_data->show_orang();

            $this->load->view('v_data',$x);

      }
    public function add() {
			$this->load->view('v_add');
									
		}
	public function delete()
	{
		if($_GET["delete"])
		{
			$this->load->model('M_data');
			$this->M_data->delete($_GET["delete"]);
			
			echo "<script type='text/javascript'>
               alert ('Data Has been Slain!!!');
               document.location('../Data/index');
      			</script>";
		} else {
			show_404();
		}
	}

	public function update($id)
	{
		$this->db->get_where('orang' , 
			array( 'id' => $id)
		);
	}

	public function prosesadd()
	{
		$this->load->model('M_data');
		$this->M_data->insert();
		redirect('Data');
	}
}