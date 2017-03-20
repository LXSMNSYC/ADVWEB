<?php
class Layout_seats  extends MY_Model {

	protected $_table_name = "layout_seats";
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
