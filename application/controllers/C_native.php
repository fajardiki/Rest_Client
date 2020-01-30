<?php
class C_native extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost/GitHub/ws_native";
    }

    // Menampilkan data NATIVE
    public function index() {

        $data = array(
           'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog.php'),1)
        );

        $this->load->view('V_native',$data);
    }

    public function selectdata() {
        // $data = array(
        //    'authsession' => ,
        //    'authtenant' => json_decode($this->curl->simple_get($this->API.'/authtenant.php'),1),
        //    'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog.php'),1),
        //    'bridgesession' => json_decode($this->curl->simple_get($this->API.'/bridgesession.php'),1),
        //    'gpscontact' => json_decode($this->curl->simple_get($this->API.'/gpscontact.php'),1)
        // );

        // Auth Session
        $dataas = json_decode($this->curl->simple_get($this->API.'/authsession.php'),1);
        $auth_session = $dataas['Auth_Session'];

        // Auth Tenant
        $dataat = json_decode($this->curl->simple_get($this->API.'/authtenant.php'),1);
        $auth_tenant = $dataat['Auth_Tenant'];

        // Bridge Log
        $databl = json_decode($this->curl->simple_get($this->API.'/bridgelog.php'),1);
        $bridge_log = $databl['Bridge_Log'];

        // echo "<table border='1' >
        //         <tr>
        //             <th align=center>ID</th>
        //             <th align=center>IP ADDRESS</th>
        //             <th align=center>TIMESTAMP</th>
        //             <th align=center>DATA</th></tr>";

        //     foreach ($auth_session->result_array() as $as) {
        //         var_dump($as['id']);
        //     }

        // echo json_encode($auth_session);
        // echo json_encode($auth_tenant);
        echo json_encode($bridge_log);
    }


}

?>