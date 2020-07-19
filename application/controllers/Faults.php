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
class Faults extends CI_Controller
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
        $this->load->model('Faults_Model');
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
            $data['title'] = 'Faults - All';
            $data['user_stores'] = $this->Stores_Model->getUserStores($this->ion_auth->get_user_id());
            $data['username'] = $this->ion_auth->user()->row()->username;

            //Views
            $this->load->view('includes/head', $data);
            $this->load->view('includes/header', $data);
            $this->load->view('faults/all_faults_view', $data);
            $this->load->view('includes/footer');
        }
    }

    /**
     * Loads the view of store faults
     * 
     * @param int $store_number Store number
     */
    public function store($store_number)
    {
        //Load views if user is logged in
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } else {
            //Data passed to view
            $data['title'] = 'Faults for Store - ' . $store_number;
            $data['user_stores'] = $this->Stores_Model->getUserStores($this->ion_auth->get_user_id());
            $data['username'] = $this->ion_auth->user()->row()->username;
            $data['store_number'] = $store_number;
            $data['store_faults'] = $this->Faults_Model->getStoreFaults($store_number);

            //Views
            $this->load->view('includes/head', $data);
            $this->load->view('includes/header', $data);
            $this->load->view('faults/store_faults_view', $data);
            $this->load->view('includes/footer');
        }
    }
}
