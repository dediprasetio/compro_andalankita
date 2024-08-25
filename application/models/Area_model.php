<?php

class Area_model extends CI_model
{
	public function all()
	{
		return $this->db->query("SELECT
                                    ma.area_id,
                                    ma.area_name,
                                    ma.area_description,
                                    ma.city_id,
                                    mc.city_name
                                FROM mst_area ma
                                JOIN mst_cities mc ON mc.city_id = ma.city_id
                                WHERE ma.deleted = 0
                                ORDER BY ma.area_name ASC");
	}

    public function getById($id)
	{
		return $this->db->query("SELECT
                                    ma.area_id,
                                    ma.area_name,
                                    ma.area_description,
                                    ma.city_id,
                                    mc.city_name
                                FROM mst_area ma
                                JOIN mst_cities mc ON mc.city_id = ma.city_id
                                WHERE ma.area_id = $id
                                AND ma.deleted = 0
                                ORDER BY ma.area_name ASC");
	}

    public function getByCity($id)
	{
		return $this->db->query("SELECT
                                    ma.area_id,
                                    ma.area_name,
                                    ma.area_description,
                                    ma.city_id,
                                    mc.city_name
                                FROM mst_area ma
                                JOIN mst_cities mc ON mc.city_id = ma.city_id
                                WHERE ma.city_id = $id
                                AND ma.deleted = 0
                                ORDER BY ma.area_name ASC");
	}
}