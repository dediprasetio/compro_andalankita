<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    protected $CI;
    protected $template_data = array();

    public function __construct()
    {
        $this->CI = &get_instance();  // Get CI instance

        // Automatically include global_data from the controller
        // if (isset($this->CI->global_data)) {
        //     $this->template_data = array_merge($this->template_data, $this->CI->global_data);
        // }
    }

    public function render_view($template, $view_data = array())
    {
        if (isset($this->CI->global_data)) {
            $this->template_data = array_merge($this->template_data, $this->CI->global_data);
        }else{
            $this->template_data = array_merge($this->template_data, $view_data);
        }
        // Merge global data with view data
        $view_data = array_merge($this->template_data, $view_data);
        // echo json_encode($view_data);exit;

        // Load the main template and pass the view data to it
        return $this->CI->load->view($template, $view_data);
    }

    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

	function load($view = '', $view_data = array(), $return = FALSE)
	{
		$this->CI = &get_instance();
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($view, $this->template_data, $return);
	}
}
