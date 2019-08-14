<?php
class Siswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_siswa');
    }
    public function index()
    {
        $data['siswa']=$this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa', $data);
		$this->load->view('templates/footer');
    }
    public function tambah_siswa()
    {
        $nama       = $this->input->post('nama');
        $nism       = $this->input->post('nism');
        $kelas      = $this->input->post('kelas');
        $tgl_lahir  = $this->input->post('tgl_lahir');
        $alamat      = $this->input->post('alamat');
        $telp      = $this->input->post('telp');
        $email      = $this->input->post('email');
        $foto       = $_FILES['foto'];
        if($foto!=''){
            $config['upload_path']='./assets/foto';
            $config['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload gagal";
                die();
            }else{
                $foto=$this->upload->data('file_name');
            }
        }
        
        $data = array(
            'nama'  => $nama,
            'nism'  => $nism,
            'kelas'  => $kelas,
            'tgl_lahir'  => $tgl_lahir,
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
            'foto' => $foto,
        );

        $this->m_siswa->tambah_data($data,'siswa');
        redirect('siswa');
    }
    public function hapus_siswa($id)
    {
            $where = array('id' => $id);
            $this->m_siswa->hapus_data($where,'siswa');
            redirect('siswa');
    }
    public function edit_siswa($id)
    {
        $where = array('id' => $id);
        $data['siswa'] = $this->m_siswa->edit_data($where,'siswa')->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_siswa', $data);
		$this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nism = $this->input->post('nism');
        $kelas = $this->input->post('kelas');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');

        $data = array(
            'nama' => $nama,
            'nism' => $nism,
            'kelas' => $kelas,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
        );

        $where = array (
            'id' => $id 
        );
        $this->m_siswa->update_data($where, $data, 'siswa');
        redirect('siswa/index');
    }
    public function detail_siswa($id)
    {
        $detail = $this->m_siswa->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_siswa', $data);
		$this->load->view('templates/footer');
    }


}
