<?php
class C_lumen extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost/GitHub/ws_lumen/public/index.php";
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
               'action' => "../C_lumen/select",
               'ws' => "LUMEN",
               'link' => "../C_menu/lumen"
            );

            $this->load->view('V_lumen',$data);
        } else {
            $data['action'] = "../C_lumen/select";
            $data['ws'] = "LUMEN";
            $data['link'] = "../C_menu/lumen";
            $this->load->view("V_lumen",$data);
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

            $update = json_decode($this->curl->simple_post($this->API.'/updatelumen', $data, array(CURLOPT_BUFFERSIZE => 10)),1);
            if ($update) {
                $data['action'] = "../C_lumen/update";
                $data['update'] = $update;
                $data['ws'] = "LUMEN";
                $data['link'] = "../C_menu/lumen";
                $this->load->view("CRUD/V_update",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_lumen/update";
            $data['ws'] = "LUMEN";
            $data['link'] = "../C_menu/lumen";
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

            $insert = json_decode($this->curl->simple_post($this->API.'/insertlumen', $data, array(CURLOPT_BUFFERSIZE => 10)),1);
            if ($insert) {
                $data['action'] = "../C_lumen/insert";
                $data['insert'] = $insert;
                $data['ws'] = "LUMEN";
                $data['link'] = "../C_menu/lumen";
                $this->load->view("CRUD/V_insert",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_lumen/insert";
            $data['ws'] = "LUMEN";
            $data['link'] = "../C_menu/lumen";
            $this->load->view("CRUD/V_insert",$data);
        }
    }

    public function delete() {
        $btndelete = $this->input->post("btndelete");
        if (isset($btndelete)) {
            $jumlahdelete=$this->input->post('jumlahdelete');

            $delete = json_decode($this->curl->simple_get($this->API.'/deletelumen/'.$jumlahdelete),1);
            if ($delete) {
                $data['action'] = "../C_lumen/delete";
                $data['delete'] = $delete;
                $data['ws'] = "LUMEN";
                $data['link'] = "../C_menu/lumen";
                $this->load->view('CRUD/V_delete',$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_lumen/delete";
            $data['ws'] = "LUMEN";
            $data['link'] = "../C_menu/lumen";
            $this->load->view("CRUD/V_delete",$data);
        }
    }

    public function search() {
        $btncari = $this->input->post("btncari");
        if (isset($btncari)) {
            $cari=$this->input->post('caridata');
            $data = array(
               'bridgelog' => json_decode($this->curl->simple_get($this->API.'/searchlumen/'.$cari),1),
               'action' => "../C_lumen/search",
               'ws' => "LUMEN",
               'link' => "../C_menu/lumen"
            );

            $this->load->view('CRUD/V_search',$data);
        } else {
            $data['action'] = "../C_lumen/search";
            $data['ws'] = "LUMEN";
            $data['link'] = "../C_menu/lumen";
            $this->load->view("CRUD/V_search",$data);
        }
    }
}

?>