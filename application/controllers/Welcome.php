<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function getAllProducts(){
		
		$query = $this->db->get('book')->result();
		foreach($query as $row){
			echo $row->id." ".$row->code." ".$row->name." ".$row->price."</br>";
		}
	}

	public function getProductsById(){
		
		$query = $this->db->get_where('book',array('code' => 'P001'),5,4)->result();
		foreach($query as $row){
			echo $row->id." ".$row->code." ".$row->name." ".$row->price."</br>";
		}
	}


	public function selectProductsById(){
		$this->db->select('name,price');
		$query = $this->db->get_where('book',array('code' => 'P001'),5,4)->result();
		foreach($query as $row){
			echo $row->name." ".$row->price."</br>";
		}
	}

	public function selectMaxPrice(){
		$this->db->select_max('price','max_price');
		$query = $this->db->get('book')->result();
		foreach($query as $row){
			echo $row->max_price;
			//echo $row->id." ".$row->code." ".$row->name." ".$row->price."</br>";
		}
	}

	
	public function showBookWithCategory(){
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('book_category', 'book_category.bcat_id = book.cid','right');
		$query = $this->db->get()->result();
		foreach($query as $row){
			echo $row->id." ".$row->code." ".$row->name." ".$row->price." ".$row->cat_name."</br>";
		}
	}

	public function selectBookName(){
		$this->db->select('*');
		$this->db->from('book');
		$this->db->where('name', "Java");
		$query = $this->db->get()->result();
		foreach($query as $row){
			echo $row->id." ".$row->code." ".$row->name." ".$row->price."</br>";
		}
	}

	
	public function searchBookName(){
		$this->db->select('*');
		$this->db->from('book');
		$this->db->like('name', 'wif');
		$query = $this->db->get()->result();
		foreach($query as $row){
			echo $row->id." ".$row->code." ".$row->name." ".$row->price."</br>";
		}
	}
}
