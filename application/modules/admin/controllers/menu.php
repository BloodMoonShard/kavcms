<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index($method = false, $page = false)
    {
        $option = array();
        $this->load->model('menu_model');

        switch($method){
            case 'add':
                if($this->input->post()){
                    if($this->menu_model->add($this->input->post())){
                        $option['msg'] = 'Пункт меню успешно добавлен';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $data['content'] = $this->load->view('/menu/menu_add.php', $option, true);
                $this->display_admin($data);
                break;
            case 'edit':
                if($this->input->post()){
                    if($this->menu_model->edit($this->input->post(), $page)){
                        $option['msg'] = 'Пункт меню успешно обновлена';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }

                $option['data'] = $this->menu_model->get($page)->row_array();
                $data['content'] = $this->load->view('/menu/menu_edit.php', $option, true);
                $this->display_admin($data);
                break;
            case 'delete':
                $option['data'] = $this->menu_model->delete($page);
                header('Location: /admin/menu');
                break;
            default:
                $option['data'] = $this->menu_model->get()->result_array();
                $data['content'] = $this->load->view('/menu/menu.php', $option, true);
                $this->display_admin($data);
                break;
        }
    }
}