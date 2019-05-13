<?php

class Profile_model extends CI_model
{

    public function profile($id)
    {
        return $this->db->get_where('pembeli', ['id' => $id])->row_array();
    }
}