<?php
class Guru extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('guru');
        $this->load->view('templates/footer');
    }
    public function jurnal_guru()
    {
        $data['jurnal']=$this->m_guru->jurnal_guru()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jurnal_guru', $data);
        $this->load->view('templates/footer');
    }
    public function isi_jurnal()
    {
        $tgl_mengajar   = $this->input->post('tgl_mengajar');
        $mapel          = $this->input->post('mapel');
        $kelas          = $this->input->post('kelas');
        $jamke          = $this->input->post('jamke');
        $topik          = $this->input->post('topik');
        $kegiatan       = $this->input->post('kegiatan');
        $keterangan     = $this->input->post('keterangan');
        $absen          = $this->input->post('absen');
        
        $data = array(
            'tgl_mengajar'  => $tgl_mengajar,
            'mapel'         => $mapel,
            'kelas'         => $kelas,
            'jamke'         => $jamke,
            'topik'         => $topik,
            'kegiatan'      => $kegiatan,
            'keterangan'    => $keterangan,
            'absen'         => $absen
        );

        $this->m_guru->isi_jurnal($data,'jurnal_guru');
        redirect('guru/jurnal_guru');
    }
    public function edit_jurnal($id)
    {
        $where=array('id'=>$id);
        $data['jurnal']=$this->m_guru->edit_jurnal($where,'jurnal_guru')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jurnal_guru', $data);
        $this->load->view('templates/footer');
    }
    public function hapus_jurnal($id)
    {
            $where = array('id' => $id);
            $this->m_guru->hapus_jurnal($where,'jurnal_guru');
            redirect('guru/jurnal_guru');
    }
}