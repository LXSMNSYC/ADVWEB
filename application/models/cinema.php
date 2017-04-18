<?php
class Cinema  extends MY_Model {

	protected $_table_name = "cinemas";
	protected $_primary_key = "id";
	protected $_primary_filter = "intval";
	protected $_order_by = "id";
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Cinema Name',
			'rules' => 'trim|required'
		),
		'location' => array(
			'field' => 'location',
			'label' => 'Cinema Location',
			'rules' => 'trim|required'
		),
		'layout' => array(
			'field' => 'layout',
			'label' => 'Cinema Layout',
			'rules' => 'trim|required|callback_check_new_cinema'
		)
	);
	protected $_timestamps = true;

	public function __construct(){
		parent::__construct();

	}

}

?>
