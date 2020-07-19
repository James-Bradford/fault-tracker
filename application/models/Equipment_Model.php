<?php

/**
 * 
 * Equipment_Model
 * 
 * Provides CRUD operations for equipment module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Equipment_Model extends CI_Model
{

    /**
     * Add an equipment
     * 
     * @param $data Equipment Attributes
     */
    public function addEquipment($data)
    {
        $this->db->insert('equipment', $data);
    }

    /**
     * Edit an equipment
     * 
     * @param $id Equipment ID
     * @param $insert Equipment Attributes
     */
    public function editEquipment($id, $insert)
    {
        $this->db->where('equipment_id', $id);
        $this->db->update('equipment', $insert);
    }

    /**
     * Get all equipment attributes
     * 
     * @return $query Attributes of all equipment
     */
    public function getAllEquipment()
    {
        $this->db->select('*');
        $this->db->from('equipment');
        $this->db->join('equipment_types', 'equipment_types.equipment_type_id = equipment.equipment_type_id');
        $this->db->join('manufacturers', 'manufacturers.manufacturer_id = equipment.manufacturer_id');
        $query = $this->db->get();
        return $query;
    }

    /**
     * Get specific equipment attributes
     * 
     * @param $id Equipment ID
     * @return $query Equipment Attributes
     */
    public function getEquipment($id)
    {
        $this->db->select('*');
        $this->db->from('equipment');
        $this->db->join('equipment_types', 'equipment_types.equipment_type_id = equipment.equipment_type_id');
        $this->db->join('manufacturers', 'manufacturers.manufacturer_id = equipment.manufacturer_id');
        $this->db->where(array('equipment_id' => $id));
        $query = $this->db->get()->result();
        return $query;
    }

    /**
     * Remve equipment
     * 
     * @param $id Equipment ID
     */
    public function removeEquipment($id)
    {
        $this->db->delete('equipment', array('equipment_id' => $id));
    }
}
