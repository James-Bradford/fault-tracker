<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * Suppliers
 * 
 * Controls the views for the suppliers module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Suppliers extends CI_Controller
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
        $this->load->model('Suppliers_Model');
    }

    /**
     * Loads the default views
     */
    public function index()
    {

        if (isset($_GET['view'])) {
            switch ($_GET['view']) {
                case 'add':
                    $data['title'] = 'Suppliers - Add Supplier';
                    $this->load->view('suppliers/add_suppliers_view', $data);
                    break;
                case 'edit':
                    $data['title'] = 'Suppliers - Edit Supplier';
                    $data['id'] = $_GET['id'];
                    $data['details'] = $this->Suppliers_Model->getSupplier($_GET['id']);
                    $this->load->view('suppliers/edit_suppliers_view', $data);
                    break;
            }
        } else {
            $data['title'] = 'Suppliers';
            $data['suppliers'] = $this->Suppliers_Model->getSuppliers()->result();
            $this->load->view('suppliers/suppliers_view', $data);
        }
    }

    /**
     * Add a supplier
     */
    public function add()
    {
        $insert = [
            'supplier_name' => $this->input->post('supplier_name'),
            'supplier_address1' => $this->input->post('supplier_address1'),
            'supplier_address2' => $this->input->post('supplier_address2'),
            'supplier_city' => $this->input->post('supplier_city'),
            'supplier_county' => $this->input->post('supplier_county'),
            'supplier_postcode' => $this->input->post('supplier_postcode'),
            'supplier_telephone' => $this->input->post('supplier_telephone'),
            'supplier_fax' => $this->input->post('supplier_fax'),
            'supplier_email' => $this->input->post('supplier_email'),
            'supplier_note' => $this->input->post('supplier_note')
        ];

        $this->Suppliers_Model->addSupplier($insert);
        redirect('/suppliers', 'refresh');
    }

    /**
     * Remove a supplier
     * 
     * @param $id Supplier ID
     */
    public function remove($id)
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('Suppliers_Model');

        $this->Suppliers_Model->removeSupplier($id);
        redirect('/suppliers', 'refresh');
    }

    /**
     * Edit a supplier
     * 
     * @param $id Supplier ID
     */
    public function edit($id)
    {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->helper('form');
        $this->load->model('Suppliers_Model');

        $insert = [
            'supplier_name' => $this->input->post('supplier_name'),
            'supplier_address1' => $this->input->post('supplier_address1'),
            'supplier_address2' => $this->input->post('supplier_address2'),
            'supplier_city' => $this->input->post('supplier_city'),
            'supplier_county' => $this->input->post('supplier_county'),
            'supplier_postcode' => $this->input->post('supplier_postcode'),
            'supplier_telephone' => $this->input->post('supplier_telephone'),
            'supplier_fax' => $this->input->post('supplier_fax'),
            'supplier_email' => $this->input->post('supplier_email'),
            'supplier_note' => $this->input->post('supplier_note')
        ];

        $this->Suppliers_Model->editSupplier($id, $insert);
        redirect('/suppliers', 'refresh');
    }
}
