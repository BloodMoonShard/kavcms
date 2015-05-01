<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index($method = false, $page = false)
    {
        $option = array();
        $this->load->model('content_model');
        $this->load->model('content_type_model');

        switch($method){
            case 'add':
                if($this->input->post()){
                    if($this->content_model->add($this->input->post())){
                        $option['msg'] = 'Страница успешно добавлен';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $option['type']= $this->content_type_model->get()->result_array();
                $data['content'] = $this->load->view('/content/content_add.php', $option, true);
                $this->display_admin($data);
                break;
            case 'edit':
                if($this->input->post()){
                    if($this->content_model->edit($this->input->post(), $page)){
                        $option['msg'] = 'Страница успешно обновлена';
                        $option['msg_type'] = 'success';
                    }else{
                        $option['msg'] = 'Произошла ошибка';
                        $option['msg_type'] = 'error';
                    }
                }
                $option['type']= $this->content_type_model->get()->result_array();
                $option['data'] = $this->content_model->get($page)->row_array();
                $data['content'] = $this->load->view('/content/content_edit.php', $option, true);
                $this->display_admin($data);
                break;
            case 'delete':
                $option['data'] = $this->content_model->delete($page);
                header('Location: /admin/content');
                break;
            default:
                $option['data'] = $this->content_model->get_join()->result_array();
                $data['content'] = $this->load->view('/content/content.php', $option, true);
                $this->display_admin($data);
                break;
        }
    }
}