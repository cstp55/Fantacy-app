<?php
class Website_model extends CI_Model 
{
   
    public function pointsystem()
    {
        $query = $this->db->get('points_distribution_rules');
        return $query->result();
        
    }

}
