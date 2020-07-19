<?php

/**
 * 
 * Faults_Model
 * 
 * Provides CRUD operations for faults module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Faults_Model extends CI_Model
{

    /**
     * Gets the faults for a specific store
     * 
     * @param int $store_number Store number
     * @return Faults for a store
     */
    public function getStoreFaults($store_number)
    {
        $this->db->select('*');
        $this->db->from('faults');
        $this->db->join('stores_equipment','stores_equipment.stores_equipment_id = faults.stores_equipment_id');
        $this->db->where(array('store_number' => $store_number));
        
        return $this->db->get()->result();
    }
}
