<?php

class Fontend_model extends CI_Model {
               //-------------------------
    function getCategorylimit($limit = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE show_onweb = '1' ORDER BY category_order ASC LIMIT $limit ");
        return $sql;
    }
               //-------------------------
    function getCategory() {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE show_onweb = '1' ORDER BY category_order ASC ");
        return $sql;
    }
               //-------------------------
    function getroompalm() {
        $sql = $this->db->query("SELECT a.*,b.category_title FROM tbl_room_palmthien AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.data_status = '1' ORDER BY b.category_order ASC ");
        return $sql;
    }
   
      //------------------------------
    function str_limit_html($value, $limit) {

        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        // Strip text with HTML tags, sum html len tags too.
        // Is there another way to do it?
        do {
            $len = mb_strwidth($value, 'UTF-8');
            $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
            $len_tags = $len - $len_stripped;

            $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
        } while ($len_stripped > $limit);

        // Load as HTML ignoring errors
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

        // Fix the html errors
        $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

        // Remove body tag
        $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
        // Remove empty tags
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
    }
     //------------------------------------
    function getDay($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $date2;
    }

//------------------------------------
    function getMonth($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $monthArray[$mon];
    }

//------------------------------------
    function getYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $year;
    }

    //$strMonthCut =array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    //------------------------------------
    function getDayMonthYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }
    //---------------------------  
	function get_shortEngDate($day2){
		$DateTimeArray= explode(" ",$day2);
		$dateArray = explode("-",$DateTimeArray[0]);
		
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0];
		$monthArray3 = Array("01"=>"Jan","02"=>"Feb","03"=>"March","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;&nbsp;".$monthArray3[$mon]."&nbsp;&nbsp;".$year;
	} 
  
                //---------------------------
    function list_slideData() {
       
            $sql = "SELECT * FROM `tbl_slide_show` WHERE show_onweb = '1' ORDER BY slide_order ASC ";
            $query = $this->db->query($sql);
        return $query;
    }
                //---------------------------
    function getpackageDetail() {
       
            $sql = "SELECT * FROM `tbl_package` WHERE show_onweb = '1' ORDER BY date_add DESC LIMIT 6 ";
            $query = $this->db->query($sql);
        return $query;
    }
      //----------------------------------------
    function getpackageDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE show_onweb = '1' $txtNot ORDER BY date_add DESC  $txtWhere  $txtStart  " );
        return $sql;
    }
                  //---------------------------
    function getlastpackage() {
       
            $sql = "SELECT * FROM `tbl_package` WHERE show_onweb = '1' ORDER BY date_add DESC LIMIT 3  ";
            $query = $this->db->query($sql);
        return $query;
    }
                  //-------------------------
    function getCategorybyid($cateid = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE id ='" . $cateid . "'  ");
        return $sql;
    }
    
      //------------------------------------ 
    function Listpackageinclude($currentId =null) {

        $sql = $this->db->query("SELECT a.* ,  b.* FROM  tbl_package_include a LEFT JOIN tbl_package_feature b ON b.id = a.feature_id WHERE package_id = '.$currentId.' ");
        return $sql;
    }
                 //----------------------------------------
    function getpackageDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE id = '" . $productID . "' AND show_onweb = '1' ");
        return $sql;
    }
          //----------------------------
    function loadpackageImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_image` WHERE package_id ='" . $ProID . "'  ");
        return $sql;
    }
                  //---------------------------
    function getindexdata() {
       
            $sql = "SELECT * FROM `tbl_index` ORDER BY type ASC ";
            $query = $this->db->query($sql);
        return $query;
    }
              //---------------------------
    function list_roomandaData() {
            $sql = "SELECT * FROM `tbl_room_andaman` WHERE data_status = '1' ";
            $query = $this->db->query($sql);
        return $query;
    }
          //----------------------------
    function loadroomandaImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_room_anda_image` WHERE roomanda_id ='" . $ProID . "'  ORDER BY sort_number ASC");
        return $sql;
    }
              //---------------------------
    function list_roompalmData($cateid=null) {
        if($cateid == ''){
            $sql = "SELECT * FROM `tbl_room_palmthien` WHERE data_status = '1'";
        }else{
             $sql = "SELECT * FROM `tbl_room_palmthien` WHERE category_id = '".$cateid."' AND data_status = '1'";
        }
            $query = $this->db->query($sql);
        return $query;
    }
              //---------------------------
    function list_roompalmDatanotid($cateid=null) {
       
            $sql = "SELECT * FROM `tbl_room_palmthien` WHERE category_id != '".$cateid."' AND data_status = '1'";
            $query = $this->db->query($sql);
        return $query;
    }
         //---------------------------
    function loadImgroom($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_room_palm_image` WHERE roompalm_id ='" . $ProID . "' ORDER BY sort_number ASC LIMIT 1");
        return $sql;
    }
              //---------------------------
    function list_packageData($id=null) {
        if($id == ''){
            $sql = "SELECT * FROM ` tbl_package` WHERE show_onweb = '1'";
        }else{
             $sql = "SELECT * FROM ` tbl_package` WHERE id = '".$id."' AND show_onweb = '1'";
        }
            $query = $this->db->query($sql);
        return $query;
    }
        //----------------------------------------
    function getpackDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE id = '" . $productID . "' AND show_onweb = '1' ");
        return $sql;
    }
         //---------------------------
    function loadImgpack($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_image` WHERE package_id ='" . $ProID . "' ORDER BY sort_number ASC ");
        return $sql;
    }
         //----------------------------------------
    function getpackDetailnotID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE id != '" . $productID . "' AND show_onweb = '1' ORDER BY date_add DESC ");
        return $sql;
    }
          //---------------------------
    function loadImggallery($type=NULL) {
        $sql = $this->db->query("SELECT a.*,b.type FROM `tbl_gallery_image` AS a LEFT JOIN `tb_category_gallery` AS b ON a.categallery_id = b.id  WHERE b.type ='" . $type . "' AND b.show_onweb = '1' ORDER BY sort_number ASC ");
        return $sql;
    }
                    //---------------------------
    function list_categalleryData($type = NULL,$currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tb_category_gallery` WHERE id = '$currentID' AND type = '$type' AND show_onweb = '1'";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tb_category_gallery` WHERE  type = '$type' AND show_onweb = '1' ORDER BY category_order ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
    
   
    
     
    
    
    

}
 
