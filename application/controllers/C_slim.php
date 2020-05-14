<?php
require 'cpu_usage.php';

class C_slim extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://192.168.1.100/GitHub/ws_slim/public/index.php";
    }

    public function select() {
        $btnselect = $this->input->post("btnselect");
        if (isset($btnselect)) {
            $this->benchmark->mark('start_select');

            $select=$this->input->post('selectdata');
            $response = json_decode($this->curl->simple_get($this->API.'/selectslim/'.$select),1);

            $this->benchmark->mark('end_select');
            $data = array(
               'bridgelog' => $response,
               'action' => "../C_slim/select",
               'ws' => "SLIM",
               'link' => "../C_menu/slim",
               'time' => $this->benchmark->elapsed_time('start_select','end_select'),
               'cpu' => get_cpu_usage()."%"
            );

            $this->load->view('V_slim',$data);
        } else {
            $data['action'] = "../C_slim/select";
            $data['ws'] = "SLIM";
            $data['link'] = "../C_menu/slim";
            $this->load->view("V_slim",$data);
        }
    }

    public function update() {
        $btnupdate = $this->input->post("btninsert");
        if (isset($btnupdate)) {
            $this->benchmark->mark('start_update');

            $data['msisdn']=$this->input->post('msisdn');
            $data['called']=$this->input->post('called');
            $data['lat']=$this->input->post('lat');
            $data['lng']=$this->input->post('lng');
            $data['area']=$this->input->post('area');
            $data['ts']=$this->input->post('ts');
            $data['tenant']=$this->input->post('tenant');
            $data['jumlahupdate']=$this->input->post('jumlahupdate');

            $update = json_decode($this->curl->simple_put($this->API.'/updateslim', $data, array(CURLOPT_BUFFERSIZE => 10)),1);

            $this->benchmark->mark('end_update');
            if ($update) {
                $data = array(
                   'update' => $update,
                   'action' => "../C_slim/update",
                   'ws' => "SLIM",
                   'link' => "../C_menu/slim",
                   'time' => $this->benchmark->elapsed_time('start_update','end_update'),
                   'cpu' => get_cpu_usage()."%"
                );

                $this->load->view("CRUD/V_update",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_slim/update";
            $data['ws'] = "SLIM";
            $data['link'] = "../C_menu/slim";
            $this->load->view("CRUD/V_update",$data);
        }
    }

    public function insert() {
        $btninsert = $this->input->post("btninsert");
        if (isset($btninsert)) {
            $this->benchmark->mark('start_insert');

            $data['msisdn']=$this->input->post('msisdn');
            $data['called']=$this->input->post('called');
            $data['lat']=$this->input->post('lat');
            $data['lng']=$this->input->post('lng');
            $data['area']=$this->input->post('area');
            $data['ts']=$this->input->post('ts');
            $data['tenant']=$this->input->post('tenant');
            $data['jumlahinsert']=$this->input->post('jumlahinsert');

            $insert = json_decode($this->curl->simple_post($this->API.'/insertslim', $data, array(CURLOPT_BUFFERSIZE => 10)),1);

            $this->benchmark->mark('end_insert');
            if ($insert) {
                $data = array(
                   'insert' => $insert,
                   'action' => "../C_slim/insert",
                   'ws' => "SLIM",
                   'link' => "../C_menu/slim",
                   'time' => $this->benchmark->elapsed_time('start_insert','end_insert'),
                   'cpu' => get_cpu_usage()."%"
                );

                $this->load->view("CRUD/V_insert",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_slim/insert";
            $data['ws'] = "SLIM";
            $data['link'] = "../C_menu/slim";
            $this->load->view("CRUD/V_insert",$data);
        }
    }

    public function delete() {
        $btndelete = $this->input->post("btndelete");
        if (isset($btndelete)) {
            $this->benchmark->mark('start_delete');

            $jumlahdelete=$this->input->post('jumlahdelete');

            $delete = json_decode($this->curl->simple_delete($this->API.'/deleteslim/'.$jumlahdelete),1);

            $this->benchmark->mark('end_delete');
            if ($delete) {
                $data = array(
                   'delete' => $delete,
                   'action' => "../C_slim/delete",
                   'ws' => "SLIM",
                   'link' => "../C_menu/slim",
                   'time' => $this->benchmark->elapsed_time('start_delete','end_delete'),
                   'cpu' => get_cpu_usage()."%"
                );

                $this->load->view('CRUD/V_delete',$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "../C_slim/delete";
            $data['ws'] = "SLIM";
            $data['link'] = "../C_menu/slim";
            $this->load->view("CRUD/V_delete",$data);
        }
    }

    public function search() {
        $btncari = $this->input->post("btncari");
        if (isset($btncari)) {
            $this->benchmark->mark('start_search');

            $cari=$this->input->post('caridata');
            $search = json_decode($this->curl->simple_get($this->API.'/searchslim/'.$cari),1);

            $this->benchmark->mark('end_search');
            $data = array(
               'bridgelog' => $search,
               'action' => "../C_slim/search",
               'ws' => "SLIM",
               'link' => "../C_menu/slim",
               'time' => $this->benchmark->elapsed_time('start_search','end_search'),
               'cpu' => get_cpu_usage()."%"
            );

            $this->load->view('CRUD/V_search',$data);
        } else {
            $data['action'] = "../C_slim/search";
            $data['ws'] = "SLIM";
            $data['link'] = "../C_menu/slim";
            $this->load->view("CRUD/V_search",$data);
        }
    }
}

?>