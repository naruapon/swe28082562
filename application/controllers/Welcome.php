<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Book_model');
	}


	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view_form');
		$this->load->view('view_form_bk');
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

	public function insertBook(){
		$data = array (
			'code' => 'P004',
			'name' => 'Python',
			'price' => 500.00,
			'cid' => 1
		);
		$this->db->insert('book',$data);
	}

	public function insertBookObject(){
		$object = new Book_model();
		$this->db->insert('book',$object);
	}
}

