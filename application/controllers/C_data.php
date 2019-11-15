<?php
class C_data extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost/GitHub/ws_native";
    }

    // // Menampilkan data LUMEN
    // public function index() {
    //     $data = array(
    //        'authsession' => json_decode($this->curl->simple_get($this->API.'/authsession'),1),
    //        'authtenant' => json_decode($this->curl->simple_get($this->API.'/authtenant'),1),
    //        'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog'),1),
    //        'bridgesession' => json_decode($this->curl->simple_get($this->API.'/bridgesession'),1)
    //     );

    //     $this->load->view('V_dasboard',$data);
    // }

    // Menampilkan data NATIVE
    public function index() {
        $data = array(
           'authsession' => json_decode($this->curl->simple_get($this->API.'/authsession.php'),1),
           'authtenant' => json_decode($this->curl->simple_get($this->API.'/authtenant.php'),1),
           'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog.php'),1),
           'bridgelog2' => json_decode($this->curl->simple_get($this->API.'/bridgelog2.php'),1),
           'bridgesession' => json_decode($this->curl->simple_get($this->API.'/bridgesession.php'),1),
           'gpscontact' => json_decode($this->curl->simple_get($this->API.'/gpscontact.php'),1)
        );

        $this->load->view('V_dasboard',$data);
    }
}

?>