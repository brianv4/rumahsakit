<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        $this->data['CI'] = &get_instance();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_login');
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->data['title_web'] = 'SELAMAT DATANG DI SI KLINIK X - RS BAKTI HUSADA';
        $this->load->view('headerlogin', $this->data);
        $this->load->view('login_view', $this->data);
    }

    public function auth()
    {
        $user = htmlspecialchars($this->input->post('user', TRUE), ENT_QUOTES);
        $pass = htmlspecialchars($this->input->post('pass', TRUE), ENT_QUOTES);
        // auth
        $proses_login = $this->db->query("SELECT * FROM tbl_login WHERE user='$user' AND pass = md5('$pass')");
        $row = $proses_login->num_rows();
        if ($row > 0) {
            $hasil_login = $proses_login->row_array();

            // create session
            $this->session->set_userdata('masuk_perpus', TRUE);
            $this->session->set_userdata('level', $hasil_login['level']);
            $this->session->set_userdata('ses_id', $hasil_login['id_login']);
            $this->session->set_userdata('anggota_id', $hasil_login['anggota_id']);

            echo '<script>window.location="' . base_url() . 'dashboard";</script>';
        } else {

            echo '<script>alert("Proses Login Gagal, Masukkan Kembali Username dan Password");
            window.location="' . base_url() . '"</script>';
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo '<script>window.location="' . base_url() . '";</script>';
    }

    public function auth_pasien()
    {
        $user = htmlspecialchars($this->input->post('user', TRUE), ENT_QUOTES);
        $pass = htmlspecialchars($this->input->post('pass', TRUE), ENT_QUOTES);
        // auth
        $proses_login = $this->db->query("SELECT * FROM tabel_pasien WHERE username='$user' AND pass = md5('$pass')");
        $row = $proses_login->num_rows();
        if ($row > 0) {
            $hasil_login = $proses_login->row_array();

            // create session
            $this->session->set_userdata('masuk_perpus', TRUE);
            $this->session->set_userdata('no_identitas', $hasil_login['no_identitas']);
            $this->session->set_userdata('ses_id', $hasil_login['no_rm']);
            $this->session->set_userdata('nama_pasien', $hasil_login['nama_pasien']);
            $this->session->set_userdata('jenis_kelamin', $hasil_login['j_kel']);

            echo '<script>window.location="' . base_url() . 'antrian";</script>';
        } else {

            echo '<script>alert("Proses Login Gagal, Masukkan Kembali Username dan Password");
            window.location="' . base_url() . '"</script>';
        }
    }

    public function logout_pasien()
    {
        $this->session->sess_destroy();
        echo '<script>window.location="' . base_url() . 'antrian/login_antrian";</script>';
    }
}
