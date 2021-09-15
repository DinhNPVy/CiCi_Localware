<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brand extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('brand_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    public function index()
    {
        $message_success = $this->session->flashdata('message_success');
        $this->data['message_success'] = $message_success;

        $message_fail = $this->session->flashdata('message_fail');
        $this->data['message_fail'] = $message_fail;

        $input = array();
        $input['order'] = array('id', 'ASC');
        $list = $this->brand_model->get_list($input);
        $this->data['list'] = $list;

        $this->data['temp'] = 'admin/brand/index.php';
        $this->load->view('admin/main', $this->data);
    }
    public function add()
    {
        $input = array();
        $input['where'] = array('parent_id <' => '2');
        $list = $this->brand_model->get_list($input);
        $this->data['list'] = $list;

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert" style="padding:5px;border-bottom:0px;">', '</div>');

        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Tên thương hiệu', 'required');
            if ($this->form_validation->run()) {
                $data = array();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => $this->input->post('sort_order'),
                    'created' => now()
                );
                if ($this->brand_model->create($data)) {
                    $this->session->set_flashdata('message_success', 'Thêm thương hiệu thành công');
                } else {
                    $this->session->set_flashdata('message_fail', 'Thêm thương hiệu thất bại');
                }
                redirect(admin_url('brand'));
            }
        }

        $this->data['temp'] = 'admin/brand/add';
        $this->load->view('admin/main', $this->data);
    }
    public function edit()
    {
        $id = $this->uri->segment(4);
        $brand = $this->brand_model->get_info($id);
        if (empty($brand)) {
            $this->session->set_flashdata('message_fail', ' Thương hiệu không tồn tại');
            redirect(admin_url('brand'));
        }
        $this->data['brand'] = $brand;
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Tên thương hiệu', 'required');
            if ($this->form_validation->run()) {
                $data = array();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => $this->input->post('sort_order')
                );
                if ($this->brand_model->update($id, $data)) {
                    $this->session->set_flashdata('message_success', 'Thay đổi thương hiệu thành công');
                } else {
                    $this->session->set_flashdata('message_fail', 'Thay đổi thương hiệu thất bại');
                }
                redirect(admin_url('brand'));
            }
        }

        $input = array();
        $input['where'] = array('parent_id <' => '2');
        $list = $this->brand_model->get_list($input);
        $this->data['list'] = $list;


        $this->data['temp'] = 'admin/brand/edit';
        $this->load->view('admin/main', $this->data);
    }
    public function del()
    {
        $id = $this->uri->segment(4);
        $where = array();
        $where = array('id' => $id);
        if (!$this->brand_model->check_exists($where)) {
            $this->session->set_flashdata('message_fail', 'Thương hiệu không tồn tại');
            redirect(admin_url('brand'));
        }
        if ($this->brand_model->delete($id)) {
            $this->session->set_flashdata('message_success', 'Xóa thương hiệu thành công');
        } else {
            $this->session->set_flashdata('message_fail', 'Xóa thương hiệu thất bại');
        }
        redirect(admin_url('brand'));
    }
}
