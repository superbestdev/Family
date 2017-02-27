<?php
class Document extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('custom_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('document_model');
        $this->load->model('aupair_model');
        $this->load->model('parent_model');

        if(!$this->aauth->is_loggedin()){
            redirect('session_controller/log_in');
        }
    }

    public function insert(){

        $status = "";
        $msg = "";
        $file_element_name = 'doc_file';
         
        if (empty($_POST['doc_title']))
        {
            $status = "error";
            $msg = "Please enter a title";
        }
         
        if ($status != "error")
        {
            $config['upload_path'] = 'files/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;
     
            $this->load->library('upload', $config);
     
            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $uploader = $this->get_uploader();
                $file_id = $this->document_model->insert_document($data['file_name'], $_POST['doc_title'], $uploader, $_POST['user_id']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo $status;
        
    }

    public function update($id, $step = 1){
        if($this->document_model->update_document($id, $step)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    public function get($user_id){
        if($documents = $this->document_model->get_document($user_id)){
            $data['documents'] = $documents;                        
        }else{
            $documents = array();
            $data['documents'] = $documents;
        }
        $data['date'] = $date;
        $this->load->view('templates/document', $data);
    }

    public function delete($id){
        if($this->document_model->delete_document($id)){
            echo 'success';
        }else{
            echo "failure";
        }
    }

    private function get_uploader(){
        if($this->aauth->is_member(4)){
            $parents = $this->parent_model->get_parent($this->aauth->get_user()->name);
            $uploader = $parents[0]['lastname'];
        }
        if($this->aauth->is_member(5)){
            $aupair = $this->aupair_model->get_aupair($this->aauth->get_user()->name);
            $uploader = $aupair['full_name'];
        }
        if($this->aauth->is_member(6)){
            $uploader = 'HBN-'.$this->aauth->get_user()->name;
        }
        return $uploader;
    }

    function upload_document($kind){
        switch ($kind) {
            case 1:
                $file_title = 'Loondienst-1';
                break;
            case 2:
                $file_title = 'Loondienst-2';
                break;
            case 3:
                $file_title = 'Loondienst-3';
                break;
            case 4:
                $file_title = 'Zelfstandig ondernemer-1';
                break;
            case 5:
                $file_title = 'Zelfstandig ondernemer-2';
                break;
            case 6:
                $file_title = 'Zelfstandig ondernemer-3';
                break;
            case 7:
                $file_title = 'DGA-1';
                break;
            case 8:
                $file_title = 'DGA-2';
                break;
            case 9:
                $file_title = 'DGA-3';
                break;
            case 10:
                $file_title = 'DGA-4';
                break;
            case 11:
                $file_title = 'DGA-5';
                break;
            case 12:
                $file_title = 'Eigen vermogen-1';
                break;
            case 13:
                $file_title = 'Eigen vermogen-2';
                break;
            case 14:
                $file_title = 'Eigen vermogen-3';
                break;
            case 15:
                $file_title = 'Agreement';
                break;
            case 16:
                $file_title = 'Awareness declaration';
                break;
                       
            default:
                # code...
                break;
        }        
        $documents = $this->document_model->get_document($this->aauth->get_user()->id);
        $document_id = '';
        $document_name = '';
        foreach ($documents as $key => $document) {
            if ($document['title'] == $file_title) {
                $document_name = $document['name'];
                $document_id   = $document['id'];
                unlink('files/'.$document['name']);
            }
        }        
        $file_name = md5($_FILES["file"]['name'].$this->aauth->get_user()->id.$kind).$_FILES["file"]['name'];
        $uploader = $this->get_uploader();
        
        if (upload($this->aauth->get_user()->id, $kind))
        {      
            if ($document_id != '') {
                if($this->document_model->upgrade_document($document_id, $file_name, $uploader, $this->aauth->get_user()->id)){
                    echo 'sucess';
                }else{
                    echo 'failure';                            
                }
            }else{
                if($this->document_model->insert_document($file_name, $file_title, $uploader, $this->aauth->get_user()->id)){
                    echo 'sucess';
                }else{
                    echo 'failure';                            
                } 
            }                            

        }else{
            echo 'failure';                            
        } 
    }
    
}