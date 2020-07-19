<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Categories
 * 
 * Controls the views for the categories module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Categories extends CI_Controller
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
        $this->load->model('EquipmentTypes_Model');
    }

    /**
     * Loads the default view
     */
    public function index()
    {

        if (isset($_GET['view'])) {
            switch ($_GET['view']) {
                case 'add':
                    $data['title'] = 'Equipment Types - Add Equipment Type';
                    $this->load->view('equipment_types/add_equipment_types_view', $data);
                    break;
                case 'edit':
                    $data['title'] = 'Equipment Types - Edit Equipment Type';
                    $data['id'] = $_GET['id'];
                    $data['details'] = $this->EquipmentTypes_Model->getEquipmentType($_GET['id']);
                    $this->load->view('equipment_types/edit_equipment_types_view', $data);
                    break;
            }
        } else {
            $data['title'] = 'Equipment Types';
            $data['equipment_types'] = $this->EquipmentTypes_Model->getEquipmentTypes()->result();
            $this->load->view('equipment_types/equipment_types_view', $data);
        }
    }

    /**
     * Add a category
     */
    public function add()
    {
        $insert = [
            'equipment_type_name' => $this->input->post('equipment_type_name')
        ];

        $this->EquipmentTypes_Model->addEquipmentType($insert);
        redirect('/equipment_types', 'refresh');
    }

    /**
     * Remove a category
     * 
     * @param $id ID of category
     */
    public function remove($id)
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('EquipmentTypes_Model');

        $this->EquipmentTypes_Model->removeEquipmentType($id);
        redirect('/equipment_types', 'refresh');
    }

    /**
     * Edit a category
     * 
     * @param $id ID of category
     */
    public function edit($id)
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('EquipmentTypes_Model');

        $insert = [
            'equipment_type_name' => $this->input->post('equipment_type_name')
        ];

        $this->EquipmentTypes_Model->editEquipmentType($id, $insert);
        redirect('/equipment_types', 'refresh');
    }
}
