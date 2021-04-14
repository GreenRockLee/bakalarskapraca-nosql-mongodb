<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zamestnanci extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');


	}

	// This is a single-line comment
	public function index()
	{
		$data['zamestnanci'] = $this->mongo_db->get('zamestnanci');
		$this->load->view('common/header');
		$this->load->view('zamestnanci/index', $data);
		$this->load->view('common/footer');

	}

	public function add()
	{
		$data = array();
		$postData = $this->mongo_db->get('zamestnanci');


		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('Meno', 'Meno', 'trim|required');
			$this->form_validation->set_rules('Pozícia', 'Pozícia', 'trim|required');
			$this->form_validation->set_rules('Plat', 'Plat', 'trim|required');


			//príprava pre vloženie
			$postData = array(
				'Meno' => $this->input->post('Meno'),
				'Pozícia' => $this->input->post('Pozícia'),
				'Plat' => $this->input->post('Plat'),
			);


			$this->mongo_db->insert('vozidla', array('id' => ' ', 'Meno' => $postData['Meno'],
				'Pozícia' => $postData['Pozícia'],
				'Plat' => $postData['Plat']));
			redirect('/zamestnanci');
		}


		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('zamestnanci/add', $data);
		$this->load->view('common/footer');
	}


	public function edit($id)
	{
		$data = array();
		$postData = $this->mongo_db->where(array('id' => $id))->get('zamestnanci');

		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('Meno', 'Meno', 'trim|required');
			$this->form_validation->set_rules('Pozícia', 'Pozícia', 'trim|required');
			$this->form_validation->set_rules('Plat', 'Plat', 'trim|required');


			//príprava pre vloženie
			$postData = array(
				'Meno' => $this->input->post('Meno'),
				'Pozícia' => $this->input->post('Pozícia'),
				'Plat' => $this->input->post('Plat'),
			);

			$this->mongo_db->where('id', $id);
			$this->mongo_db->set('Meno', $postData['Meno']);
			$this->mongo_db->set('Pozícia', $postData['Pozícia']);
			$this->mongo_db->set('Plat', $postData['Plat']);
			$this->mongo_db->update('zamestnanci');
			redirect('/zamestnanci');
		}
		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('zamestnanci/edit', $data);
		$this->load->view('common/footer');
	}


	// Metóda zobrazenia záznamu
	public function view($id)
	{
		$data = array();
		if (!empty($id)) {
			$data['zamestnanci'] = $this->mongo_db->where(array('id' => $id))->get('zamestnanci');
			$this->load->view('common/header');
			$this->load->view('zamestnanci/view', $data);
			$this->load->view('common/footer');
		} else {
			redirect('/zamestnanci');
		}
	}


	// Metóda mazania záznamu
	public function delete($id)
	{
		$this->mongo_db->where('id', $id);
		$this->mongo_db->delete('zamestnanci');
		// $this->mongo_db->delete('vozidla', array('id' => $id));
		redirect('/zamestnanci');

	}
}
