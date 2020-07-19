<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Equipment
 * 
 * Controls the views for the equipment module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Equipment extends CI_Controller
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
        $this->load->model('Equipment_Model');
        $this->load->model('Manufacturers_Model');
        $this->load->model('Categories_Model');
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
            $data['title'] = 'Equipment';
            $data['user_stores'] = $this->Stores_Model->getUserStores($this->ion_auth->get_user_id());
            $data['username'] = $this->ion_auth->user()->row()->username;

            $data['equipment_types'] = $this->Categories_Model->getEquipmentTypes()->result();
            $data['manufacturers'] = $this->Manufacturers_Model->getManufacturerNameId()->result();
            $data['equipment'] = $this->Equipment_Model->getAllEquipment()->result();

            //Views
            $this->load->view('includes/head', $data);
            $this->load->view('includes/header', $data);
            $this->load->view('equipment/equipment_view', $data);

            //Modals
            $this->load->view('equipment/modals/add_equipment_modal', $data);
            $this->load->view('equipment/modals/edit_equipment_modal', $data);
            $this->load->view('equipment/modals/delete_equipment_modal', $data);

            //Footer
            $this->load->view('includes/footer');
        }
    }

    /**
     * Adds equipment to the database
     */
    public function add()
    {
        $insert = [
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'equipment_type_id' => $this->input->post('equipment_type_id'),
            'equipment_model' => $this->input->post('equipment_model')
        ];

        $this->Equipment_Model->addEquipment($insert);
        redirect('/equipment', 'refresh');
    }

    /**
     * Removes equipment from the database
     * 
     * @param int $id Equipment id
     */
    public function remove($id)
    {
        $this->Equipment_Model->removeEquipment($id);
        redirect('/equipment', 'refresh');
    }

    /**
     * Edit equipment in the database
     * 
     * @param int $id Equipment id
     */
    public function edit($id)
    {
        $insert = [
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'equipment_type_id' => $this->input->post('equipment_type_id'),
            'equipment_model' => $this->input->post('equipment_model')
        ];

        $this->Equipment_Model->editEquipment($id, $insert);
        redirect('/equipment', 'refresh');
    }
}
