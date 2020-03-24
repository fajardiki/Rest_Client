<?php
class C_menu extends CI_Controller {

    public function index() {

        $this->load->view('V_menu');
    }

    public function native() {
    	$data['title'] = "NATIVE WEB SERVICE";
    	$data['select'] = "../C_native/select";
    	$data['update'] = "../C_native/update";
    	$data['insert'] = "../C_native/insert";
    	$data['delete'] = "../C_native/delete";
    	$data['search'] = "../C_native/search";

    	$this->load->view("V_submenu", $data);
    }

    public function lumen() {
    	$data['title'] = "LUMEN WEB SERVICE";
    	$data['select'] = "../C_lumen/select";
    	$data['update'] = "../C_lumen/update";
    	$data['insert'] = "../C_lumen/insert";
    	$data['delete'] = "../C_lumen/delete";
    	$data['search'] = "../C_lumen/search";

    	$this->load->view("V_submenu", $data);
    }

    public function slim() {
    	$data['title'] = "SLIM WEB SERVICE";
    	$data['select'] = "../C_slim/select";
    	$data['update'] = "../C_slim/update";
    	$data['insert'] = "../C_slim/insert";
    	$data['delete'] = "../C_slim/delete";
    	$data['search'] = "../C_slim/search";

    	$this->load->view("V_submenu", $data);
    }

    public function silex() {
    	$data['title'] = "SILEX WEB SERVICE";
    	$data['select'] = "../C_silex/select";
    	$data['update'] = "../C_silex/update";
    	$data['insert'] = "../C_silex/insert";
    	$data['delete'] = "../C_silex/delete";
    	$data['search'] = "../C_silex/search";

    	$this->load->view("V_submenu", $data);
    }
}

?>