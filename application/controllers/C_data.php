<?php

class C_data extends CI_Controller {
    var $API ="";
    function __construct() {
        parent::__construct();
        $this->API="http://localhost:8000";
    }

    // Menampilkan data
    public function index() {
        $data['telkomseldata'] = json_decode($this->curl->simple_get($this->API.'/select'),1);
        $this->load->view('V_dasboard',$data);
    }
}

?>