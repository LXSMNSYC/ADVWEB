<?php
class Movie extends MY_Model {

	protected $_table_name = "movies";
	protected $_primary_key = "id";
	protected $_primary_filter = "intval";
	protected $_order_by = "id";
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Cinema Name',
			'rules' => 'trim|required'
		),
		'desc' => array(
			'field' => 'desc',
			'label' => 'Movie Description',
			'rules' => 'trim|required'
		),
		'photo' => array(
			'field' => 'photo',
			'label' => 'Movie Poster',
			'rules' => 'trim|required'
		),
		'rating' => array(
			'field' => 'rating',
			'label' => 'Movie Rating',
			'rules' => 'trim|required'
		),
		'genre' => array(
			'field' => 'genre',
			'label' => 'Movie Genre',
			'rules' => 'trim|required|callback_check_add_movie'
		)
	);
	protected $_timestamps = true;

	public function __construct(){
		parent::__construct();

	}

}

?>
