<?php

class anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }
    public function index(){

        $data['anggota']= $this->anggota_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    // ======================
    // SIMPAN
    // ======================
    public function simpan()
    {
    $data = [
        'no_anggota'=> $this->input->post('no_anggota'),
        'nama_anggota' => $this->input->post('nama_anggota'),
        'telp' => $this->input->post('telp'),
        'email' => $this->input->post('email'),
        'status' => $this->input->post('status')
    ];

    $this->anggota_model->insert($data);
    redirect('anggota');
    }
    public function hapus($id)
    {
        $this->anggota_model->delete($id);
        $this->session->set_flashdata('success','Data Berhasil dihapus');
        
        redirect('anggota');
        }
    public function edit($id)
    {
        $data['anggota']= $this->anggota_model->get_by_id($id);
        $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('anggota/edit', $data);
            $this->load->view('templates/footer');
    }
        public function update()
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_anggota','Nama','required');

    if($this->form_validation->run()==FALSE){

        redirect('anggota');

    }else{

        $id = $this->input->post('id');

        $data=[
            'no_anggota'=> $this->input->post('no_anggota'),
            'nama_anggota'=> $this->input->post('nama_anggota'),
            'telp'=> $this->input->post('telp'),
            'email'=> $this->input->post('email'),
            'status'=> $this->input->post('status')
        ];

        $this->anggota_model->update($id,$data);

        $this->session->set_flashdata('success','Data Berhasil di update');
        redirect('anggota');
    }
}
}