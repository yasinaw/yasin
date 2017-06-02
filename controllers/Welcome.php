<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('myModel');
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper(array('url'));
        }

	function index()
	{
		$this->load->view('index');
	}
	function aboutus()
	{
		$this->load->view('aboutus');
	}
	function contactus()
	{
		$this->load->view('contactus');
	}
    function login()
    {
        $this->load->view('login');
    }
    function loginX()
    {
        $this->load->view('loginX');
    }
    function crud()
    {
        if($this->session->userdata('status') == "login"){
            $jeniscode = 4;
            $this->load->database();
            $jumlah_data = $this->myModel->jumlah_data($jeniscode);
            $this->load->library('pagination');
            $config['base_url'] = base_url().'index.php/welcome/crud/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 5;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data = $this->myModel->data($config['per_page'],$from,$jeniscode);
            $this->load->view('crud',array('data' => $data));  
        } else{
            redirect(base_url());
        }
        
    }
    function etikal()
	{
        $jeniscode = 2;
        $this->load->database();
        $jumlah_data = $this->myModel->jumlah_data($jeniscode);
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/welcome/etikal/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data = $this->myModel->data($config['per_page'],$from,$jeniscode);
        $this->load->view('etikal',array('data' => $data));
	}
	function generik()
	{
        $jeniscode = 1;
        $this->load->database();
        $jumlah_data = $this->myModel->jumlah_data($jeniscode);
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/welcome/generik/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data = $this->myModel->data($config['per_page'],$from,$jeniscode);
        $this->load->view('generik',array('data' => $data));  
	}
	function lainlain()
	{
		$jeniscode = 3;
        $this->load->database();
        $jumlah_data = $this->myModel->jumlah_data($jeniscode);
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/welcome/lainlain/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data = $this->myModel->data($config['per_page'],$from,$jeniscode);
        $this->load->view('lainlain',array('data' => $data));
	}

    function add_data() {
        if($this->session->userdata('status') == "login"){
            $this->load->view('form_add');
        } else{
            redirect(base_url());
        }
    }

    //________________________________ DATABASE _______________________________________________________

    
    function insert() {
         if (isset($_POST['upload'])){
            $target = "./images/".basename($_FILES['image']['name']);
            
            $barcode = $_POST['barcode'];
            $namaObat = $_POST['namaObat'];
            $kegunaan =  $_POST['kegunaan'];
            $harga = $_POST['harga'];
            $jeniscode =  $_POST['jeniscode'];
            $stok = $_POST['stok'];
            $jenis = $_POST['jenis'];
            $image = $_FILES['image']['name'];
            $data_insert = array(
                'barcode' => $barcode,
                'namaObat' => $namaObat,
                'kegunaan' => $kegunaan,
                'harga' => $harga,
                'jeniscode' => $jeniscode,
                'stok' => $stok,
                'jenis' => $jenis,
                'image' => $target

            );
        
          if(is_uploaded_file($_FILES['image']['tmp_name'])){
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                echo "Sukses!";
            } else {
                echo "Gagal";
            }
            $res = $this->db->insert('obat', $data_insert) or trigger_error(mysql_error().$sql);

            if($res>=1){
                redirect('index.php/Welcome/crud');
            } else {
                echo "Input Gagal!";
            }
        }
    }

    function save(){
        $url = $this->do_upload();
        $title = $_POST["title"];
        $this->myModel->save($title, $url);
    }
    
    function do_upload($barcode){
        $imagee = $_FILES['image']['name'];
        
        $type = explode('.', $imagee);
        $type = strtolower($type[count($type)-1]);
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg", "jpeg", "gif", "png")))
            if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
                if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
                    return $url;
        return "";
    }
    
    function update() {
        $barcode = $_POST['barcode'];
        $namaObat = $_POST['namaObat'];
        $kegunaan = $_POST['kegunaan'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $jeniscode = $_POST['jeniscode'];
        $jenis = $_POST['jenis'];
        $data_update = array(
            'namaObat' => $namaObat,
            'kegunaan' => $kegunaan,
			'stok' => $stok,
			'harga' => $harga,
			'jeniscode' => $jeniscode,
			'jenis' => $jenis
        );
        $where = array('barcode'=>$barcode);
        $res = $this->myModel->UpdateData('obat', $data_update, $where);
        if($res>=1) {
            redirect('index.php/Welcome/crud');
        }
    }
    
    function edit($barcode) {
        if($this->session->userdata('status') == "login"){
        $brng = $this->myModel->GetBarang("where barcode = '$barcode'");
        $data = array(
            "barcode"=>$brng[0]['barcode'],
            "namaObat"=>$brng[0]['namaObat'],
            "kegunaan"=>$brng[0]['kegunaan'],
            "stok"=>$brng[0]['stok'],
            "harga"=>$brng[0]['harga'],
            "jeniscode"=>$brng[0]['jeniscode'],
            "jenis"=>$brng[0]['jenis'],
        );
        $this->load->view('form_edit', $data);
    }else{
         redirect(base_url());
        }
    }
    
    
    function delete($barcode) {
        $where = array('barcode' => $barcode);
        $res = $this->myModel->DeleteData('obat',$where);
        if($res>=1) {
            redirect('index.php/Welcome/crud');
        }
            
    }

    //________________________________ EMAIL _______________________________________________________

    function email() {

        $nama = $_POST['nama'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $isi = $_POST['isi'];
        
        $data = array(
            "nama"=>$nama,
            "subject"=>$subject,
            "email"=>$email,
            "isi"=>$isi,
        );

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'yasin.awb@gmail.com';
        $config['smtp_pass'] = 'kekuatanapi0708';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;


      $notif['status'] = "Terima kasih telah menghubungi kami, Kami akan segera menjawab pesan Anda";

      $this->email->initialize($config);
      $this->email->to('yasinaw27@gmail.com');
      $this->email->from('yasin.awb@gmail.com' , 'Yasin Awwab');
      $this->email->subject('Feedback Mel Medica');
      $this->email->message('Hai, anda menerima 1 pesan oleh ' . $nama . " | " . "  Email : " . $email . " | " .  "  Subject : " . $subject 
                            . " | "  .  "  Pesan : " . $isi);
      $this->email->send();
      $this->load->view('contactus', $notif);
    }

    //________________________________ LOGIN ______________________________________________________

    function go_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->myModel->login("admin",$where);
        if($cek->num_rows()==1){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );

            $this->session->set_userdata($data_session);

            redirect('index.php/Welcome/crud');

        }else{
            $data['err_message'] = "USERNAME / PASSWORD SALAH";
            $this->load->view('loginX', $data);
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    //________________________________ SEARCH ______________________________________________________

    function search_keywordg()
    {
        $keyword    =   $this->input->post('keyword');
        $data  =   $this->myModel->search($keyword);
        $this->load->view('generiks',array('data' => $data));
    }
    function search_keyworde()
    {
        $keyword    =   $this->input->post('keyword');
        $data  =   $this->myModel->search($keyword);
        $this->load->view('etikals',array('data' => $data));
    }
    function search_keywordl()
    {
        $keyword    =   $this->input->post('keyword');
        $data  =   $this->myModel->search($keyword);
        $this->load->view('lainlains',array('data' => $data));
    }
    function search_keywordc()
    {
        $keyword    =   $this->input->post('keyword');
        $data  =   $this->myModel->search($keyword);
        $this->load->view('cruds',array('data' => $data));
    }

}
