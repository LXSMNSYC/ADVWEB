<?php
class Page extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cinema');
		$this->load->model('genre');
		$this->load->model('layout');
		$this->load->model('movie');
		$this->load->model('reserve');
		$this->load->model('layout_seats');
		$this->load->model('schedule');
	}
	public function index(){
		$this->data['meta_title'] = "Cinema - Home";
		$this->data['active'] = 1;
		$result = $this->genre->get();
		$this->data['genre'] = array();
		foreach($result as $row){
			$id = $row->id;
			$this->data['genre'][$id] = array(
				'id'	=> $id,
				'genre' => $row->genre,
				'color' => $row->color,
				'movies' => $this->movie->get_by('genre='.$id, FALSE)
			);

		}
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('home', $this->data);
	}

	public function cinemas(){
		$this->data['meta_title'] = "Cinema - Cinemas";
		$this->data['active'] = 2;
		
		$this->data['cinemas'] = $this->cinema->get();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('cinemas', $this->data);
	}

	public function login(){
		$this->data['meta_title'] = "Cinema - Login";
		$this->data['active'] = 3;
		$this->load->helper(array('form'));
		$this->load->view('login', $this->data);
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('', 'refresh');
	}

	public function description($id){
		if(!isset($id)){
			redirect('', 'refresh');
		}
		$this->data['meta_title'] = "Cinema - Movie";
		$this->data['active'] = 1;
		$this->data['id'] = $id;

		$result = $this->movie->get_by('id='.$id, TRUE);

		if(count($result)){
			$this->data['name'] = $result->name;
			$this->data['description'] = $result->description;
			$this->data['image'] = $result->image;
			$this->data['rating'] = $result->rating;

			$this->data['schedule'] = $this->schedule->get_by('movie='.$id, FALSE);
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$this->data['username'] = $session_data['username'];
				$this->data['uid'] = $session_data['id'];
			}

			$this->load->view('description', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function reserve($id, $cid){
		if(!isset($id)){
			redirect('', 'refresh');
		}
		$this->data['meta_title'] = "Cinema - Movie";
		$this->data['active'] = 1;
		$this->data['id'] = $id;

		$result = $this->movie->get_by('id='.$id, TRUE);

		if(count($result)){
			$this->data['name'] = $result->name;
			$this->data['description'] = $result->description;
			$this->data['image'] = $result->image;
			$this->data['rating'] = $result->rating;

			
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$this->data['username'] = $session_data['username'];
				$this->data['uid'] = $session_data['id'];
			}

			$this->load->view('reserve', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function reserve_table(){
		$this->data['meta_title'] = "Cinema - Reserves";
		$this->data['active'] = 0;
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('reserve_table', $this->data);

	}
	public function add_movie(){
		$this->data['meta_title'] = "Cinema - Add Movie";
		$this->data['active'] = 0;
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('add_movie', $this->data);

	}

	public function add_cinema(){
		$this->data['meta_title'] = "Cinema - Add Cinema";
		$this->data['active'] = 0;
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('add_cinema', $this->data);

	}

	public function new_cinema(){
		$this->data['meta_title'] = "Cinema - New Cinema";
		$this->data['active'] = 0;
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		$this->load->view('new_cinema', $this->data);

	}
}
?>
