<?php

class Filter_model extends CI_model
{
    public function filter($offset, $items_per_page = 12, $category, $bedroom, $land_area, $price, $agent, $agent_name)
	{
        $offset = $offset != null ? $offset : 0;
        $where_category = !empty($category) ? $this->condition_by_category($category) : '';
        $where_price = $this->condition_by_price($price);
        $where_land_area = $this->condition_by_land_area($land_area);
        $where_bedroom = $this->condition_by_bedroom($bedroom);
        $where_agent = $agent == '' ? '' : 'AND p.agent_id = $agent';
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    p.land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND p.sale_status = 0
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                $where_category
                                $where_price
                                $where_land_area
                                $where_bedroom
                                $where_agent
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}
    
    public function totalRowsFilter($category, $bedroom, $land_area, $price, $agent_name)
	{
        $where_category = !empty($category) ? $this->condition_by_category($category) : '';
        $where_price = $this->condition_by_price($price);
        $where_land_area = $this->condition_by_land_area($land_area);
        $where_bedroom = $this->condition_by_bedroom($bedroom);
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND p.sale_status = 0
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                $where_category
                                $where_price
                                $where_land_area
                                $where_bedroom");
	}

    function condition_by_category($value){
        $new_value ='';
        $ram_filter = implode("','", $value);
        $new_value .= "AND mac.asset_category_name IN ('".$ram_filter."')";
        return $new_value;
    }

    function condition_by_price($value){
        $new_value = '';
        switch ($value) {
            case 1:
                $new_value = 'AND p.price > 10000000000';
                break;
            case 2:
                $new_value = 'AND p.price between 5000000000 AND 10000000000';
                break;
            case 3:
                $new_value = 'AND p.price between 2500000000 AND 5000000000';
                break;
            case 4:
                $new_value = 'AND p.price between 1000000000 AND 2000000000';
                break;
            case 5:
                $new_value = 'AND p.price < 1000000000';
                break;
            default:
                $new_value = '';
        }
        return $new_value;
    }

    function condition_by_land_area($value){
        $new_value = '';
        switch ($value) {
            case 1:
                $new_value = 'AND p.land_area > 1000';
                break;
            case 2:
                $new_value = 'AND p.land_area between 500 AND 1000';
                break;
            case 3:
                $new_value = 'AND p.land_area between 250 AND 500';
                break;
            case 4:
                $new_value = 'AND p.land_area between 100 AND 200';
                break;
            case 5:
                $new_value = 'AND p.land_area < 100';
                break;
            default:
                $new_value = '';
        }
        return $new_value;
    }

    function condition_by_bedroom($value){
        $new_value = '';
        switch ($value) {
            case 1:
                $new_value = 'AND p.bedroom = 1';
                break;
            case 2:
                $new_value = 'AND p.bedroom = 2';
                break;
            case 3:
                $new_value = 'AND p.bedroom = 3';
                break;
            case 4:
                $new_value = 'AND p.bedroom = 4';
                break;
            case 5:
                $new_value = 'AND p.bedroom >= 5';
                break;
            default:
                $new_value = '';
        }
        return $new_value;
    }
}