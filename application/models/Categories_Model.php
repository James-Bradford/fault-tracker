<?php

/**
 * 
 * Categories_Model
 * 
 * Provides CRUD operations for categories module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Categories_Model extends CI_Model
{

    /**
     * Add equipment type
     * 
     * @param $data Equipment Attributes
     */
    public function addEquipmentType($data)
    {
        $this->db->insert('equipment_types', $data);
    }

    /**
     * Edit equipment type
     * 
     * @param $id Equipment Type ID
     * @param $insert Equipment Type Attributes
     */
    public function editEquipmentType($id, $insert)
    {
        $this->db->where('equipment_type_id', $id);
        $this->db->update('equipment_types', $insert);
    }

    /**
     * Get all equipment types
     * 
     * @return $query Equipment Type Attributes
     */
    public function getEquipmentTypes()
    {
        $query = $this->db->get('equipment_types');
        return $query;
    }

    /**
     * Get an equipment type
     * 
     * @param $id Equipment Type ID
     * @return $query Equipment Type Attributes
     */
    public function getEquipmentType($id)
    {
        $query = $this->db->get_where('equipment_types', array('equipment_type_id' => $id))->result();
        return $query;
    }

    /**
     * Remove an equipment type
     * 
     * @param $id Equipment Type ID
     */
    public function removeEquipmentType($id)
    {
        $this->db->delete('equipment_types', array('equipment_type_id' => $id));
    }
}
