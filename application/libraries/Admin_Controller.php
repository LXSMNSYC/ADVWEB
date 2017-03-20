<?php
	class Admin_Controller extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user','',TRUE);
			$this->load->helper(array('form'));
			$this->load->library(array('form_validation'));
		}
	}

?>