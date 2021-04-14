<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//musíme určiť že Auto je trieda, ktorá je rozšírená o CI_Controller
class Auto extends CI_Controller {

	//v konštruktore zabezpečíme odkázanie sa na konkrétne triedy, ktoré budeme potrebovať
	function __construct()
	{
		parent::__construct();
		//pomocník zabezpečujúci prepínanie pri vytváraní odkazov
		$this->load->helper('form');
		//knižnica ktorá zabezpečuje overenie, ktoré využijeme neskôr v kóde
		$this->load->library('form_validation');
		//načítanie mogodb knižnice pre ulahčenú prácu s dátami
		$this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');
	}

	public function index()
	{	//vytvorí sa pole, do ktorého sa načítajú údaje z kolekcie "vozidla"
		$data['auto'] = $this->mongo_db->get('vozidla');
		//zavolá sa zobrazenie headder
		$this->load->view('common/header');
		//zavolá sa zobrazenie zamestnanci/index do ktorého sa odošlú data
		$this->load->view('auto/index', $data);
		//zavolá sa zobrazenie footer
		$this->load->view('common/footer');

	}

	public function add()
	{	//zadefinovanie pola
		$data = array();
		//premenná načítavajúca údaje z kolekcie "vozidla"
		$postData = $this->mongo_db->get('vozidla');
		//ak bolo stlačené tlačidlo
		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('Model', 'Model', 'trim|required');
			$this->form_validation->set_rules('SPZ', 'SPZ', 'trim|required');
			$this->form_validation->set_rules('Pocet_km', 'Pocet_km', 'trim|required');

			//príprava pre vloženie
			$postData = array(
				'Model' => $this->input->post('model'),
				'SPZ' => $this->input->post('spz'),
				'Pocet_km' => $this->input->post('pocetkm'),
			);

			//dáta sa vložia do kolekcie "vozidla"
			$this->mongo_db->insert('vozidla', array('id' => ' ',
													 'Model' => $postData['Model'],
				                                     'SPZ' => $postData['SPZ'],
				 									 'Pocet_km' => $postData['Pocet_km']));
			//vráti sa naspäť do tabuľky
			redirect('/auto');
		}
		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('auto/add', $data);
		$this->load->view('common/footer');
	}


	public function edit($id)
	{	//zadefinovanie pola
		$data = array();
		//premenná ktorá načíta údaje na základe získaného ID.
		$postData = $this->mongo_db->where(array('id' => $id))->get('vozidla');

		//ak bolo stlačené tlačidlo
		if ($this->input->post('postSubmit')) {
			//Zadefinovanie pravidiel validácie
			$this->form_validation->set_rules('Model', 'Model', 'trim|required');
			$this->form_validation->set_rules('SPZ', 'SPZ', 'trim|required');
			$this->form_validation->set_rules('Pocet_km', 'Pocet_km', 'trim|required');

			//príprava pre vloženie
			$postData = array(
				'Model' => $this->input->post('model'),
				'SPZ' => $this->input->post('spz'),
				'Pocet_km' => $this->input->post('pocetkm'),
			);
			    //dáta sa vložia na základe daných parametrov
				$this->mongo_db->where('id', $id );
				$this->mongo_db->set('Model', $postData['Model']);
				$this->mongo_db->set('SPZ', $postData['SPZ']);
				$this->mongo_db->set('Pocet_km', $postData['Pocet_km']);
				$this->mongo_db->update('vozidla');

				//vráti sa naspäť do tabuľky
				redirect('/auto');
		}
		$data['post'] = $postData;
		$this->load->view('common/header');
		$this->load->view('auto/edit', $data);
		$this->load->view('common/footer');
	}


	// Metóda zobrazenia záznamu
	public function view($id)
	{	//zadefinovanie pola
		$data = array();
	if(!empty($id)) {
		//premenná ktorá načíta údaje na základe získaného ID.
		$data['auto'] = $this->mongo_db->where(array('id' => $id))->get('vozidla');
		//zavolá sa zobrazenie
		$this->load->view('common/header');
		$this->load->view('auto/view', $data);
		$this->load->view('common/footer');
	}else{
		//vráti sa naspäť do tabuľky
		redirect('/auto');
	}
	}

	public function delete($id){

		//zavolá funkciu. Prvý paramater označuje kolekciu a do druheho vloží získane ID
		$this->mongo_db->delete('vozidla', array('id' => $id));
		//vráti sa naspäť do tabuľky
		redirect('/auto');

	}
}
