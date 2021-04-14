<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jedlo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');


	}

	public function index()
	{
		$data['jedlo'] = $this->mongo_db->get('jedlo');
		$this->load->view('common/header');
		$this->load->view('jedlo/index', $data);
		$this->load->view('common/footer');

	}

	public function add()
	{
		$data = array();
		$postData = $this->mongo_db->get('jedlo');

		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('popis', 'popis', 'trim|required');
			$this->form_validation->set_rules('Nazov_jedla', 'Nazov_jedla', 'trim|required');
			$this->form_validation->set_rules('Pocet_gramov', 'Pocet_gramov', 'trim|required');
			$this->form_validation->set_rules('Popis', 'Popis', 'trim|required');
			$this->form_validation->set_rules('Cena', 'Cena', 'trim|required');


			//príprava pre vloženie
			$postData = array(
				'popis' => $this->input->post('popis'),
				'Nazov_jedla' => $this->input->post('Nazov_jedla'),
				'Pocet_gramov' => $this->input->post('Pocet_gramov'),
				'Popis' => $this->input->post('Popis'),
				'Cena' => $this->input->post('Cena'),
			);


			$this->mongo_db->insert('jedlo', array('id' => ' ', 'popis' => $postData['popis'],
				'Nazov_jedla' => $postData['Nazov_jedla'],
				'Pocet_gramov' => $postData['Pocet_gramov'],
				'Popis' => $postData['Popis'],
				'Cena' => $postData['Cena'],
				));
			redirect('/jedlo');
		}


		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('jedlo/add', $data);
		$this->load->view('common/footer');
	}


	public function edit($id)
	{
		$data = array();
		$postData = $this->mongo_db->where(array('id' => $id))->get('jedlo');

		//Kontrola či bola zaslaná požiadavka na pridanie záznamu
		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('popis', 'popis', 'trim|required');
			$this->form_validation->set_rules('Nazov_jedla', 'Nazov_jedla', 'trim|required');
			$this->form_validation->set_rules('Pocet_gramov', 'Pocet_gramov', 'trim|required');
			$this->form_validation->set_rules('Popis', 'Popis', 'trim|required');
			$this->form_validation->set_rules('Cena', 'Cena', 'trim|required');

			//príprava pre vloženie
			$postData = array(
				'popis' => $this->input->post('popis'),
				'Nazov_jedla' => $this->input->post('Nazov_jedla'),
				'Pocet_gramov' => $this->input->post('Pocet_gramov'),
				'Popis' => $this->input->post('Popis'),
				'Cena' => $this->input->post('Cena'),
			);


			$this->mongo_db->where('id', $id );
			$this->mongo_db->set('popis', $postData['popis']);
			$this->mongo_db->set('Nazov_jedla', $postData['Nazov_jedla']);
			$this->mongo_db->set('Pocet_gramov', $postData['Pocet_gramov']);
			$this->mongo_db->set('Popis', $postData['Popis']);
			$this->mongo_db->set('Cena', $postData['Cena']);
			$this->mongo_db->update('jedlo');
			redirect('/jedlo');
		}
		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('jedlo/edit', $data);
		$this->load->view('common/footer');
	}


	// Metóda zobrazenia záznamu
	public function view($id)
	{
		$data = array();
		if(!empty($id)) {
			$data['jedlo'] = $this->mongo_db->where(array('id' => $id))->get('jedlo');
			$this->load->view('common/header');
			$this->load->view('jedlo/view', $data);
			$this->load->view('common/footer');
		}else{
			redirect('/jedlo');
		}
	}


	// Metóda mazania záznamu
	public function delete($id){
		$this->mongo_db->where('id', $id );
		$this->mongo_db->delete('jedlo');
		// $this->mongo_db->delete('vozidla', array('id' => $id));
		redirect('/jedlo');

	}
}
