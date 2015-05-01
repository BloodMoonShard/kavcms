<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('adminpanel_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('rus2lat');
        $this->load->library('upload_ram');
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
                $this->display->display_adminpanel('/adminpanel/content/content_add.php', $option);
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
                $this->display->display_adminpanel('/adminpanel/content/content_edit.php', $option);
                break;
            case 'delete':
                $option['data'] = $this->content_model->delete($page);
                header('Location: /administration/content_type');
                break;
            default:
                $option['data'] = $this->content_model->get_join()->result_array();
                $this->display->display_adminpanel('/adminpanel/content/content.php', $option);
                break;
        }
    }
}