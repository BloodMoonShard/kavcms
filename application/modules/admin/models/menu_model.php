<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model  extends CI_Model {

    function add($data){
        if(@isset($data['display'])){
            $data['display'] = 1;
        }else{
            $data['display'] = 0;
        }
        return $this->db->insert('menu', $data);
    }

    function edit($data, $id){
        if(@isset($data['display'])){
            $data['display'] = 1;
        }else{
            $data['display'] = 0;
        }
        $this->db->where('id_menu', $id);
        return $this->db->update('menu', $data);
    }

    function get($id = false){
        if($id)
            $this->db->where('id_menu', $id);
        return $this->db->get('menu');
    }


    function delete($id = false){
        if(!$id)
            return false;
        $this->db->where('id_menu', $id);
        $this->db->delete('menu');
    }
}
