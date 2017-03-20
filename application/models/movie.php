<?php
class Movie extends MY_Model {

	protected $_table_name = "movies";
	protected $_primary_key = "id";
	protected $_primary_filter = "intval";
	protected $_order_by = "id";
	public $_rules = array();
	protected $_timestamps = true;

	public function __construct(){
		parent::__construct();

	}

}

?>
