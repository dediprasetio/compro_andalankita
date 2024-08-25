<?php

class Auth_model extends CI_model
{

    public function view_by_username($data)
    {
        $this->db->select('mst_user.user_id, mst_user.user_name, mst_user.user_email, mst_user.user_phone_number, mst_user.id_card, mst_user.user_full_name, mst_user.user_password, mst_user.user_photo, user_level_management.user_level_position, user_level_management.user_level_status')
                ->from('mst_user')
                ->join('user_level_management', 'user_level_management.user_level_id = mst_user.user_level_id');
        $this->db->where($data);
        $query = $this->db->get();
        return $query;
    }
}