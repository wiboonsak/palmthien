<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

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
	public function index($page=null)
	{
 
           
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
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                
           $this->load->view('package/fontend/tour',$data);
	}
        public function Page($page=null)
	{
	
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
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
                
           $this->load->view('package/fontend/tour',$data);
        }
         public function package_Detail($dataID=null)
	{
	

                $data['getpackageDetail'] = $this->Fontend_model->getpackageDetailByID($dataID);
                $data['imagesList']=$this->Fontend_model->loadpackageImg($dataID);
                $data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
		
		//--------------------------------

                $this->load->view('package/fontend/tour_detail',$data);

        }
      
}
