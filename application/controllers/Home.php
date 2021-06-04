<?php

class Home extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('topic_model');
        
    }

    public function index(){

        $data['judul'] = 'SIPETA';
        
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function search(){

        $data['judul'] = 'SIPETA';

        $this->input->post('search');
        $data['keyword'] = $this->input->post('keyword');
        $data['categories'] = $this->input->post('categories');

        $data['topic'] = $this->topic_model->searchTopics($data['keyword'], $data['categories']);
        
        $data['num_rows'] = count($data['topic']);
    
        $this->load->view('result/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail_topic($id){
        $data['judul'] = 'SIPETA';

        $data['topic'] = $this->topic_model->topicsById($id);


        $this->load->view('result/detail_topic', $data);
        $this->load->view('templates/footer');
    }

    
}

    


?>