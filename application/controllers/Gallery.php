<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        $this->load->model('Fontend_model');
        $this->load->model('Package_model');
    }
	
	
	//---------------------------------
	public function index($type = NULL)
	{
             $data['getCategory'] = $this->Fontend_model->getroompalm();
             $data['categalleryData'] =$this->Fontend_model->list_categalleryData($type);
             $data['Imggallery'] =$this->Fontend_model->loadImggallery($type);
             $data['type'] = $type;
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/gallery',$data);
           $this->load->view('package/fontend/footer');
	}
       
}
