<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content_type extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index($method = false, $page = false)
    {
        $option = array();
        $this->load->model('content_type_model');

        switch($method){
            case 'add':
                if($this->input->post()){
                    if($this->content_type_model->add($this->input->post())){
                        $option['msg'] = 'Тип страницы успешно добавлен';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $data['content'] = $this->load->view('content_type/content_type_add.php', $option, true);
                $this->display_admin($data);
                break;
            case 'edit':
                if($this->input->post()){
                    if($this->content_type_model->edit($this->input->post(), $page)){
                        $option['msg'] = 'Тип страницы успешно обновлен';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $option['data'] = $this->content_type_model->get($page)->row_array();
                $data['content'] = $this->load->view('content_type/content_type_edit.php', $option, true);
                $this->display_admin($data);
                break;
            case 'delete':
                $option['data'] = $this->content_type_model->delete($page);
                header('Location: /admin/content_type');
                break;
            default:
                $option['data'] = $this->content_type_model->get()->result_array();
                $data['content'] = $this->load->view('content_type/content_type.php', $option, true);
                $this->display_admin($data);
                break;
        }



    }
}