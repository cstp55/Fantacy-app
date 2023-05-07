<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Password extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('Password_model');
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $this->load->view('../modules/loggedin_template/header',$data);
        $this->load->view('password/index', $data);
        $this->load->view('../modules/loggedin_template/footer',$data);
        
    }
    
    public function update() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            
            $password = $this->input->post('old_password',TRUE);
            $new_password = $this->input->post('password',TRUE);
            $old_pass =  $this->db->get_where('admin',array('LoginPassword'=> md5($password)))->row_array();
            
            if($old_pass['LoginPassword'] == md5($password))
            {
                $data = array('LoginPassword' => md5($new_password));
                $this->db->where('id','1');
                $this->db->update('admin',$data);
                $this->session->set_flashdata('message', 'Password Update  Successfully');
                redirect(site_url('password'));
            }
            else
            {
                $this->session->set_flashdata('message', 'Old password not match ');
                redirect(site_url('password'));
            }
            
          
        }
    }
    
    

    public function _rules() 
    {
        $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	    $this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
