<?php
class Page extends Admin_Controller {
	private function load_session(){
		$logged_in = $this->session->userdata('logged_in');
		if($logged_in){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
		}
		return $logged_in;
	}
	public function __construct(){
		parent::__construct();
		$this->load->model('cinema');
		$this->load->model('genre');
		$this->load->model('movie');
		$this->load->model('reserve');	
		$this->load->model('schedule');
		
		$this->load->helper(array('form'));
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
		$this->load_session();
		$this->load->view('home', $this->data);
	}

	public function cinemas(){
		$this->data['meta_title'] = "Cinema - Cinemas";
		$this->data['active'] = 2;
		
		$this->data['cinemas'] = $this->cinema->get();
		
		$this->load_session();
		$this->load->view('cinemas', $this->data);
	}

	public function login(){
		$this->data['meta_title'] = "Cinema - Login";
		$this->data['active'] = 3;
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
			
			$this->load_session();

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

			
			
			$this->load_session();
			$this->load->view('reserve', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function reserve_table(){
		
		if($this->load_session()){
			$this->data['meta_title'] = "Cinema - Reserves";
			$this->data['active'] = 0;
			$this->load->view('reserve_table', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}
	public function add_movie(){
		if($this->load_session()){
			$this->form_validation->set_rules($this->movie->rules);
		
			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - Add Movie";
				$this->data['active'] = 0;
				$this->data['genre'] = $this->genre->get();
				$this->load->view('add_movie', $this->data);
			}
			else{
				redirect('', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function add_cinema(){
		if($this->load_session()){
			$this->data['meta_title'] = "Cinema - Add Cinema";
			$this->data['active'] = 0;
			$this->load->view('add_cinema', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function new_cinema(){
		if($this->load_session()){
			$this->form_validation->set_rules($this->cinema->rules);
		
			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - New Cinema";
				$this->data['active'] = 0;
				$this->load->view('new_cinema', $this->data);
			}
			else{
				redirect('page/cinemas', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}
	
	function check_new_cinema(){
		$this->cinema->save(array(
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),
			'layout' => $this->input->post('layout'),
		));
		return true;
	}
	
	
	function check_add_movie(){
		$this->movie->save(array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('desc'),
			'image' => $this->input->post('photo'),
			'rating' => $this->input->post('rating'),
			'genre' => $this->input->post('genre'),
		));
		return true;
	}
}
?>
