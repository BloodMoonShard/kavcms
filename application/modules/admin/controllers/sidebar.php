<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index($method = false, $page = false)
    {
        $option = array();
        $this->load->model('sidebar_model');

        switch($method){
            case 'add':
                if($this->input->post()){
                    if($id = $this->sidebar_model->add($this->input->post())){
                        $option['msg'] = 'Сайдбар успешно добавлен';
                        $option['msg_type'] = 'success';
                        header('Location: /admin/sidebar/edit/'.$id);
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $data['content'] = $this->load->view('/sidebar/sidebar_add.php', $option, true);
                $this->display_admin($data);
                break;
            case 'edit':
                if($this->input->post()){
                    if($this->sidebar_model->edit($this->input->post(), $page)){
                        $option['msg'] = 'Сайдбар обновлена';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $option['datas'] = $this->sidebar_model->get_elements($page)->result_array();
                $option['data'] = $this->sidebar_model->get($page)->row_array();
                $data['content'] = $this->load->view('/sidebar/sidebar_edit.php', $option, true);
                $this->display_admin($data);
                break;
            case 'delete':
                $option['data'] = $this->sidebar_model->delete($page);
                header('Location: /admin/sidebar');
                break;
            case 'add_element':
                if($this->sidebar_model->add_element($this->input->post())){
                    echo json_encode(array('status'=>true));
                    die();
                }
                break;
            case 'delete_elem':
                $parent_id = $this->sidebar_model->get_parent_id($page);
                $this->sidebar_model->remove_element($page);
                header('Location: /admin/sidebar/edit/'.$parent_id);
                break;
            default:
                $option['data'] = $this->sidebar_model->get()->result_array();
                $data['content'] = $this->load->view('/sidebar/sidebar.php', $option, true);
                $this->display_admin($data);
                break;
        }
    }
}