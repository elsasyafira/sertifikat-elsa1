<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_events');
	}
	
	public function index()
	{
		
		$queryAllevent = $this->Model_events->getDataevents();
		$data['queryAllevent'] = $queryAllevent;
		$this->load->view('vw_event', $data);
	}

	public function tambah_event()
	{
		$this->load->view('vw_tambah_event');
		$data['event'] = $this->db->get_where('events', ['event_id' => $this->session->userdata('event_id')])->row_array();
	}
	
	public function tambah_aksi()
	{
        $this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'event_name' => $this->input->post('event_name'),
				'event_date' => $this->input->post('event_date'),
			    'location' => $this->input->post('location'),
			    'organizer' => $this->input->post('organizer'),
			);

			$this->Model_events->insert_data($data, 'events');
			$this->session->set_flashdata('pesanevent', '<div class="alert alert-succes alert-dismissble fade show" role="alert")
            <strong>Data Berhasil Di Tambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss"alert" aria-label="close"></button>
        </div>');

		   redirect('event');
		}
	}

		public function _rules()
		{
			$this->form_validation->set_rules('event_name', 'event Name', 'required', array(
				'required' => '%s harus diisi !!'
			));
			$this->form_validation->set_rules('event_date', 'event Date', 'required', array(
				'required' => '%s harus diisi !!'
			));
			$this->form_validation->set_rules('location', 'location', 'required', array(
				'required' => '%s harus diisi !!'
			));
			$this->form_validation->set_rules('organizer', 'organizer', 'required', array(
				'required' => '%s harus diisi !!'
			));
	}
	public function fungsi_tambah_event()
	{
        $this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'event_name' => $this->input->post('event_name'),
				'event_date' => $this->input->post('event_date'),
			    'location' => $this->input->post('location'),
			    'organizer' => $this->input->post('organizer'),
			);

			$this->Model_events->insert_data($data, 'events');
			$this->session->set_flashdata('pesanevent', '<div class="alert alert-succes alert-dismissble fade show" role="alert")
            <strong>Data Berhasil Di Tambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss"alert" aria-label="close"></button>
        </div>');

		   redirect('Event');
		}

	}

	public function fungsi_edit_event()
	{
		  $data['event'] = $this->db->get_where('event', ['event_id' => $this->session->userdata('event_id')])->row_array();

		  $event_id = $this->input->post('event_id');
		  $event_name = $this->input->post('event_name');
		  $event_date = $this->input->post('event_date');
		  $location = $this->input->post('location');
		  $organizer= $this->input->post('organizer');

		  $ArrUpdate = array(
			 'event_id' => $event_id,
			 'event_name' => $event_name,
			 'location' => $location,
			 'organizer' => $organizer

		  );

		  $this->model_event->updateDataevent($event_id, $ArrUpdate);
		  $this->session->set_flashdata('pesan', '<div class="alert alert-succes" role="alert">Data Berhasil Diubah!</div>');
		  redirect('event');
	}

	public function hapus_event($id)
	{
		$data['event'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->Model_event->HapusDataEvent($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-succes" role="alert">Data Berhasil Dihapus!</div>');
		  redirect('event');
	}
}

