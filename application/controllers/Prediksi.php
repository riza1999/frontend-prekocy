<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediksi extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('MainModel');
        $this->load->library('upload');
        $this->load->helper('url');
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
		$this->kalimat();
	}

    public function kalimat()
    {
        $active_class["active_class"] = "komentar";
        $this->load->view('template/header');
        $this->load->view('template/menu',$active_class);
        $this->load->view('prediksi_view');
        $this->load->view('template/footer');
        $this->load->view('template/script');
    }

    public function file()
    {
        $active_class["active_class"] = "file";
        $this->load->view('template/header');
        $this->load->view('template/menu',$active_class);
        $this->load->view('file_view');
        $this->load->view('template/footer');
        $this->load->view('template/script');
    }

    public function hasil()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('hasil_view');
        $this->load->view('template/footer');
        $this->load->view('template/script');
    }

    public function pratinjau()
    {
        $id_upload = $_GET["id_upload"];
        $data['komentars'] = json_decode($this->MainModel->getKomentars($id_upload));
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('pratinjau_view',$data);
        $this->load->view('template/footer');
        $this->load->view('template/script');
    }

    public function getKomentars($id_upload)
    {
        $data['komentars'] = json_decode($this->MainModel->getKomentars($id_upload));


        echo json_encode($data);
    }

    public function importExcel()
    {
        $data = array();
        $response = json_decode($this->MainModel->getLatestUpload_id());
        $upload_id = ((int)$response[0]->id_upload)+1;
        $this->load->library('form_validation');
        $this->form_validation->set_rules('upload_file', 'Upload File', 'callback_checkFileValidation');
        if($this->form_validation->run() == false) {  
            redirect(base_url(""));
        } else {
            // If file uploaded
            if(!empty($_FILES['upload_file']['name'])) { 
                // get file extension
                $extension = pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION);
 
                if($extension == 'csv'){
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } elseif($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }
                // file path
                $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            
                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array('komentar');
                $makeArray = array('komentar'=>'komentar');
                $SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) {
                    foreach ($dataInSheet as $key => $value) {
                        if (in_array(trim($value), $createArray)) {
                            $value = preg_replace('/\s+/', '', $value);
                            $SheetDataKey[trim($value)] = $key;
                        } 
                    }
                }
                $dataDiff = array_diff_key($makeArray, $SheetDataKey);
                
                if (empty($dataDiff)) 
                {
                    $flag = 1;
                }
                // match excel sheet column
                if ($flag == 1) {
                    for ($i = 2; $i <= $arrayCount; $i++) {
                        $komentar = $SheetDataKey['komentar'];
 
                        $komentar = filter_var(trim($allDataInSheet[$i][$komentar]));
                        $fetchData[] = array(
                            'id_komentar' => NULL,
                            'komentar' => $komentar,
                            'id_upload' => $upload_id
                        );
                    }   
                    $data['dataInfo'] = $fetchData;
                    $this->MainModel->setBatchImport($fetchData);
                    $this->MainModel->importData();
                } else {
                    echo "Please import correct file, did not match excel sheet column";
                }
                redirect(base_url("prediksi/pratinjau")."?id_upload=".$upload_id."&active_class=file", $data);
            }
        }
    }

    // checkFileValidation
    public function checkFileValidation($string) {
        $file_mimes = array('text/x-comma-separated-values', 
          'text/comma-separated-values', 
          'application/octet-stream', 
          'application/vnd.ms-excel', 
          'application/x-csv', 
          'text/x-csv', 
          'text/csv', 
          'application/csv', 
          'application/excel', 
          'application/vnd.msexcel', 
          'text/plain', 
          'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        if(isset($_FILES['upload_file']['name'])) {
            $arr_file = explode('.', $_FILES['upload_file']['name']);
            $extension = end($arr_file);
            if(($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['upload_file']['type'], $file_mimes)){
                return true;
            }else{
                $this->form_validation->set_message('checkFileValidation', 'Please choose correct file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('checkFileValidation', 'Please choose a file.');
            return false;
        }
    }
}
