<?php
class Reserve  extends MY_Model {

	protected $_table_name = "reserves";
	protected $_primary_key = "id";
	protected $_primary_filter = "intval";
	protected $_order_by = "id";
	public $_rules = array();
	protected $_timestamps = true;
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'trim|required'
		),
		'address' => array(
			'field' => 'address',
			'label' => 'Address',
			'rules' => 'trim|required'
		),
		'photo' => array(
			'field' => 'photo',
			'label' => 'Your Photo',
			'rules' => 'trim|required'
		),
		'schedule' => array(
			'field' => 'schedule',
			'label' => 'Schedule',
			'rules' => 'trim|required'
		),
		'seats' => array(
			'field' => 'seats',
			'label' => 'Seats',
			'rules' => 'trim|required|callback_check_reserve'
		),
		);
		
	public function __construct(){
		parent::__construct();

	}

}

?>
