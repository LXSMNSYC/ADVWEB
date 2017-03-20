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

	function login($username, $password){
		$user = $this->get_by(array(
			'username' => $username,
			'password' => MD5($password),
		),TRUE);
		if(count($user)){
			$sess_array = array(
				'id' => $user->id,
				'username' => $user->username
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
