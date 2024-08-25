<?php

class Distribution_model extends CI_model
{
	public function all_current_date()
	{
		return $this->db->query("SELECT * FROM material_request mr WHERE mr.request_date = CURRENT_DATE() AND deleted = 0");
	}

    public function draft($outlet_code)
	{
		return $this->db->query("SELECT * FROM material_request mr WHERE mr.material_request_status = 'draft' AND mr.outlet_code = '$outlet_code'");
	}

    public function detail_by_request_id($id)
	{
		return $this->db->query("SELECT
                                    mrd.request_detail_id,
                                    mrd.request_quantity,
                                    mp.product_name,
                                    mp.product_unit,
                                    mpc.category_code,
                                    mpc.category_name
                                FROM material_request_detail mrd
                                JOIN mst_product mp ON mp.product_id = mrd.product_id
                                JOIN mst_product_category mpc ON mpc.category_id = mp.category_id
                                WHERE mrd.request_id = $id");
	}
}