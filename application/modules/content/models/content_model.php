<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model  extends CI_Model {

    function add($data){
        return $this->db->insert('content', $data);
    }

    function edit($data, $id){
        $this->db->where('id_content', $id);
        return $this->db->update('content', $data);
    }

    function get($id = false){
        if($id)
            $this->db->where('id_content', $id);
        return $this->db->get('content');
    }

    function get_join(){
        $this->db->select('content.*, content_type.human_name');
        $this->db->from('content');
        $this->db->join('content_type','content.type=content_type.id_type', 'left');
        return $this->db->get();
    }

    function delete($id = false){
        if(!$id)
            return false;
        $this->db->where('id_type', $id);
        $this->db->delete('content');
    }

    function get_content($module, $page = false){
        $this->db->where('type', $this->get_module($module));
        if($page){
            $this->db->where('id_content', $page);
            return $this->db->get('content')->row_array();
        }else{
            return  $this->db->get('content')->result_array();
        }

    }

    function get_module($module){
        $this->db->where('name_module', $module);
        $result = $this->db->get('content_type')->row_array();
        return $result['id_type'];
    }


}
