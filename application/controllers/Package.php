<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

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
    }
	
	
	//---------------------------------
	public function index($page=null)
	{
             $data['getCategory'] = $this->Fontend_model->getroompalm();
              $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
              $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage);
             
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/package',$data);
           $this->load->view('package/fontend/footer');
	}
        //----------------------------------
          public function Page($page=null)
	{
	  $data['getCategory'] = $this->Fontend_model->getroompalm();
              $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
              $data['packageDetail'] = $this->Fontend_model->getpackageDetail1($limit,$notUse,$start,$perpage);
             
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/package',$data);
           $this->load->view('package/fontend/footer');

        }
        //---------------------------------
	public function packagedetail($packageid=NULL)
	{
             $data['getCategory'] = $this->Fontend_model->getroompalm();
             $data['packDetail'] = $this->Fontend_model->getpackDetailByID($packageid);
             $data['packDetailnotID'] = $this->Fontend_model->getpackDetailnotID($packageid);
                $data['imagesList']=$this->Fontend_model->loadImgpack($packageid);
             
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/package_detail',$data);
           $this->load->view('package/fontend/footer');
	}
       
}
