<?php defined('BASEPATH') or exit('No direct script access allowed');
class Cetba_controller extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('cetba_model');
    }

    public function menu()
    {

        $data['polozky'] = $this->cetba_model->get_menu_polozky();
      

        //$config['base_url'] = 'http://localhost/maturitaknihy/cetba_controller/menu';

        $this->load->view('layout/hlava', $data);
     
        $this->load->view('layout/pata');
    }

    public function stranky($id)
    {
        $data['knihy'] = $this->cetba_model->get_strana($id);
        $data['polozky'] = $this->cetba_model->get_menu_polozky();
        $data['obdobi'] = $this->cetba_model->get_obdobi($id);

        $this->load->view('layout/hlava', $data);
        $this->load->view('content/obdobi');
        $this->load->view('content/strana');
        $this->load->view('layout/pata');
    }
    public function prebaly($id)
    {
        $data['prebaly'] = $this->cetba_model->get_prebal($id);
      
    $data['polozky'] = $this->cetba_model->get_menu_polozky();

        $this->load->view('layout/hlava', $data);
        $this->load->view('content/prebal');
        $this->load->view('layout/pata');
    }
    public function formular()
    {

        $data['polozky'] = $this->cetba_model->get_menu_polozky();
  

        $this->load->view('layout/hlava', $data);
        $this->load->view('content/formular');
        $this->load->view('layout/pata');
    }

 
}
