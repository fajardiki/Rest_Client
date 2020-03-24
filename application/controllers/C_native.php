<?php
class C_native extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://localhost/GitHub/ws_native";
    }

    // Menampilkan data NATIVE

    public function select() {
        $btnselect = $this->input->post("btnselect");
        if (isset($btnselect)) {
            $select=$this->input->post('selectdata');
            $data = array(
               'bridgelog' => json_decode($this->curl->simple_get($this->API.'/bridgelog.php?limit='.$select),1),
               'action' => "../C_native/select"
            );

            $this->load->view('V_native',$data);
        } else {
            $data['action'] = "../C_native/select";
            $this->load->view("V_native",$data);
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

            $insert =  $this->curl->simple_post($this->API.'/update.php', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                echo $insert;
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_native/update";
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

            $insert =  $this->curl->simple_post($this->API.'/insert.php', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                echo $insert;
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_native/insert";
            $this->load->view("CRUD/V_insert",$data);
        }
    }

    public function delete() {
        $btndelete = $this->input->post("btndelete");
        if (isset($btndelete)) {
            $jumlahdelete=$this->input->post('jumlahdelete');

            $delete = $this->curl->simple_get($this->API.'/delete.php', array('jmldel'=>$jumlahdelete), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                echo $delete;
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_native/delete";
            $this->load->view("CRUD/V_delete",$data);
        }
    }

    public function search() {
        $btncari = $this->input->post("btncari");
        if (isset($btncari)) {
            $cari=$this->input->post('caridata');
            $data = array(
               'bridgelog' => json_decode($this->curl->simple_get($this->API.'/search.php?msisdn='.$cari),1),
               'action' => "../C_native/search"
            );

            $this->load->view('CRUD/V_search',$data);
        } else {
            $data['action'] = "../C_native/search";
            $this->load->view("CRUD/V_search",$data);
        }
    }

}

?>