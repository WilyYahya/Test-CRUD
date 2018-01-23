
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class tampilan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('footer');

    }
}
 
# nama file home.php
# folder apllication/controller/