<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Oe extends Controller_Template_Base{
	
	//log incoming requests
	public function before(){
		parent::before();
		$ref=$_SERVER['HTTP_REFERER'];
		$agent=$_SERVER['HTTP_USER_AGENT'];
		$ip=$_SERVER['REMOTE_ADDR'];
		$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$current_url = URL::query();
			
		$visits = json_encode(["ref"=>$ref,"agent"=>$agent, "ip"=>$ip, "hostname"=>$host_name, "url"=>$current_url]);

		$today = date("Y-m-d H:i:s");

		$rows = DB::query(Database::INSERT, "INSERT into visitors (visits, timestamp) VALUES ('".$visits."','".$today."')");
		
		$rows = $rows->execute();

	}
	

	public function action_index()
	{	
		$tbl = self::action_get_data(1);

		$view = View::factory('oe/index');
		$this->view->set("tbl", $tbl);
		$this->response->body($view);

	}
	
	
		
	public function action_contactme(){
		$this->template->layout = View::factory('oe/contactme');
	
	}
	
	
	//gets all the content for the page detail view
	public function action_detail(){
		
		$unit = $this->request->param('id');
		$tbl = self::action_get_data(NULL,$unit);
		
		$sliders = self::action_get_main($unit);
		$desc = self::action_get_desc($unit);
		$skills = self::action_get_skills($unit);
		$title = self::action_get_title($unit);

		
		$this->template->layout = View::factory('oe/detail');
		$this->template->layout->set("slides", $sliders);
		$this->template->layout->set("skills", $skills);
		$this->template->layout->set("desc", $desc);
		$this->template->layout->set("title", $title);
		$this->template->layout->set("unit", $unit);
		$this->response->body($view);

		
		
	}
	
	public function action_resume(){
		
		$this->template->layout = View::factory('oe/resume');
		
	}
	
	public function action_contact(){
		
		$this->template->layout = View::factory('oe/contact');

	}
	
	//gets main slider images for each of the projects
	//checks for a possibility of there being 5 images to create proper slider
	public function action_get_main($unit=NULL){
		$rows = DB::query(Database::SELECT, "SELECT * FROM thumbs where unit='".$unit."'order by thumb desc");
		$rows = $rows->execute();
		
		
		foreach($rows as $row){
			$main_path = $row['main'];
			$slide1_path = $row['slider1'];
			$slide2_path = $row['slider2'];
			$slide3_path = $row['slider3'];
			$slide4_path = $row['slider4'];
			$slide5_path = $row['slider5'];
			
			
			$arr = ['<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">'];
			
			if(!empty($slide1_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			 if(!empty($slide2_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide2_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if(!empty($slide3_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide3_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if(!empty($slide4_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide4_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			if(!empty($slide5_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide5_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if($unit=="fye"){
				$arr = [];
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="300px" height="550px">');
				
				if(!empty($slide1_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if(!empty($slide2_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide2_path.'" style="margin:5px;padding:5px;" width="500px" height="654px">');
			}

			}
			
			if($unit=="cd"){
				$arr=[];
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="700px" height="700px">');
				
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="700px" height="700px">');
				
			}
			
			if($unit=="fs"){
				$arr=[];
				if(!empty($main_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="900px" height="492px">');
			}
			
			if(!empty($slide1_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if(!empty($slide2_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide2_path.'" style="margin:5px;padding:5px;" width="1024px" height="492px">');
			}
			
			if(!empty($slide3_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide3_path.'" style="margin:5px;padding:5px;" width="254px" height="290px">');
			}
			}
			
			
			if($unit=="pepp"){
				$arr=[];
				if(!empty($main_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="1024px" height="576px">');
			}
			
			if(!empty($slide1_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="1024px" height="576px">');
			}
			
			if(!empty($slide2_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide2_path.'" style="margin:5px;padding:5px;" width="1024px" height="576px">');
			}
			
			if(!empty($slide3_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide3_path.'" style="margin:5px;padding:5px;" width="254px" height="576px">');
			}
			}
			
			
			if($unit=="beat"){
				$arr=[];
				if(!empty($main_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="1024px" height="576px">');
			}
			
			}
			
			if($unit=="fye"){
				$arr=[];
				if(!empty($main_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$main_path.'" style="margin:5px;padding:5px;" width="500px" height="654px">');
			}
			
			if(!empty($slide1_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide1_path.'" style="margin:5px;padding:5px;" width="1021px" height="575px">');
			}
			
			if(!empty($slide2_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide2_path.'" style="margin:5px;padding:5px;" width="682px" height="1024px">');
			}
			
			if(!empty($slide3_path)){
				array_push($arr,'<img src="../../assets/oe_img/main/'.$slide3_path.'" style="margin:5px;padding:5px;" width="682px" height="1024px">');
			}
			}

			
			
			
			
			}
			return $arr;
	}
	
	

	
	//return functions for action_get_detail()
	public function action_get_desc($unit=NULL){
		$rows = DB::query(Database::SELECT, "SELECT * FROM description where unit='".$unit."'");
		$rows = $rows->execute();
		foreach($rows as $row){
			
			$desc = $row['description'];
			$skills = $row['skills'];
			return $desc;
		}
	}
	
	public function action_get_skills($unit=NULL){
		$rows = DB::query(Database::SELECT, "SELECT * FROM description where unit='".$unit."'");
		$rows = $rows->execute();
		foreach($rows as $row){
			
			
			$skills = $row['skills'];
			return $skills;
		}
	}
	
	public function action_get_title($unit=NULL){
		$rows = DB::query(Database::SELECT, "SELECT * FROM description where unit='".$unit."'");
		$rows = $rows->execute();
		foreach($rows as $row){
			
			
			$title = $row['title'];
			return $title;
		}
	}
	
	
	//get thumbnail data
	public function action_get_data($thumb=NULL, $unit=NULL,$main=NULL){
	
	if($unit==NULL){
		
		$rows = DB::query(Database::SELECT, 'SELECT * FROM thumbs order by thumb_order asc');
		
	}else {
		
		$rows = DB::query(Database::SELECT, "SELECT * FROM img where unit='".$unit."' order by album asc");
	}
	
	$rows = $rows->execute();
	
	return $rows;

	}






}