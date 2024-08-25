<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Property extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->model('property_model', 'm_property');
        $this->load->model('area_model', 'm_area');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_property->all();
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Property',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        //Get property by Property ID
        $result = $this->m_property->getById($this->input->get('id'));
        $result_data = $result->row();
        //Get Area List By City ID
        $areas = $this->m_area->getByCity($result_data->city_id);

        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'data'      => array(
                'property'    => $result_data,
                'areas'      => $areas->result_array()
            )
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function add()
    {
        try{
                $inputData = array(
                    'property_title'   => $this->input->post('property_title'),
                    'property_description'   => $this->input->post('property_description'),
                    'asset_category_id'   => $this->input->post('asset_category_id'),
                    'sale_type'   => $this->input->post('sale_type'),
                    'tag_code'   => $this->input->post('tag_code'),
                    'address'   => $this->input->post('address'),
                    'unit_number'   => $this->input->post('unit_number'),
                    'area_id'   => $this->input->post('area_id'),
                    'city_id'   => $this->input->post('city_id'),
                    'land_area'   => $this->input->post('land_area'),
                    'building_area'   => $this->input->post('building_area'),
                    'bedroom'   => $this->input->post('bedroom'),
                    'bathroom'   => $this->input->post('bathroom'),
                    'price'   => $this->lib_main->extract_numbers($this->input->post('price')),
                    'agent_id'   => $this->input->post('agent_id'),
                    'owner_id'   => $this->input->post('owner_id'),
                    'fee'   => $this->input->post('fee'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                $this->main_model->insert($inputData, 'property');
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan properti'
                );
                $this->output
                    ->set_status_header(200, 'Success')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan properti')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            $updateData = array(
                'property_title'   => $this->input->post('property_title'),
                'property_description'   => $this->input->post('property_description'),
                'asset_category_id'   => $this->input->post('asset_category_id'),
                'sale_type'   => $this->input->post('sale_type'),
                'tag_code'   => $this->input->post('tag_code'),
                'address'   => $this->input->post('address'),
                'unit_number'   => $this->input->post('unit_number'),
                'area_id'   => $this->input->post('area_id'),
                'city_id'   => $this->input->post('city_id'),
                'land_area'   => $this->input->post('land_area'),
                'building_area'   => $this->input->post('building_area'),
                'bedroom'   => $this->input->post('bedroom'),
                'bathroom'   => $this->input->post('bathroom'),
                'price'   => $this->input->post('price'),
                'agent_id'   => $this->input->post('agent_id'),
                'owner_id'   => $this->input->post('owner_id'),
                'fee'   => $this->input->post('fee'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('property_id'=>$this->input->post('property_id')),
                $updateData,
                'property');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil memperbarui data properti'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Gagal memperbarui data properti')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function delete()
    {
        try {
            //Delete data set deleted = 1
            $this->main_model->update(
                array('property_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'property');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil hapus data'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Hapus data gagal')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
    

    public function id()
    {
        //Get property by Property ID
        $result = $this->m_property->getById($this->input->get('id'));
        
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => 1,
            'count'     => 1,
            'page'      => 1,
            'per_page'  => 1,
            'showing'   => '1-1',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
  
    public function sold_by_date()
    {
        //Get property by Property page
        $properties = $this->m_property->soldByDate($this->input->post('effective_start_date'), $this->input->post('effective_end_date'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Proses laporan berhasil',
            'data'      => $properties->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function count_property()
    {
        //Get property by Property page
        $count_property = $this->m_property->count_property();
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Jumlah properti',
            'data'      => $count_property->row()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function page()
    {
        //pagination config
        $config['perpage'] = 12;
        // $config['offset'] = empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4) == 1 ? 1 : ($this->uri->segment(4)-1)*$config['perpage'];
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->m_property->getOffset($config['offset'], $config['perpage'], $this->input->get('agent_name'));
        // $total_properties = $this->m_property->totalRows($this->input->get('agent_name'))->row();
        /*************************************************************************/
        //Get property by Property page
        $properties = $this->m_property->getOffset($config['offset'], $config['perpage'], '');
        //Get total rows property
        $total_properties = $this->m_property->totalRows('')->row();
        /**************************** View By Agent ******************************/

        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function by_category()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->m_property->getByCategory($config['offset'], $config['perpage'], $this->input->get('category'), $this->input->get('agent_name'));
        // $total_properties = $this->m_property->totalRowsByCategory($this->input->get('category'), $this->input->get('agent_name'))->row();
        /*************************************************************************/
        //Get property by Property page
        $properties = $this->m_property->getByCategory($config['offset'], $config['perpage'], $this->input->get('category'), '');
        //Get total rows property
        $total_properties = $this->m_property->totalRowsByCategory($this->input->get('category'), '')->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function by_sale_type()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->m_property->getBySaleType($config['offset'], $config['perpage'], $this->input->get('sale_type'), $this->input->get('agent_name'));
        // $total_properties = $this->m_property->totalRowsBySaleType($this->input->get('sale_type'), $this->input->get('agent_name'))->row();
        /*************************************************************************/
        //Get property by Property page
        $properties = $this->m_property->getBySaleType($config['offset'], $config['perpage'], $this->input->get('sale_type'), '');
        //Get total rows property
        $total_properties = $this->m_property->totalRowsBySaleType($this->input->get('sale_type'), '')->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function by_agent()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        //Get property by Property page
        $properties = $this->m_property->getByAgent($config['offset'], $config['perpage'], $this->input->get('agent_name'));
        //Get total rows property
        $total_properties = $this->m_property->totalRowsByAgent($this->input->get('agent_name'))->row();
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti by agent',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function tag()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->m_property->getByTag($config['offset'], $config['perpage'], $this->input->get('tag'), $this->input->get('agent_name'));
        // $total_properties = $this->m_property->totalRowsByTag($this->input->get('tag'), $this->input->get('agent_name'))->row();
        /*************************************************************************/
        //Get property by Property page
        $properties = $this->m_property->getByTag($config['offset'], $config['perpage'], $this->input->get('tag'), '');
        //Get total rows property
        $total_properties = $this->m_property->totalRowsByTag($this->input->get('tag'), '')->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function filter()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        //Get property by Property page
        $properties = $this->m_property->getByCategory($config['offset'], $config['perpage'], $this->input->get('category'));
        //Get total rows property
        $total_properties = $this->m_property->totalRowsByCategory($this->input->get('category'))->row();
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function recomendation()
    {
        $category = $this->input->post('category') ? $this->input->post('category') : '';
        $cities = $this->input->post('sale_type') ? $this->input->post('sale_type') : '';
        $tag = $this->input->post('tag') ? $this->input->post('tag') : '';  
        $tag = $this->input->post('tag') ? $this->input->post('tag') : '';  
        
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        /**************************** View By Agent ******************************/
        // $properties = $this->m_property->queryByKeyword($this->input->post('keywords'), $this->input->post('cities'), $category, $cities, $tag, $this->input->post('agent_name'));
        // $total_properties = $this->m_property->totalRowsByKeywords($this->input->post('keywords'), $this->input->post('cities'), $this->input->post('agent_name'))->row();
        /*************************************************************************/
        // //Get property by Property page
        $properties = $this->m_property->queryByKeyword($this->input->post('keywords'), $this->input->post('cities'), $category, $cities, $tag, '');
        // //Get total rows property
        $total_properties = $this->m_property->totalRowsByKeywords($this->input->post('keywords'), $this->input->post('cities'), $category, $cities, $tag, '')->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;

        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function recomendation_by_agent()
    {
        $category = $this->input->post('category') ? $this->input->post('category') : '';
        $cities = $this->input->post('sale_type') ? $this->input->post('sale_type') : '';
        $tag = $this->input->post('tag') ? $this->input->post('tag') : '';  
        $tag = $this->input->post('tag') ? $this->input->post('tag') : '';  
        
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = (empty($this->uri->segment(4)) ?  0 : $this->uri->segment(4) == 1) ? 0 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']-1+$config['perpage'];

        // //Get property by Property page
        $properties = $this->m_property->queryByKeyword($this->input->post('keywords'), $this->input->post('cities'), $category, $cities, $tag, $this->input->post('agent_name'));
        // //Get total rows property
        $total_properties = $this->m_property->totalRowsByKeywords($this->input->post('keywords'), $this->input->post('cities'), $category, $cities, $tag, $this->input->post('agent_name'))->row();
        /**************************** View By Agent ******************************/
        //Check total rows <> showing
        $showing = $showing > $total_properties->total_rows ? $total_properties->total_rows : $showing;

        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $total_properties->total_rows == 0 ? '0-'.$showing : 1+$config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
}
