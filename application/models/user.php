<?php
class User extends MY_Model{
	protected $_table_name = 'users';
	protected $_order_by = 'username';
	public $rules = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|callback_check'
		)
	);
	
	public $rules2 = array(
		'username' => array(
			'field' => 'name',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|callback_check_add_user'
		),
	);
	
	public $rules3 = array(
		'username' => array(
			'field' => 'name',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|callback_check_edit_user'
		),
	);

	function login($username, $password){
		$user = $this->get_by(array(
			'username' => $username,
			'password' => MD5($password),
		),TRUE);
		if(count($user)){
			$sess_array = array(
				'id' => $user->id,
				'username' => $user->username,
				'admin' => $user->is_admin
			);
			$this->session->set_userdata('logged_in', $sess_array);
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
?>
