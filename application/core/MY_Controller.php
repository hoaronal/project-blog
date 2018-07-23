<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 23/07/2018
 * Time: 22:54
 */
class MY_Controller extends CI_Controller
{
	public $website = "hahaha";
	protected $data = array();
	protected $langs = array();
	protected $default_lang;
	protected $current_lang;

	function __construct()
	{
		parent::__construct();
		// Get the default page description and title from the database
		$this->data['before_head'] = '';
		$this->data['before_body'] = '';
	}
}
class Admin_Controller extends MY_Controller
{

}

class Public_Controller extends MY_Controller
{

}
