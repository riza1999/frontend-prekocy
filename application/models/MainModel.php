<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MainModel extends CI_Model
{
    private $_batchImport;
    
    public function setBatchImport($batchImport) 
    {
        $this->_batchImport = $batchImport;
    }
 
    // save data
    public function importData() {
        $data = $this->_batchImport;
        $this->db->insert_batch('ms_komentar', $data);
    }

    public function getLatestUpload_id()
    {
        $query = $this->db->query('select id_upload from ms_komentar order by id_upload DESC LIMIT 1');
        return json_encode($query->result());
    }

    function getKomentars($id_upload){
        $query = $this->db->query("select komentar from ms_komentar where id_upload = $id_upload order by id_komentar");
        return json_encode($query->result());
    }
}