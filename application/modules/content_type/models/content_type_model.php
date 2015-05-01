<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_type_model  extends CI_Model {

    function add($data){
        return $this->db->insert('content_type', $data);
    }

    function edit($data, $id){
        if(@isset($data['menu'])){
            $data['menu'] = 1;
        }else{
            $data['menu'] = 0;
        }
        $this->db->where('id_type', $id);
        return $this->db->update('content_type', $data);
    }

    function get($id = false){
        if($id)
            $this->db->where('id_type', $id);
        return $this->db->get('content_type');
    }

    function delete($id = false){
        if(!$id)
            return false;
        $this->db->where('id_type', $id);
        $this->db->delete('content_type');
    }

    function get_menu_module(){
        $this->db->where('menu', 1);
        return $this->db->get('content_type')->result_array();
    }


}
