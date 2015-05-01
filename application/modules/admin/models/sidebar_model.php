<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar_model  extends CI_Model {

    function add($data){
        $this->db->insert('sidebar', $data);
        return $this->db->insert_id();
    }

    function edit($data, $id){

        $this->db->where('sidebar.id_sidebar', $id);
        return $this->db->update('sidebar', $data);
    }

    function get($id = false){
        $this->db->select('sidebar.*');
            $this->db->from('sidebar');
        if($id)
            $this->db->where('sidebar.id_sidebar', $id);
        return $this->db->get();
    }

    function delete($id = false){
        if(!$id)
            return false;
        $this->db->where('sidebar.id_sidebar', $id);
        $this->db->delete('sidebar');
    }

    function get_elements($page){
        $this->db->where('id_sidebar', $page);
        return $this->db->get('sidebar_elements');
    }

    function add_element($data){
        return $this->db->insert('sidebar_elements', $data);
    }

    function remove_element($id){
        $this->db->where('id_sidebar_elements', $id);
        return $this->db->delete('sidebar_elements');
    }

    function get_parent_id($id){
        $this->db->where('id_sidebar_elements', $id);
        $result = $this->db->get('sidebar_elements');
        $result = $result->row_array();
        return $result['id_sidebar'];
    }

}
