<?php
class C_slim extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost:8080";
    }

    // Menampilkan data Slim
    public function index() {

        $data = array(
           'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog/'),1)
        );

        $this->load->view('V_slim',$data);
    }

    public function selectdata() {
      $data = array(
        'authsession' => json_decode($this->curl->simple_get($this->API.'/authsession'),1),
        'authtenant' => json_decode($this->curl->simple_get($this->API.'/authtenant'),1),
        'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog'),1),
        'bridgesession' => json_decode($this->curl->simple_get($this->API.'/bridgesession'),1)
      );

      echo $authsession;
    }
}

?>