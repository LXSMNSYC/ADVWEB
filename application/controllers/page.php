<?php
class Page extends Admin_Controller {
	private function load_session(){
		$logged_in = $this->session->userdata('logged_in');
		if($logged_in){
			$session_data = $this->session->userdata('logged_in');
			$this->data['username'] = $session_data['username'];
			$this->data['uid'] = $session_data['id'];
			$this->data['admin'] = $session_data['admin'];
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
			$this->data['genre'][$id]['max'] = count($this->data['genre'][$id]['movies']);
		}
		$this->load_session();
		$this->load->view('home', $this->data);
	}

	public function movies($genre = NULL){
		$this->data['meta_title'] = "Cinema - Movies";
		$this->data['active'] = 1;
		if($genre == NULL){
			$this->data['movies'] = $this->movie->get();
		}
		else{
			$this->data['movies'] = $this->movie->get_by('genre='.$genre, FALSE);
			$this->data['genre'] = $this->genre->get_by('id='.$genre, TRUE);
		}
		$this->data['max'] = count($this->data['movies']);
		$this->load_session();
		$this->load->view('movies', $this->data);
	}
	public function cinemas($query = NULL){
		$this->data['meta_title'] = "Cinema - Cinemas";
		$this->data['active'] = 2;
		if($query == NULL){
			$this->data['cinemas'] = $this->cinema->get();
		}
		else{
			$this->data['cinemas'] = $this->cinema->get_by("name LIKE '%".$query."%'", FALSE);
		}
		$this->load_session();
		$this->load->view('cinemas', $this->data);
	}

