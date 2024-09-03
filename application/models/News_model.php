<?php

class News_model extends CI_model
{
	public function all()
	{
		return $this->db->query("SELECT
                                    mu.user_id,
                                    mu.user_name,
                                    mu.user_full_name,
                                    mu.user_email,
                                    mu.user_phone_number,
                                    mu.id_card,
                                    mu.user_photo,
                                    mu.status,
                                    ul.user_level_position
                                FROM mst_user mu
                                JOIN user_level_management ul ON ul.user_level_id = mu.user_level_id
                                AND mu.deleted = 0");
	}
}
?>