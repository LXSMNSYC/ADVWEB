<?php
class Schedule  extends MY_Model {

	protected $_table_name = "schedules";
	protected $_primary_key = "id";
	protected $_primary_filter = "intval";
	protected $_order_by = "id";
	public $rules = array(
		'cinema' => array(
			'field' => 'cinema',
			'label' => 'Cinema',
			'rules' => 'trim|required'
		),
		'price' => array(
			'field' => 'price',
			'label' => 'Ticket Price',
			'rules' => 'trim|required'
		),
		'time_start' => array(
			'field' => 'time_start',
			'label' => 'Time Start',
			'rules' => 'trim|required'
		),
		'time_end' => array(
			'field' => 'time_end',
			'label' => 'Time End',
			'rules' => 'trim|required'
		),
		'date_start' => array(
			'field' => 'date_start',
			'label' => 'Date Start',
			'rules' => 'trim|required'
		),
		'date_end' => array(
			'field' => 'date_end',
			'label' => 'Date End',
			'rules' => 'trim|required|callback_check_add_cinema'
		),);
	protected $_timestamps = true;

	public function __construct(){
		parent::__construct();
	}
}
?>
