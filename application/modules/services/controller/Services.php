<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 28/07/2018
 * Time: 18:18
 */

class Servicesextends extends MY_Controller {

	function __construct(){
		parent::__construct();
		/*$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->model('User');
		$this->load->model('Group');*/

		$this->data['parent_menu'] = 'user';
	}

	public function service(){

		$this->load_theme('service');
	}

}
