<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Match_model');
        $this->load->model('Contest_model');   
        $this->load->model('User_model');    
    }


    public function send()
    {
    	$id = $this->uri->segment('3');
    	$match_id = base64_decode($id);

    	$match_status =  $this->Match_model->match_status_check($match_id);
    	if($match_status =="Result")
    	{
    		$contest_list = $this->Contest_model->get_contest_id_by_match_id($match_id);
    		foreach ($contest_list as $contest) {
    			$leaderboards = $this->Contest_model->get_leaderboard($contest['contest_id'],$match_id);
				foreach ($leaderboards as $leaderboard) 
				{
					$winning_price = $this->Contest_model->get_winning_price($leaderboard['rank'],$contest['contest_id']);
					if($winning_price !="")
    				{
    					$this->Contest_model->contest_winning_amount_credit($leaderboard['user_id'],$winning_price,$contest['contest_id']);
    				}	
				}
    		}


            $data = array('payment_status' =>'1');
            $this->Match_model->update($match_id , $data);

    		$this->session->set_flashdata('message','Payment transfer complete');
    		redirect('old_match');
    	}	
    	else
    	{
    		$this->session->set_flashdata('message','Match is not complete');
    		redirect('old_match');
    	}	
    }

}


