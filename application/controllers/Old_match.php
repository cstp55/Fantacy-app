<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Old_match extends MY_Controller {
   
   public function __construct() 
   {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->load->model('match_model');
        $this->load->model('user_model');
        $this->load->model('transaction_model');
        $this->load->model('missing_player_details_model');
        $this->load->model('match_players_model');
        $this->load->model('contest_model');
        $this->load->model('team_model');
        $this->load->model('user_team_model');     
        $this->load->model('players_model');     
           
   }

  public function index()
  {
      $data['match_data'] = $this->match_model->get_match_by_match_status('Result');
      $this->load->view('../modules/loggedin_template/header',$data);
      $this->load->view('old_match/old_match_list',$data);
      $this->load->view('../modules/loggedin_template/footer',$data);
  }

  public function contest_list()
  {
      $matchid = $this->uri->segment('3');
      $data['all_contest'] = $contests =$this->contest_model->get_contest_by_match($matchid);
      //echo "<pre>";print_r($data);die();
      //echo $this->db->last_query();die();
      $this->load->view('../modules/loggedin_template/header',$data);
      $this->load->view('old_match/contest_list');
      $this->load->view('../modules/loggedin_template/footer');
  }


  public function match_leaderboard(){
        $data = array();
        $matchid = $this->uri->segment('3');
        $data['contestid'] = $contestid = $this->uri->segment('4');
       // $data['match_record'] =$this->match_model->get_by_id($matchid);
        //$toss_winner_team =$data['match_record']->toss_winner_team;
        //$data['toss_winner'] =$this->team_model->get_by_unique_id($toss_winner_team);
        $data['total_teams'] =$this->match_model->total_team_join($matchid);
        //$data['total_team'] = count($data['total_teams']);
        $data['Topranks'] =$this->match_model->get_toprank($matchid,$contestid);
        $data['leaderboards'] =$this->match_model->get_leaderboard($matchid,$contestid);
        //$data['all_contest'] = $contests =$this->contest_model->get_contest_by_match($matchid);
        //$data['contests'] = count($contests);
        //$data['user_count'] = $this->match_model->get_userjoin_count($matchid);
        $this->load->view('../modules/loggedin_template/header',$data);
        $this->load->view('old_match/match_dashboard',$data);
        $this->load->view('../modules/loggedin_template/footer',$data);
                
    } 

   public function teams_list($id)
   {
      $id = $this->uri->segment('3');
    $data['team_data'] = $this->user_team_model->get_all($id);
   // print_r($data);die();
    $this->load->view('../modules/loggedin_template/header',$data);
    $this->load->view('old_match/old_team_list');
    $this->load->view('../modules/loggedin_template/footer');
   }
  
      
  
    
  

}