	public function cinema_query_search(){
		redirect('page/cinemas/'.$this->input->post('search'));
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

	public function description($id, $query = NULL){
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
			if($query == NULL){
				$this->data['schedule'] = $this->schedule->get_by('movie='.$id, FALSE);
			}
			else{
				$this->data['schedule'] = $this->schedule->get_by("movie=".$id." AND cinema_name LIKE '%{$query}%'", FALSE);
			}
			$this->load_session();

			$this->load->view('description', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function desc_query_search(){
		redirect('page/description/'.$this->input->post('movie_id').'/'.$this->input->post('search'));
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
			$this->data['movie'] = $result;
			$result = $this->schedule->get_by('id='.$cid, TRUE);
			
			if(count($result)){
				$this->data['schedule'] = $result;
				$tid = $result->cinema;
				$this->data['cinema'] = $this->cinema->get_by('id='.$tid, TRUE);
				
				$this->form_validation->set_rules($this->reserve->rules);

				if(!$this->form_validation->run()){
					$this->load_session();
					$this->load->view('reserve', $this->data);
				}
				else{
					redirect('page/description/'.$id, 'refresh');
				}
			}
			else{
				redirect('', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function reserve_table(){

		if($this->load_session()){
			$this->data['meta_title'] = "Cinema - Reserves";
			$this->data['active'] = 0;
			$this->data['reserve'] = $this->reserve->get();
			$movies = $this->movie->get();
			$this->data['movies'] = array();
			foreach($movies as $row){
				$this->data['movies'][$row->id] = $row->name; 
			}
			$cinemas = $this->cinema->get();
			$this->data['cinemas'] = array();
			foreach($cinemas as $row){
				$this->data['cinemas'][$row->id] = $row->name; 
			}
			$schedule = $this->schedule->get();
			$this->data['schedule'] = array();
			foreach($schedule as $row){
				$this->data['schedule'][$row->id] = $row->time_start.' - '.$row->time_start.' | '.$row->date_start.' - '.$row->date_end; 
			}
			$this->load->view('reserve_table', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}
	
	public function delete_reserve($id){
		$this->reserve->delete($id);
		redirect('page/reserve_table', 'refresh');
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
	
	public function check_add_movie(){
		$this->movie->save(array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('desc'),
			'image' => $this->input->post('photo'),
			'rating' => $this->input->post('rating'),
			'genre' => $this->input->post('genre'),
		));
		return true;
	}

	public function edit_movie($id){
		if($this->load_session()){
			$this->form_validation->set_rules($this->movie->rules2);

			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - Edit Movie";
				$this->data['active'] = 0;
				$this->data['genre'] = $this->genre->get();
				$this->data['movie'] = $this->movie->get_by('id='.$id, TRUE);
				$this->load->view('edit_movie', $this->data);
			}
			else{
				redirect('', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function delete_movie($id){
		if($this->load_session()){
			$this->data['meta_title'] = "Cinema - Delete Movie";
			$this->data['active'] = 0;
			$this->data['id'] = $id;
			$this->load->view('delete_movie', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}

	public function add_cinema($id){
		if($this->load_session()){
			$this->form_validation->set_rules($this->schedule->rules);
			
			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - Add Cinema";
				$this->data['active'] = 0;
				$this->data['cinemas'] = $this->cinema->get();

				$this->data['movie'] = $this->movie->get_by('id='.$id, TRUE);
				$this->load->view('add_cinema', $this->data);
			}
			else{
				redirect('page/description/'.$id, 'refresh');
			}
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
	
	public function users(){
		
		if($this->load_session() && $this->data['admin']){
			$this->data['meta_title'] = "Cinema - Users";
			$this->data['active'] = 0;
			$this->data['users'] = $this->user->get();
			$this->load->view('users', $this->data);
		}
		else{
			redirect('', 'refresh');
		}
	}
	
	public function add_user(){
		if($this->load_session() && $this->data['admin']){
			$this->form_validation->set_rules($this->user->rules2);

			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - Add User";
				$this->data['active'] = 0;
				$this->load->view('add_user', $this->data);
			}
			else{
				redirect('page/users', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}
	
	public function edit_user($id){
		if($this->load_session() && $this->data['admin']){
			$this->form_validation->set_rules($this->user->rules3);

			if(!$this->form_validation->run()){
				$this->data['meta_title'] = "Cinema - Edit User";
				$this->data['active'] = 0;
				$this->data['user'] = $this->user->get_by('id='.$id, TRUE);
				
				$this->load->view('edit_users', $this->data);
			}
			else{
				redirect('page/users', 'refresh');
			}
		}
		else{
			redirect('', 'refresh');
		}
	}
	
	public function check_add_user(){
		$admin_val = $this->input->post('admin');
		if($admin_val == NULL){
			$admin_val = 0;
		}
		$this->user->save(array(
			'username' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => MD5($this->input->post('password')),
			'is_admin' => $admin_val
		));
		return true;
	}
	
	public function check_edit_user(){
		$admin_val = $this->input->post('admin');
		if($admin_val == NULL){
			$admin_val = 0;
		}
		$this->user->save(array(
			'username' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => MD5($this->input->post('password')),
			'is_admin' => $admin_val
		));
		return true;
	}
	
	public function delete_user($id){
		$this->user->delete($id);
		redirect('page/users', 'refresh');
	}
	

	function check_new_cinema(){
		$this->cinema->save(array(
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),
			'layout' => $this->input->post('layout'),
		));
		return true;
	}


	function check_edit_movie(){
		$this->movie->save(array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('desc'),
			'image' => $this->input->post('photo'),
			'rating' => $this->input->post('rating'),
			'genre' => $this->input->post('genre'),
		), $this->input->post('movie_id'));
		return true;
	}	

	function check_del_movie($id){
		$this->movie->delete($id);
		redirect('', 'refresh');
	}
	
	function check_add_cinema(){
		$cin = $this->cinema->get_by('id='.$this->input->post('cinema'), TRUE);
		$this->schedule->save(array(
			'movie' => $this->input->post('movie_id'),
			'cinema' => $this->input->post('cinema'),
			'cinema_name' => $cin->name,
			'cinema_location' => $cin->location,
			'price' => $this->input->post('price'),
			'time_start' => $this->input->post('time_start'),
			'time_end' => $this->input->post('time_end'),
			'date_start' => $this->input->post('date_start'),
			'date_end' => $this->input->post('date_end'),
		));
		return true;
	}
	
	function check_reserve(){
		$this->reserve->save(array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'image' => $this->input->post('photo'),
			'movie' => $this->input->post('movie_id'),
			'cinema' => $this->input->post('cinema_id'),
			'seats' => $this->input->post('seats'),
			'schedule' => $this->input->post('schedule'),
		));
		return true;
	}
}
?>
	