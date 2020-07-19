<?php

/**
 * 
 * Stores_Model
 * 
 * Provides CRUD operations for stores module
 * 
 * @author James Bradford
 * @version 1.0
 * 
 */
class Stores_Model extends CI_Model {

/**
 * Adds a store to the database
 * 
 * @param array $data Store data to be inserted
 */
public function addStore($data)
{
    $this->db->insert('stores', $data);
}

/**
 * Edits a store already in the database
 * 
 * @param int $store_number Store number
 * @param array $data Data to be updated
 */
public function editStore($store_number, $data)
{
    $this->db->where('store_number', $store_number);
    $this->db->update('stores', $data);
}

/**
 * Gets all stores in the database
 * 
 * @return array All stores and their details
 */
public function getStores() {
    $query = $this->db->get('stores');
    return $query;
}

/**
 * Gets details for a specific store
 * 
 * @param int $store_number Store number
 * @return array Store details
 */
public function getStore($store_number) {
    $query = $this->db->get_where('stores', array('store_number' => $store_number))->result();
    return $query;
}


/**
 * Removes a store from the database
 * 
 * @param int $store_number Store number to be deleted
 */
public function removeStore($store_number) {
    $this->db->delete('stores', array('store_number' => $store_number)); 
}

/**
 * Assigns equipment to a store
 * 
 * @param array $data Equipment data to be added
 */
public function assignEquipment($data) 
{
    $this->db->insert('stores_equipment', $data);
}

/**
 * Gets a list of the equipment in the store
 * 
 * @param int $store_number Store number
 * @return array Equipment assigned to store
 */
public function getStoreEquipment($store_number) {
    $this->db->select('*');
    $this->db->from('stores_equipment');
    $this->db->join('equipment', 'equipment.equipment_id = stores_equipment.equipment_id');
    $this->db->join('equipment_types', 'equipment_types.equipment_type_id = equipment.equipment_type_id');
    $this->db->join('manufacturers', 'manufacturers.manufacturer_id = equipment.manufacturer_id');
    $this->db->where(array('store_number' => $store_number));
    $query = $this->db->get()->result();
    return $query;
}

/**
 * Unassigns equipment from a store
 * 
 * @param int $store_number Store number
 * @param int $equipment_id ID of equipment to be unassigned
 */
public function unassignEquipment($store_number, $equipment_id) 
{
    $this->db->delete('stores_equipment', array('store_number' => $store_number, 'stores_equipment_id' => $equipment_id)); 
}

/**
 * Returns users assigned to a given store.
 * 
 * @param int $store_number Store number
 * @return array Assigned users
 */
public function getStoreUsers($store_number) {
    $this->db->select('*');
    $this->db->from('users_stores');
    $this->db->join('users','users.id = users_stores.user_id');
    $this->db->where(array('store_number' => $store_number));
    
    return $this->db->get()->result();
}

/**
 * Returns stores assigned to a user.
 * 
 * @param int $store_number Store number
 * @return array Assigned stores
 */
public function getUserStores($user_id) {
    $this->db->select('*');
    $this->db->from('users_stores');
    $this->db->join('stores','stores.store_number = users_stores.store_number');
    $this->db->where(array('user_id' => $user_id));
    
    return $this->db->get()->result();
}

/**
 * Assigns users to a store
 * 
 * @param int $store_number Store number
 * @param int $user_id User id
 */
public function assignUsers($data) {
    $this->db->insert('users_stores', $data);
}

/**
 * Unassigns a user from a store
 * 
 * @param int $store_number Store number
 * @param int $user_id ID of user
 */
public function unassignUser($store_number, $user_id) 
{
    $this->db->delete('users_stores', array('store_number' => $store_number, 'user_id' => $user_id)); 
}

}