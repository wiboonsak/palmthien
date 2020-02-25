<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palmthien extends CI_Controller {

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
	public function index()
	{
             $data['getCategory'] = $this->Fontend_model->getroompalm();
             $data['roompalmData'] = $this->Fontend_model->list_roompalmData();
             
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/room_palmthien',$data);
           $this->load->view('package/fontend/footer');
	}
	//---------------------------------
	public function Roomdetail($cateid=NULL)
	{
             $data['getCategory'] = $this->Fontend_model->getroompalm();
             $data['roompalmData'] = $this->Fontend_model->list_roompalmData($cateid);
             $data['roompalmDatanotid'] = $this->Fontend_model->list_roompalmDatanotid($cateid);
             $roompalmData=$this->Fontend_model->list_roompalmData($cateid);
              foreach ($roompalmData->result() AS $roompalmData2){}
              $data['category'] = $this->Package_model->list_cateData($cateid);
            $data['imglist'] = $this->Package_model->loadImgroom($roompalmData2->id);
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/room_detail',$data);
           $this->load->view('package/fontend/footer');
	}
       
}
