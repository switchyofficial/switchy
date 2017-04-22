<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index() {
		$data = array(
			'logo' => base_url('assets/images/switchy-logo.png')
		);
        return $this->load->view('pages/SwitchyHome', $data);
	}

}
