<?php

class Property_model extends CI_model
{
	public function all()
	{
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                ORDER BY p.property_id DESC");
	}
    

    public function getById($id)
	{
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.tag_code,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                WHERE p.property_id = $id
                                AND p.deleted = 0
                                ORDER BY p.property_id");
	}

    public function soldByDate($start_date, $end_date)
	{
		return $this->db->query("SELECT
                                    s.effective_date,
                                    mc.customer_full_name,
                                    p.property_title,
                                    mua.user_full_name agent_name,
                                    mo.owner_name
                                FROM service s
                                JOIN mst_customer mc ON mc.customer_id = s.customer_id
                                JOIN property p ON p.property_id = s.property_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner mo ON mo.owner_id = p.owner_id
                                WHERE s.deleted = 0
                                AND s.effective_date BETWEEN '$start_date' AND '$end_date'
                                AND p.sale_status = 1");
	}

    public function count_by_category($agent_name = '')
	{
		return $this->db->query("SELECT
                                    mac.asset_category_name,
                                    (SELECT COUNT(p.property_id)
                                    FROM property p
                                    JOIN mst_user mua ON mua.user_id = p.agent_id
                                    WHERE p.asset_category_id = mac.asset_category_id
                                    AND p.deleted = 0
                                    AND p.sale_status = 0
                                    AND LOWER(mua.user_full_name) like '%$agent_name%') total_property
                                FROM mst_asset_category mac");
	}

    public function count_property()
	{
		return $this->db->query("SELECT
                                    COUNT(p.property_id) all_property,
                                    SUM(CASE WHEN p.sale_status = 1 THEN 1 END) sold_property,
                                    SUM(CASE WHEN p.sale_status = 0 THEN 1 END) available_property
                                FROM property p
                                WHERE p.deleted = 0");
	}

    public function queryByKeyword($keyword, $cities, $category, $sale_type, $tag, $agent_name)
	{
        $title = empty($keyword) ? "%%" : "%".$keyword."%";
        $address = empty($keyword) ? "%%" : "%".$keyword."%";
        $cities = empty($cities) ? "%%" : "%".$cities."%";
        $category = empty($category) ? "%%" : "%".$category."%";
        $tag = empty($tag) ? "%%" : "%".$tag."%";
        $sale_type = '%%';
        if(!empty($sale_type)){
            if($sale_type == 'sale'){
                $sale_type = '%Jual%';
            }else if($sale_type == 'rent'){
                $sale_type = '%Sewa%';
            }
        }

		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                JOIN mst_tags mtg ON mtg.tag_code = p.tag_code
                                WHERE p.property_title like '$title'
                                AND ma.area_name like '$cities'
                                AND mac.asset_category_name like '$category'
                                AND p.sale_type like '$sale_type'
                                AND mtg.tag_name like '$tag'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND p.deleted = 0
                                AND p.sale_status = 0
                                OR p.address like '$address'
                                AND ma.area_name like '$cities'
                                AND mac.asset_category_name like '$category'
                                AND p.sale_type like '$sale_type'
                                AND mtg.tag_name like '$tag'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND p.deleted = 0
                                AND p.sale_status = 0
                                ORDER BY p.property_id DESC
                                LIMIT 12");
	}

    public function getOffset($offset, $items_per_page = 12, $agent_name='')
	{
        $offset = $offset != null ? $offset : 0;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}

    public function getNew($offset=12)
	{
        $offset = $offset != null ? $offset : 0;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                ORDER BY p.property_id DESC
                                LIMIT $offset");
	}

    public function totalRows($agent_name)
	{
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND p.sale_status = 0");
	}

    public function getByCategory($offset, $items_per_page = 12, $category, $agent_name)
	{
        $offset = $offset != null ? $offset : 0;
        $category = empty($category) ? "%%" : "%".$category."%";
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                AND mac.asset_category_name like '$category'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}

    public function getBySaleType($offset, $items_per_page = 12, $sale_type, $agent_name)
	{
        $offset = $offset != null ? $offset : 0;
        $sale_type = (empty($sale_type) ? 0 : $sale_type == "sale") ? 'JUAL' : 'SEWA';
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                AND UPPER(p.sale_type) = '$sale_type'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}

    public function getByTag($offset, $items_per_page = 12, $tag, $agent_name)
	{
        $offset = $offset != null ? $offset : 0;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                JOIN mst_tags mt ON mt.tag_code = p.tag_code
                                WHERE p.deleted = 0
                                AND p.sale_status = 0
                                AND LOWER(mt.tag_name) = LOWER('$tag')
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}

    public function getByAgent($offset, $items_per_page = 12, $agent_name)
	{
        $offset = $offset != null ? $offset : 0;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.sale_status,
                                    p.address,
                                    p.unit_number,
                                    land_area,
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
                                ORDER BY p.property_id DESC
                                LIMIT $offset, $items_per_page");
	}

    public function totalRowsByTag($tag, $agent_name)
	{
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                JOIN mst_tags mt ON mt.tag_code = p.tag_code
                                WHERE p.deleted = 0
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND LOWER(mt.tag_name) = LOWER('$tag')");
	}

    public function totalRowsByKeywords($keyword, $cities, $category, $sale_type, $tag, $agent_name)
	{
        $title = empty($keyword) ? "%%" : "%".$keyword."%";
        $address = empty($keyword) ? "%%" : "%".$keyword."%";
        $cities = empty($cities) ? "%%" : "%".$cities."%";
        $category = empty($category) ? "%%" : "%".$category."%";
        $tag = empty($tag) ? "%%" : "%".$tag."%";
        $sale_type = '%%';
        if(!empty($sale_type)){
            if($sale_type == 'sale'){
                $sale_type = '%Jual%';
            }else if($sale_type == 'rent'){
                $sale_type = '%Sewa%';
            }
        }

		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                JOIN mst_tags mtg ON mtg.tag_code = p.tag_code
                                WHERE p.property_title like '$title'
                                AND ma.area_name like '$cities'
                                AND mac.asset_category_name like '$category'
                                AND p.sale_type like '$sale_type'
                                AND mtg.tag_name like '$tag'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND p.deleted = 0
                                AND p.sale_status = 0
                                OR p.address like '$address'
                                AND ma.area_name like '$cities'
                                AND mac.asset_category_name like '$category'
                                AND p.sale_type like '$sale_type'
                                AND mtg.tag_name like '$tag'
                                AND LOWER(mua.user_full_name) like '%$agent_name%'
                                AND p.deleted = 0
                                AND p.sale_status = 0
                                AND p.deleted = 0");
	}

    public function totalRowsByAgent($agent_name)
	{
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
                                AND LOWER(mua.user_full_name) like '%$agent_name%'");
	}

    public function totalRowsByCategory($category, $agent_name)
	{
        $category = empty($category) ? "%%" : "%".$category."%";
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
                                AND mac.asset_category_name like '$category'");
	}

    public function totalRowsBySaleType($sale_type, $agent_name)
	{
        $sale_type = (empty($sale_type) ? 0 : $sale_type == "sale") ? 'JUAL' : 'SEWA';
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
                                AND UPPER(p.sale_type) = '$sale_type'");
	}
}