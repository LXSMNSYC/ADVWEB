
<?php
class Login extends Admin_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->helper(array('form'));
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules($this->user->rules);

		if(!$this->form_validation->run()){
			$this->data['meta_title'] = "Cinema - Login";
			$this->data['active'] = 3;
			$this->load->view('login', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function check($password){
		$username = $this->input->post('username');

		$result = $this->user->login($username, $password);

		if($result){
			
			return TRUE;
		}
		else{
			$this->form_validation->set_message('check', 'Invalid username or password');
			return false;
		}
	}
}
?>
