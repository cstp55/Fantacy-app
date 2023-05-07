<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    //website controller
class Website extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Website_model');        
        $this->load->library(array('form_validation'));   
        $this->load->library('Stack_web_gateway_paytm_kit');
        $this->load->library('email',array(
            'mailtype'  => 'html',
            'newline'   => '\r\n'
        ));

        
    }
   
    public function how_to_play()
    {
        $this->load->view('how_to_play');
    }
    
    public function termsandconditions()
    {
        $data['title'] = 'Terms and Condition' ;
        $this->load->view('header');
        $this->load->view('termsandcondition',$data);
        $this->load->view('footer');
    }

    public function pointsystem()
    {
        $data = array();
        $data['title'] = 'Point System' ;
        $data['points'] = $this->Website_model->pointsystem();
        $this->load->view('header');
        $this->load->view('PointSystem',$data);
        $this->load->view('footer');
    }

    public function contactus()
    {   
        $data['title'] = 'Contact Us' ;
        $this->load->view('header');
        $this->load->view('contactus');
        $this->load->view('footer');
    }
 
}
