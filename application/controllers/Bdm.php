<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bdm extends CI_Controller {
    public function index()
    {
        $data['title'] = 'BDM Portal';
        $this->load->view('bdm_view', $data);
    }
}