<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Admin
 * 
 * Controls the views for the admin module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Admin extends CI_Controller
{

    /**
     * Loads required models, libraries and helpers
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('Stores_Model');
    }

    /**
     * Loads the default view
     */
    public function index()
    {
        //Load views if user is logged in
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } else {
            //Data passed to view
            $data['title'] = 'Admin Portal';
            $data['user_stores'] = $this->Stores_Model->getUserStores($this->ion_auth->get_user_id());
            $data['username'] = $this->ion_auth->user()->row()->username;

            //Views
            $this->load->view('includes/head');
            $this->load->view('includes/header', $data);
            $this->load->view('admin_index_view', $data);
            $this->load->view('includes/footer');
        }
    }
}
