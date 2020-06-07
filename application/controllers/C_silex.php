<?php
require 'cpu_usage.php';

class C_silex extends CI_Controller {
    var $API ="";

    function __construct() {
        parent::__construct();
        // $this->API="http://localhost:8000";
        $this->API="http://192.168.1.10/GitHub/silex/silex-2.0.2/web/index.php";
    }

    public function select() {
        $btnselect = $this->input->post("btnselect");
        if (isset($btnselect)) {
            $this->benchmark->mark('start_select');

            $select=$this->input->post('selectdata');
            $response = json_decode($this->curl->simple_get($this->API.'/selectsilex/'.$select),1);
            $this->benchmark->mark('end_select');

            $data = array(
                'bridgelog' => $response,
               'action' => "C_silex/select",
               'ws' => "SILEX",
               'link' => "C_menu/silex",
               'time' => $this->benchmark->elapsed_time('start_select','end_select'),
               
            );

            $this->load->view('CRUD/V_select',$data);
        } else {
            $data['action'] = "C_silex/select";
            $data['ws'] = "SILEX";
            $data['link'] = "C_menu/silex";
            $this->load->view('CRUD/V_select',$data);
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

            $update = json_decode($this->curl->simple_put($this->API.'/updatesilex', $data, array(CURLOPT_BUFFERSIZE => 10)),1);

            $this->benchmark->mark('end_update');
            if ($update) {
                $data = array(
                   'update' => $update,
                   'action' => "C_silex/update",
                   'ws' => "SILEX",
                   'link' => "C_menu/silex",
                   'time' => $this->benchmark->elapsed_time('start_update','end_update'),
                   
                );
                $this->load->view("CRUD/V_update",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "C_silex/update";
            $data['ws'] = "SILEX";
            $data['link'] = "C_menu/silex";
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

            $insert = json_decode($this->curl->simple_post($this->API.'/insertsilex', $data, array(CURLOPT_BUFFERSIZE => 10)),1);

            $this->benchmark->mark('end_insert');

            if ($insert) {
                $data = array(
                   'insert' => $insert,
                   'action' => "C_silex/insert",
                   'ws' => "SILEX",
                   'link' => "C_menu/silex",
                   'time' => $this->benchmark->elapsed_time('start_insert','end_insert'),
                   
                );

                $this->load->view("CRUD/V_insert",$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "C_silex/insert";
            $data['ws'] = "SILEX";
            $data['link'] = "C_menu/silex";
            $this->load->view("CRUD/V_insert",$data);
        }
    }

    public function delete() {
        $btndelete = $this->input->post("btndelete");
        if (isset($btndelete)) {
            $this->benchmark->mark('start_delete');

            $jumlahdelete=$this->input->post('jumlahdelete');

            $delete = json_decode($this->curl->simple_delete($this->API.'/deletesilex/'.$jumlahdelete),1);

            $this->benchmark->mark('end_delete');
            if ($delete) {
                $data = array(
                   'delete' => $delete,
                   'action' => "C_silex/delete",
                   'ws' => "SILEX",
                   'link' => "C_menu/silex",
                   'time' => $this->benchmark->elapsed_time('start_delete','end_delete'),
                   
                );

                $this->load->view('CRUD/V_delete',$data);
            } else {
                echo "Failed";
            }
        } else {
            $data['action'] = "C_silex/delete";
            $data['ws'] = "SILEX";
            $data['link'] = "C_menu/silex";
            $this->load->view("CRUD/V_delete",$data);
        }
    }

    public function search() {
        $btncari = $this->input->post("btncari");
        if (isset($btncari)) {
            $this->benchmark->mark('start_search');

            $cari=$this->input->post('caridata');
            $search = json_decode($this->curl->simple_get($this->API.'/searchsilex/'.$cari),1);

            $this->benchmark->mark('end_search');
            $data = array(
               'bridgelog' => $search,
               'action' => "C_silex/search",
               'ws' => "SILEX",
               'link' => "C_menu/silex",
               'time' => $this->benchmark->elapsed_time('start_search','end_search'),
               
            );

            $this->load->view('CRUD/V_search',$data);
        } else {
            $data['action'] = "C_silex/search";
            $data['ws'] = "SILEX";
            $data['link'] = "C_menu/silex";
            $this->load->view("CRUD/V_search",$data);
        }
    }
}

?>