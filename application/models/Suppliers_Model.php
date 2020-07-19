<?php

/**
 * 
 * Suppliers_Model
 * 
 * Provides CRUD operations for suppliers module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Suppliers_Model extends CI_Model
{

    /**
     * Add a supplier
     * 
     * @param $data Supplier Attributes
     */
    public function addSupplier($data)
    {
        $this->db->insert('suppliers', $data);
    }

    /**
     * Edit a supplier
     * 
     * @param $id Supplier ID
     * @param $insert Supplier Attributes
     */
    public function editSupplier($id, $insert)
    {
        $this->db->where('supplier_id', $id);
        $this->db->update('suppliers', $insert);
    }

    /**
     * Get all suppliers
     * 
     * @return Supplier Attributes
     */
    public function getSuppliers()
    {
        $query = $this->db->get('suppliers');
        return $query;
    }

    /**
     * Get specific supplier
     * 
     * @return Supplier Attributes
     */
    public function getSupplier($id)
    {
        $query = $this->db->get_where('suppliers', array('supplier_id' => $id))->result();
        return $query;
    }

    /**
     * Remove a supplier
     * 
     * @param $id Supplier ID
     */
    public function removeSupplier($id)
    {
        $this->db->delete('suppliers', array('supplier_id' => $id));
    }
}
