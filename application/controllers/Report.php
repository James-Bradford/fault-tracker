<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * Report
 * 
 * Controls the views for the report module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Report extends CI_Controller {

    
    /**
     * Loads the default views
     */
    public function index()
    {
        if (isset($_GET['step'])) {
            switch ($_GET['step']) {
                case 1:
                    $this->load->view('managers/report_view');
                break;
                case 2:
                    $this->load->view('managers/report2_view');
                break;
                case 3:
                    $this->load->view('managers/report3_view');
                break;
                case 4:
                    $this->load->view('managers/report4_view');
                break;
            }
        }
    }
}