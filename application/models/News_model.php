<?php

class News_model extends CI_model
{
    public function get_one_by_slug($slug)
	{
		// Define the query
        $this->db->select('
            n.news_id,
            n.title,
            n.slug,
            n.image,
            n.author,
            n.short_description,
            n.content,
            mc.category_id,
            mc.category_name,
            mc.category_description,
            n.status_id,
            n.publish_start_date,
            n.created_at,
            n.created_by,
            n.updated_at,
            n.updated_by
        ');
        $this->db->from('news n');
        $this->db->join('mst_category mc', 'mc.category_id = n.category_id');
        $this->db->where(array('n.status_id'=> 2, 'n.slug' => $slug));
        $this->db->order_by('n.publish_start_date','DESC');
        
        // Execute the query
        $query = $this->db->get();

        // Return the result as an array of objects
        return $query->row();
	}

	public function all()
	{
		// Define the query
        $this->db->select('
            n.news_id,
            n.title,
            n.slug,
            n.image,
            n.author,
            n.short_description,
            n.content,
            mc.category_id,
            mc.category_name,
            mc.category_description,
            n.status_id,
            n.publish_start_date,
            n.created_at,
            n.created_by,
            n.updated_at,
            n.updated_by
        ');
        $this->db->from('news n');
        $this->db->join('mst_category mc', 'mc.category_id = n.category_id');
        $this->db->where(array('n.status_id'=> 2));
        $this->db->order_by('n.publish_start_date','DESC');
        
        // Execute the query
        $query = $this->db->get();

        // Return the result as an array of objects
        return $query->result_array();
	}

    public function get_news_limit($baris, $dari) {
        // Define the query
        $this->db->select('
            n.news_id,
            n.title,
            n.slug,
            n.image,
            n.author,
            n.short_description,
            n.content,
            mc.category_id,
            mc.category_name,
            mc.category_description,
            n.status_id,
            n.publish_start_date,
            n.created_at,
            n.created_by,
            n.updated_at,
            n.updated_by
        ');
        $this->db->from('news n');
        $this->db->join('mst_category mc', 'mc.category_id = n.category_id');
        $this->db->where(array('n.status_id'=> 2));
        $this->db->order_by('n.publish_start_date','DESC');
        $this->db->limit($dari, $baris);
        
        // Execute the query
        $query = $this->db->get();

        // Return the result as an array of objects
        return $query->result_array();
    }
}
?>