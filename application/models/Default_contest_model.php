<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Default_contest_model extends CI_Model
{

    public $table = 'contest_defalut';
    public $id = 'contest_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('contest_id', $q);
	$this->db->or_like('contest_name', $q);
	$this->db->or_like('contest_tag', $q);
	$this->db->or_like('winners', $q);
	$this->db->or_like('prize_pool', $q);
	$this->db->or_like('total_team', $q);
	$this->db->or_like('join_team', $q);
	$this->db->or_like('entry', $q);
	$this->db->or_like('contest_description', $q);
	$this->db->or_like('contest_note1', $q);
	$this->db->or_like('contest_note2', $q);
	$this->db->or_like('match_id', $q);
	$this->db->or_like('type', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('contest_id', $q);
	$this->db->or_like('contest_name', $q);
	$this->db->or_like('contest_tag', $q);
	$this->db->or_like('winners', $q);
	$this->db->or_like('prize_pool', $q);
	$this->db->or_like('total_team', $q);
	$this->db->or_like('join_team', $q);
	$this->db->or_like('entry', $q);
	$this->db->or_like('contest_description', $q);
	$this->db->or_like('contest_note1', $q);
	$this->db->or_like('contest_note2', $q);
	$this->db->or_like('match_id', $q);
	$this->db->or_like('type', $q);
	//$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function insert_winnig($data)
    {
        $this->db->insert('winning_information_default', $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_match_by_id($id)
    {
        $this->db->where('match_id',$id);
        return $this->db->get('match')->row();
    }


    function match_list()
    {
        $today = date("Y-m-d H:i:s");
        $this->db->select('match_id,title,time');
        $this->db->where('time >', $today);
        return  $this->db->get('match')->result();
    }

     // get data with limit and search
    function get_limit_data_contest($limit, $id, $start = 0, $q = NULL) {
    $this->db->order_by('winning_info_id', 'ASC');
    $this->db->where('contest_id',$id);
    return $this->db->get('winning_information_default')->result();
    }

    // get total rows
    function total_rows_contest($id, $q = NULL) {
    $this->db->like('contest_id', $q);
    $this->db->or_like('rank', $q);
    $this->db->or_like('price', $q);
    $this->db->from('winning_information_default');
    $this->db->where('contest_id',$id);
    return $this->db->count_all_results();
    }

    // get data by id
    function get_winninginfo_by_id($id)
    {
        $this->db->where('winning_info_id', $id);
        return $this->db->get('winning_information_default')->row();
    }

    function update_winninginfo($id, $data)
    {
        $this->db->where('winning_info_id', $id);
        return $this->db->update('winning_information_default', $data);
    }

    // delete data
    function winninginfo_delete($id)
    {
        $this->db->where('winning_info_id', $id);
        $this->db->delete('winning_information_default');
    }

    function get_contest_by_matchid($id)
    {
        $this->db->from($this->table);
        $this->db->where('match_id',$id);
        $this->db->order_by($this->id, $this->order);
        $query= $this->db->get();
        $result = $query->result_array();
        $options= "<option value=''>Select Contest</option>";
        foreach ($result as $key => $value) {
            $options .="<option value = ".$value['contest_id'].">".$value['contest_name']."</option>";
        }
        return $options;
    }

    function get_contest_by_match($id)
    {
        $this->db->from($this->table);
        $this->db->where('match_id',$id);
        $this->db->order_by($this->id, $this->order);
        $query= $this->db->get();
        $result = $query->result_array();
        return $result;
    }



}

/* End of file Contest_model.php */
/* Location: ./application/models/Contest_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-10-29 11:26:46 */
/* http://harviacode.com */