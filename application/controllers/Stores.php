<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Stores
 * 
 * Controls the views for the stores module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Stores extends CI_Controller
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
            $data['title'] = 'Stores';
            $data['stores'] = $this->Stores_Model->getStores()->result();
            $data['user_stores'] = $this->Stores_Model->getUserStores($this->ion_auth->get_user_id());
            $data['username'] = $this->ion_auth->user()->row()->username;

            //Views
            $this->load->view('includes/head', $data);
            $this->load->view('includes/header', $data);
            $this->load->view('stores/stores_view', $data);
        }
    }

    /**
     * View store details
     * 
     * @param int $store_number Store number
     */
    public function details($store_number)
    {
        $data['title'] = 'Stores - Store Details';
        $data['id'] = $store_number;
        $data['details'] = $this->Stores_Model->getStore($store_number);
        $data['equipment'] = $this->Equipment_Model->getAllEquipment()->result();
        $data['store_equipment'] = $this->Stores_Model->getStoreEquipment($store_number);
        $data['users'] = $this->ion_auth->users()->result();
        $data['store_users'] = $this->Stores_Model->getStoreUsers($store_number);
        $this->load->view('stores/detail_stores_view', $data);
    }

    /**
     * Adds a store to the database
     */
    public function add()
    {
        $insert = [
            'store_number' => $this->input->post('store_number'),
            'store_address1' => $this->input->post('store_address1'),
            'store_town' => $this->input->post('store_town'),
            'store_county' => $this->input->post('store_county'),
            'store_postcode' => $this->input->post('store_postcode'),
            'store_franchisee' => $this->input->post('store_franchisee'),
            'store_email' => $this->input->post('store_email'),
            'store_telephone' => $this->input->post('store_telephone'),
            'store_company' => $this->input->post('store_company')
        ];

        $this->Stores_Model->addStore($insert);
        redirect('/stores', 'refresh');
    }

    /**
     * Remove a store from the database
     * 
     * @param Integer $store_number Store number
     */
    public function remove($store_number)
    {
        $this->Stores_Model->removeStore($store_number);
        redirect('/stores', 'refresh');
    }

    /**
     * Make changes to a store
     * 
     * @param Integer $store_number Store number
     */
    public function edit($store_number)
    {
        $insert = [
            'store_number' => $this->input->post('store_number'),
            'store_address1' => $this->input->post('store_address1'),
            'store_town' => $this->input->post('store_town'),
            'store_county' => $this->input->post('store_county'),
            'store_postcode' => $this->input->post('store_postcode'),
            'store_franchisee' => $this->input->post('store_franchisee'),
            'store_email' => $this->input->post('store_email'),
            'store_telephone' => $this->input->post('store_telephone'),
            'store_company' => $this->input->post('store_company')
        ];

        $this->Stores_Model->editStore($store_number, $insert);
        redirect('/stores', 'refresh');
    }

    /**
     * Make assignments to a given store
     * 
     * @param String $type Type of assignment to make
     * @param Integer $store_number Store number
     */
    public function assign($type, $store_number)
    {
        switch ($type) {

            case 'equipment':
                $data = [
                    'store_number' => $store_number,
                    'equipment_id' => $this->input->post('equipment_id'),
                    'equipment_location' => $this->input->post('equipment_location')
                ];

                $this->Stores_Model->assignEquipment($data);
                redirect('/stores/details/' . $store_number, 'refresh');
                break;

            case 'users':

                foreach ($this->input->post('user_id') as $r) {
                    $data = [];
                    $data = [
                        'store_number' => $store_number,
                        'user_id' => $r
                    ];
                    $this->Stores_Model->assignUsers($data);
                }
                redirect('/stores/details/' . $store_number, 'refresh');
        }
    }

    /**
     * Unnassign equipment or a user from a store
     * 
     * @param int $store_number Store number
     * @param int $equipment_id Equipment id
     * @param int $user_id User id
     */
    public function unassign($store_number, $equipment_id, $user_id)
    {
        if ($user_id == 'NULL') {
            $this->Stores_Model->unassignEquipment($store_number, $equipment_id);
            redirect('/stores/details/' . $store_number, 'refresh');
        } else if ($equipment_id == 'NULL') {
            $this->Stores_Model->unassignUser($store_number, $user_id);
            redirect('/stores/details/' . $store_number, 'refresh');
        }
    }
}
