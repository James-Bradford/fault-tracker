<?php

/**
 * 
 * Manufacturers_Model
 * 
 * Provides CRUD operations for manufacturers module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Manufacturers_Model extends CI_Model
{

    /**
     * Add a manufacturer
     * 
     * @param $data Manufacturer Attributes
     */
    public function addManufacturer($data)
    {
        $this->db->insert('manufacturers', $data);
    }

    /**
     * Edit a manufacturer
     * 
     * @param $id Manufacturer ID
     * @param $insert Manufacturer Attributes
     */
    public function editManufacturer($id, $insert)
    {
        $this->db->where('manufacturer_id', $id);
        $this->db->update('manufacturers', $insert);
    }

    /**
     * Get all manufacturers
     * 
     * @return Manufacturer Attributes
     */
    public function getManufacturers()
    {
        $query = $this->db->get('manufacturers');
        return $query;
    }

    /**
     * Get specific manufacturer
     * 
     * @param $id Manufacturer ID
     * @return Manufacturer Attributes
     */
    public function getManufacturer($id)
    {
        $query = $this->db->get_where('manufacturers', array('manufacturer_id' => $id))->result();
        return $query;
    }

    /**
     * Get all manufacturer ID and names
     * 
     * @return Manufacturer ID and Names
     */
    public function getManufacturerNameId()
    {
        $this->db->select('manufacturer_id, manufacturer_name');
        $this->db->from('manufacturers');
        $query = $this->db->get();
        return $query;
    }

    /**
     * Remove a manufacturer
     * 
     * @param $id Manufacturer ID
     */
    public function removeManufacturer($id)
    {
        $this->db->delete('manufacturers', array('manufacturer_id' => $id));
    }
}
