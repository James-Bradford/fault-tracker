<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Managers
 * 
 * Controls the views for the managers module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Managers extends CI_Controller
{

    /**
     * Loads required models, libraries and helpers
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
    }

    /**
     * Loads the default view
     */
    public function index()
    {

        //If user is not logged in redirect to login view
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } else {
            $data['title'] = 'Manager Portal';
            $data['loggedin'] = $this->ion_auth->logged_in();
            $this->load->view('managers_view', $data);
        }
    }
}
