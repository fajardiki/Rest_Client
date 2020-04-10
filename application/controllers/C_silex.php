<?php
class C_silex extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost/GitHub/ws_silex/web/index.php";
    }

    // Menampilkan data LUMEN
    // public function index() {
        
    // }

    // public function selectdata() {
    //   $data = array(
    //     'authsession' => json_decode($this->curl->simple_get($this->API.'/authsession'),1),
    //     'authtenant' => json_decode($this->curl->simple_get($this->API.'/authtenant'),1),
    //     'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog'),1),
    //     'bridgesession' => json_decode($this->curl->simple_get($this->API.'/bridgesession'),1)
    //   );

    //   echo $authsession;
    // }

    public function select() {
        $btnselect = $this->input->post("btnselect");
        if (isset($btnselect)) {
            $select=$this->input->post('selectdata');
            $data = array(
               'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog/'.$select),1),
               'action' => "../C_silex/select",
               'ws' => "SILEX",
               'link' => "../C_menu/silex"
            );

            $this->load->view('V_silex',$data);
        } else {
            $data['action'] = "../C_silex/select";
            $data['ws'] = "SILEX";
            $data['link'] = "../C_menu/silex";
            $this->load->view("V_silex",$data);
        }
    }

    public function update() {
        $btnupdate = $this->input->post("btninsert");
        if (isset($btnupdate)) {
            $data['msisdn']=$this->input->post('msisdn');
            $data['called']=$this->input->post('called');
            $data['lat']=$this->input->post('lat');
            $data['lng']=$this->input->post('lng');
            $data['area']=$this->input->post('area');
            $data['ts']=$this->input->post('ts');
            $data['tenant']=$this->input->post('tenant');
            $data['jumlahupdate']=$this->input->post('jumlahupdate');

            $update = json_decode($this->curl->simple_put($this->API.'/updatesilex', $data, array(CURLOPT_BUFFERSIZE => 10)),1);
            if ($update) {
                $data['action'] = "../C_silex/update";
                $data['update'] = $update;
                $data['ws'] = "SILEX";
                $data['link'] = "../C_menu/silex";
                $this->load->view("CRUD/V_update",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_silex/update";
            $data['ws'] = "SILEX";
            $data['link'] = "../C_menu/silex";
            $this->load->view("CRUD/V_update",$data);
        }
    }

    public function insert() {
        $btninsert = $this->input->post("btninsert");
        if (isset($btninsert)) {
            $data['msisdn']=$this->input->post('msisdn');
            $data['called']=$this->input->post('called');
            $data['lat']=$this->input->post('lat');
            $data['lng']=$this->input->post('lng');
            $data['area']=$this->input->post('area');
            $data['ts']=$this->input->post('ts');
            $data['tenant']=$this->input->post('tenant');
            $data['jumlahinsert']=$this->input->post('jumlahinsert');

            $insert = json_decode($this->curl->simple_post($this->API.'/insertsilex', $data, array(CURLOPT_BUFFERSIZE => 10)),1);
            if ($insert) {
                $data['action'] = "../C_silex/insert";
                $data['insert'] = $insert;
                $data['ws'] = "SILEX";
                $data['link'] = "../C_menu/silex";
                $this->load->view("CRUD/V_insert",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_silex/insert";
            $data['ws'] = "SILEX";
            $data['link'] = "../C_menu/silex";
            $this->load->view("CRUD/V_insert",$data);
        }
    }

    public function delete() {
        $btndelete = $this->input->post("btndelete");
        if (isset($btndelete)) {
            $jumlahdelete=$this->input->post('jumlahdelete');

            $delete = json_decode($this->curl->simple_delete($this->API.'/deletesilex/'.$jumlahdelete),1);
            if ($delete) {
                $data['action'] = "../C_silex/delete";
                $data['ws'] = "SILEX";
                $data['delete'] = $delete;
                $data['link'] = "../C_menu/silex";
                $this->load->view('CRUD/V_delete',$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_silex/delete";
            $data['ws'] = "SILEX";
            $data['link'] = "../C_menu/silex";
            $this->load->view("CRUD/V_delete",$data);
        }
    }

    public function search() {
        $btncari = $this->input->post("btncari");
        if (isset($btncari)) {
            $cari=$this->input->post('caridata');
            $data = array(
               'bridgelog' => json_decode($this->curl->simple_get($this->API.'/searchsilex/'.$cari),1),
               'action' => "../C_silex/search",
               'ws' => "SILEX",
               'link' => "../C_menu/silex"
            );

            $this->load->view('CRUD/V_search',$data);
        } else {
            $data['action'] = "../C_silex/search";
            $data['ws'] = "SILEX";
            $data['link'] = "../C_menu/silex";
            $this->load->view("CRUD/V_search",$data);
        }
    }
}

?>