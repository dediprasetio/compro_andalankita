<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Import extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->check_login('admin');
        $this->load->model('main_model', 'm_main');
        $this->load->library('lib_main');
        $this->load->library('Excel');
    }

    public function index()
    {
        $dataArray = array(
            'status'    => 'Ok',
            'message'   => 'Import page',
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function properties()
    {
        // try {
            //Prepairing Import Data
            $files = $_FILES;
            $file = $files['file'];
            $fname = $file['tmp_name'];
            $file = $_FILES['file']['name'];
            $fname = $_FILES['file']['tmp_name'];
            $ext = explode('.', $file);
            $objPHPExcel = PHPExcel_IOFactory::load($fname);
            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, false, true);
            $total_row_exist = count($allDataInSheet);
            
            //CHECK ROW CANT > 501 (1 is title record excel)
            if($total_row_exist > 501){
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Gagal import data, Maks data 500 baris',
                );
                $this->output
                    ->set_status_header(500, 'Error')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }else{

                //GET Master Data
                $mst_asset_category = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_id', 'ASC')->result_array();
                $mst_area = $this->m_main->viewWhereOrdering('mst_area', array('deleted' => 0), 'area_id', 'ASC')->result_array();
                $mst_cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_id', 'ASC')->result_array();
                $mst_tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_code', 'ASC')->result_array();
                $mst_agent = $this->m_main->viewWhereOrdering('mst_user', array('deleted' => 0), 'user_id', 'ASC')->result_array();
                $mst_owner = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0), 'owner_id', 'ASC')->result_array();

                $populate_data = array();
                unset($allDataInSheet[0]);
                foreach($allDataInSheet as $row){
                    
                    //INITIALIZE FOR INPUT DATA AN ARRAY
                    $array_row = array();

                    // CHECK ASSET CATEGORY ARE EXIST OR NOT
                    $mst_asset_category_filterred = $this->lib_main->filter_array($mst_asset_category, ['asset_category_name', ucwords(strtolower($row[4]))]);
                    if(count($mst_asset_category_filterred) > 0){
                        $myarray = array_values($mst_asset_category_filterred);
                        $array_row['asset_category_id'] = $myarray[0]['asset_category_id'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'asset_category_name'   => ucwords(strtolower($row[4])),
                            'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                            'updated_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
                        );
                        $this->m_main->insert($inputData, 'mst_asset_category');
                        $insert_id = $this->db->insert_id();
                        $array_row['asset_category_id'] = $insert_id;
                        //Re-Select Data
                        $mst_asset_category = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_id', 'ASC')->result_array();
                    }

                    //CHECK CITIES ARE EXIST OR NOT
                    $mst_cities_filterred = $this->lib_main->filter_array($mst_cities, ['city_name', ucwords(strtolower($row[8]))]);
                    if(count($mst_cities_filterred) > 0){
                        $myarray = array_values($mst_cities_filterred);
                        $array_row['city_id'] = $myarray[0]['city_id'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'city_name'   => ucwords(strtolower($row[8])),
                            'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                            'updated_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
                        );
                        $this->main_model->insert($inputData, 'mst_cities');
                        $insert_id = $this->db->insert_id();
                        $array_row['city_id'] = $insert_id;
                        // Re-Select Data
                        $mst_cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_id', 'ASC')->result_array();
                    }

                    //CHECK AREAS ARE EXIST OR NOT
                    $mst_area_filterred = $this->lib_main->filter_array($mst_area, ['area_name', ucwords(strtolower($row[7]))]);
                    if(count($mst_area_filterred) > 0){
                        $myarray = array_values($mst_area_filterred);
                        $array_row['area_id'] = $myarray[0]['area_id'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'area_name'     => ucwords(strtolower($row[7])),
                            'city_id'       => $array_row['city_id'],
                            'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                            'updated_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
                        );
                        $this->main_model->insert($inputData, 'mst_area');
                        $insert_id = $this->db->insert_id();
                        $array_row['area_id'] = $insert_id;
                        // Re-Select Data
                        $mst_area = $this->m_main->viewWhereOrdering('mst_area', array('deleted' => 0), 'area_id', 'ASC')->result_array();
                    }

                    //CHECK TAGS ARE EXIST OR NOT
                    $mst_tags_filterred = $this->lib_main->filter_array($mst_tags, ['tag_name', ucwords(strtolower($row[13]))]);
                    if(count($mst_tags_filterred) > 0){
                        $myarray = array_values($mst_tags_filterred);
                        $array_row['tag_code'] = $myarray[0]['tag_code'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'tag_code'     => strtoupper($row[13]),
                            'tag_name'       => ucwords(strtolower($row[13])),
                            'created_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid'),
                            'updated_by'    => $this->session->userdata(SHORT_APP_NAME . '_' . 'userid')
                        );
                        $this->main_model->insert($inputData, 'mst_tags');
                        $array_row['tag_code'] = strtoupper($row[13]);
                        // Re-Select Data
                        $mst_tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_id', 'ASC')->result_array();
                    }

                    //CHECK AGENT ARE EXIST OR NOT
                    $mst_agent_filterred = $this->lib_main->filter_array($mst_agent, ['user_name', preg_replace('/\s+/', '', strtolower($row[15]))]);
                    if(count($mst_agent_filterred) > 0){
                        $myarray = array_values($mst_agent_filterred);
                        $array_row['agent_id'] = $myarray[0]['user_id'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'user_level_id'   => 2, //Agent
                            'user_name'   => preg_replace('/\s+/', '', strtolower($row[15])),
                            'user_full_name'   => ucwords(strtolower($row[15])),
                            'user_password'   => $this->lib_main->hash('password'),
                            'user_photo'   => 'default.jpg',
                            'status'   => 'active',
                            'created_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                            'updated_with'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                        );
                        $this->main_model->insert($inputData, 'mst_user');
                        $insert_id = $this->db->insert_id();
                        $array_row['agent_id'] = $insert_id;
                        // Re-Select Data
                        $mst_agent = $this->m_main->viewWhereOrdering('mst_user', array('deleted' => 0), 'user_id', 'ASC')->result_array();
                    }

                    //CHECK OWNER ARE EXIST OR NOT
                    $mst_owner_filterred = $this->lib_main->filter_array($mst_owner, ['owner_name', ucwords(strtolower($row[17]))]);
                    if(count($mst_owner_filterred) > 0){
                        $myarray = array_values($mst_owner_filterred);
                        $array_row['owner_id'] = $myarray[0]['owner_id'];
                    }else{
                        //Input New Record
                        $inputData = array(
                            'owner_name'   => ucwords(strtolower($row[17])),
                            'owner_type'   => strtolower($row[18]),
                            'owner_photo'   => 'default-agent.jpg',
                            'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                            'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                        );
                        $this->main_model->insert($inputData, 'mst_owner');
                        $insert_id = $this->db->insert_id();
                        $array_row['owner_id'] = $insert_id;
                        // Re-Select Data
                        $mst_owner = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0), 'owner_id', 'ASC')->result_array();
                    }

                    //Add Data Row
                    $array_row['batch_number'] = $row[0];
                    $array_row['property_title'] = ucwords(strtolower($row[2]));
                    $array_row['property_description'] = ucfirst($row[3]);
                    $array_row['sale_type'] = ucwords(strtolower($row[1]));
                    $array_row['address'] = ucwords(strtolower($row[5]));
                    $array_row['unit_number'] = strtoupper($row[6]);
                    $array_row['land_area'] = $row[9];
                    $array_row['building_area'] = $row[10];
                    $array_row['bedroom'] = $row[12];
                    $array_row['bathroom'] = $row[11];
                    $array_row['price'] = $row[14];
                    $array_row['fee'] = $row[16];
                    $array_row['registerred'] = strtoupper($row[19]);
                    $array_row['created_by'] = $this->session->userdata(SHORT_APP_NAME.'_'.'userid');
                    $array_row['updated_by'] = $this->session->userdata(SHORT_APP_NAME.'_'.'userid');

                    //PUSH ARRAY DATA ROW TO POPULATE
                    array_push($populate_data, $array_row);
                }
                //INSERT BATCH TO PROPERTY TABLE
                $this->db->insert_batch('property', $populate_data); 
                
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil Import Data',
                );
                $this->output
                    ->set_status_header(200, 'Success')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }

            
        // } catch (\Throwable $th) {
        //     echo json_encode($th);
        // }
        // echo json_encode($allDataInSheet);exit;
        // $fileName = $_FILES['file']['property_list'];

        // $config['upload_path'] = './public/assets/uploads/';
        // $config['file_name'] = $fileName;  // File Name
        // $config['allowed_types'] = 'xls|xlsx|csv'; //Type of file
        // $config['max_size'] = 10000; //Max Size

        // $this->load->library('upload');
        // $this->upload->initialize($config);

        // if (!$this->upload->do_upload('file')) {
        //     echo $this->upload->display_errors();
        //     exit();
        // }

        // $inputFileName = './public/assets/uploads/' . $fileName;

        // try {
        //     $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        //     $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        //     $objPHPExcel = $objReader->load($inputFileName);
        // } catch (Exception $e) {
        //     die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        // }

        // $sheet = $objPHPExcel->getSheet(0);
        // $highestRow = $sheet->getHighestRow();
        // $highestColumn = $sheet->getHighestColumn();

        // for ($row = 2; $row <= $highestRow; $row++) {//  Read a row of data into an array                 
        //     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        //     echo json_encode($rowData);
        //     // Sesuaikan key array dengan nama kolom di database                                                         
        //     // $data = array(
        //     //     "noinduk" => $rowData[0][0],
        //     //     "nama" => $rowData[0][1]
        //     // );

        //     // $insert = $this->db->insert("tb_siswa", $data);
        // }

        // $dataArray = array(
        //     'status'    => 'Success',
        //     'message'   => '',
        // );
        // $this->output
        //     ->set_status_header(200, 'Success')
        //     ->set_content_type('application/json')
        //     ->set_output(json_encode($dataArray));
    }
}
