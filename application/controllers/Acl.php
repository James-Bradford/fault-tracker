<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Acl extends CI_Controller {
    
    public function index()
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');

        if (isset($_GET['view'])) {
            switch($_GET['view']) {
                case 'users':
                    $data['title'] = 'Access Control - Users';
                    $data['users'] = $this->ion_auth->users()->result();
                    $this->load->view('acl/users_view', $data);
                    
                    if (isset($_GET['action'])) {
                    switch($_GET['action']) {
                        case 'delete':
                            $this->ion_auth->delete_user($_POST['id']);
                            redirect("/admin/acl?view=users", 'refresh');
                        break;
                    }}
                break;
            }
        }
    }
}