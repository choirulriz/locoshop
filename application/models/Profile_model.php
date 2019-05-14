<?php

class Profile_model extends CI_model
{

    public function profile($id)
    {
        return $this->db->get_where('pembeli', ['id' => $id])->row_array();
    }

    function updateData($id,$data){
		$this->db->where($id);
		$this->db->update('pembeli',$data);
	}
}