<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Manufacturers
 * 
 * Controls the views for the manufacturers module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Manufacturers extends CI_Controller
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
        $this->load->model('Manufacturers_Model');
    }

    /**
     * Loads the default view
     */
    public function index()
    {

        if (isset($_GET['view'])) {
            switch ($_GET['view']) {
                case 'add':
                    $data['title'] = 'Manufacturers - Add Manufacturer';
                    $this->load->view('manufacturers/add_manufacturers_view', $data);
                    break;
                case 'edit':
                    $data['title'] = 'Manufacturers - Edit Manufacturer';
                    $data['id'] = $_GET['id'];
                    $data['details'] = $this->Manufacturers_Model->getManufacturer($_GET['id']);
                    $this->load->view('manufacturers/edit_manufacturers_view', $data);
                    break;
            }
        } else {
            $data['title'] = 'Manufacturers';
            $data['manufacturers'] = $this->Manufacturers_Model->getManufacturers()->result();
            $this->load->view('manufacturers/manufacturers_view', $data);
        }
    }

    /**
     * Add a manufacturer
     */
    public function add()
    {
        $insert = ['manufacturer_name' => $this->input->post('manufacturer_name')];

        $this->Manufacturers_Model->addManufacturer($insert);
        redirect('/manufacturers', 'refresh');
    }

    /**
     * Remove a manufacturer
     * 
     * @param $id Manufacturer ID
     */
    public function remove($id)
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('Manufacturers_Model');

        $this->Manufacturers_Model->removeManufacturer($id);
        redirect('/manufacturers', 'refresh');
    }

    /**
     * Edit a manufacturer
     * 
     * @param $id Manufacturer ID
     */
    public function edit($id)
    {
        $insert = ['manufacturer_name' => $this->input->post('manufacturer_name')];

        $this->Manufacturers_Model->editManufacturer($id, $insert);
        redirect('/manufacturers', 'refresh');
    }
}
