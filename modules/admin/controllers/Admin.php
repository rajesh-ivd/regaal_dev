<?php

class Admin extends MX_Controller{

	function __construct(){

		parent::__construct();

        $this->load->helper(array('form', 'url'));

		$this->load->library(array('form_validation','session','email','pagination','safe','upload'));

		$this->load->model('admin_model');

	}



	public function index(){

		$data['page'] = 'login';



		

		$this->load->view('login', $data);

	}



	public function login_check(){

		$mob = trim($this->input->post('email'));

		$password = trim($this->input->post('password'));

		$target = $this->input->post('target');



		$this->form_validation->set_rules('email','Mobile', 'required');

		if($this->form_validation->run()){

			$this->form_validation->set_rules('password','Password', 'required');

			if($this->form_validation->run()){

				if($target=='admin'){
					$password = strtolower($password);
					if($mob=='admin@gmail.com' && $password=='regaal'){

						$res['status'] = 'success';

						$this->session->set_userdata(array('active_target'=>'banner', 'login_status'=>'yes'));

					}

					else{

						$res['status'] = 'failed';

						$res['msg'] = 'Wrong Email or Password !';

						$res['focus'] = 'password';

						$res['error_p'] = 'error_password';

					}

				}

				else{

					$check = $this->admin_model->get_row_where_data('applicant', array('mob'=>$mob, 'password'=>$password, 'status'=>'active'));

					if($check){

						$res['status'] = 'success';

						$this->session->set_userdata(array('mob'=>$mob, 'login_status'=>true,'type'=>$check->type,'info'=>$check));

					}

					else{

						$res['status'] = 'failed';

						$res['msg'] = 'Please Try Again !';

						$res['focus'] = 'password';

						$res['error_p'] = 'error_password';

					}

				}

			}

			else{

				$res['status'] = 'failed';

				$res['msg'] = 'Please Enter Password !';

				$res['focus'] = 'password';

				$res['error_p'] = 'error_password';

			}

		}

		else{

			$res['status'] = 'failed';

			$res['msg'] = 'Please Enter a Mobile Number !';

			$res['focus'] = 'email';

			$res['error_p'] = 'error_email';

		}

		echo json_encode($res);

	}



	public function logout(){

		$this->session->sess_destroy();

	}


























	public function home(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'home';

		$data['home_banner_desk_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'home_desk.php', 'img_status'=>'active'));
		$data['home_banner_mob_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'home_mob.php', 'img_status'=>'active'));
		$data['home_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'1', 'element_target'=>'home.php'));
		$data['home_section2_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'2', 'element_target'=>'home.php'));
		$data['home_timeline_data'] = $this->admin_model->get_rows_where_data('tbl_timeline', array('timeline_section'=>'2', 'timeline_target'=>'home.php', 'timeline_status'=>'active'));
		$data['home_section3_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'3', 'element_target'=>'home.php'));
		$data['home_section3_pic_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'3', 'img_target_page'=>'home_desk.php'));
		$data['home_section3_pic_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'3', 'img_target_page'=>'home_mob.php'));

		$this->load->view('common/index',$data);

	}



	public function leadership(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'leadership';

		$data['leadership_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'leadership_desk.php', 'img_status'=>'active'));
		$data['leadership_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'leadership_mob.php', 'img_status'=>'active'));
		$data['leadership_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'4', 'img_target_page'=>'leadership.php', 'img_status'=>'active'));

		$this->load->view('common/index',$data);

	}



	public function products(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'products';

		$data['products_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_desk.php', 'img_status'=>'active'));
		$data['products_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_mob.php', 'img_status'=>'active'));
		$data['products_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'5', 'img_target_page'=>'products.php', 'img_status'=>'active'));
		$data['future_products_data'] = $this->admin_model->get_rows_where_data('tbl_future_products', array('product_status'=>'active'));

		$this->load->view('common/index',$data);

	}



	public function careers(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'careers';

		$data['careers_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'careers_desk.php', 'img_status'=>'active'));
		$data['careers_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'careers_mob.php', 'img_status'=>'active'));
		$data['careers_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'6', 'element_target'=>'careers.php'));
		$data['careers_section2_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'7', 'element_target'=>'careers.php'));
		$data['careers_job_data'] = $this->admin_model->get_rows_where_data('tbl_jobs', array('job_target_page'=>'careers.php', 'job_status'=>'active'));
		$data['careers_testimonial_data'] = $this->admin_model->get_rows_where_data('tbl_testimonial', array('testimonial_status'=>'active'));

		$this->load->view('common/index',$data);

	}


	public function contact(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'contact';

		$data['contact_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'contact_desk.php', 'img_status'=>'active'));
		$data['contact_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'contact_mob.php', 'img_status'=>'active'));
		$data['contact_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'8', 'element_target'=>'contact.php'));

		$this->load->view('common/index',$data);

	}


	public function gallery(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'gallery';

		$data['gallery_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'gallery_desk.php', 'img_status'=>'active'));
		$data['gallery_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'gallery_mob.php', 'img_status'=>'active'));
		// $data['gallery_cat_data'] = $this->admin_model->get_rows_where_data('tbl_gallery_category', array('cat_status'=>'active'));
		$data['gallery_image_data'] = $this->admin_model->get_gallery_data();

		$this->load->view('common/index',$data);

	}


	public function csr(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'csr';

		$data['csr_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'csr_desk.php', 'img_status'=>'active'));
		$data['csr_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'csr_mob.php', 'img_status'=>'active'));
		$data['csr_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'9', 'element_target'=>'csr.php'));
		$data['csr_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'9', 'img_target_page'=>'csr.php', 'img_status'=>'active'));

		$this->load->view('common/index',$data);

	}


	public function about(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'about';

		$data['about_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'about_desk.php', 'img_status'=>'active'));
		$data['about_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'about_mob.php', 'img_status'=>'active'));
		$data['about_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'10', 'element_target'=>'about.php'), null, null, 'element_id', 'asc');
		$data['about_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'10', 'img_target_page'=>'about.php', 'img_status'=>'active'));

		// echo '<pre>';
		// print_r($data['about_section1_data']);
		// die();

		$this->load->view('common/index',$data);

	}


	public function culture(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'culture';

		$data['culture_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'culture_desk.php', 'img_status'=>'active'));
		$data['culture_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'culture_mob.php', 'img_status'=>'active'));
		$data['culture_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'11', 'element_target'=>'culture.php'));

		$this->load->view('common/index',$data);

	}


	public function achievements(){

		if(!$this->session->userdata('login_status') || $this->session->userdata('login_status')!='yes'){ redirect(base_url('admin'));}

		$data['page'] = 'achievements';

		$data['achievements_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'achievements_desk.php', 'img_status'=>'active'));
		$data['achievements_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'achievements_mob.php', 'img_status'=>'active'));
		$data['achievements_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'12', 'element_target'=>'achievements.php'));

		$this->load->view('common/index',$data);

	}





































	//New Functions//

	// public function make_active(){
	// 	$this->session->set_userdata(array('active_target'=>$this->input->post('active_target')));
	// }



	public function image_add_edit(){
		$config['file_name'] = time();
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = '*';
		// $config['max_size'] = 10000;
		// $config['max_width'] = 2024;
		// $config['max_height'] = 768;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$img_data['linkedin_link'] = '';
		if($this->input->post('img_id')){$img_id = $this->input->post('img_id');}
		if($this->input->post('img_title')){$img_data['img_title'] = $this->input->post('img_title');}
		if($this->input->post('img_text')){$img_data['img_text'] = $this->input->post('img_text');}
		if($this->input->post('linkedin_link')){$img_data['linkedin_link'] = $this->input->post('linkedin_link');}
		if($this->input->post('category')){$img_data['category'] = $this->input->post('category');}
		if($this->input->post('img_target_page')){$img_data['img_target_page'] = $this->input->post('img_target_page');}
		if($this->input->post('img_section')){$img_data['img_section'] = $this->input->post('img_section');}

		// print_r($_FILES['pic']);
		// die();

		if(isset($_FILES['pic'])){
			if ($this->upload->do_upload('pic')){
				$data = array('upload_data' => $this->upload->data());
				$img_data['img_link'] = $data['upload_data']['file_name'];
				// if($pic_target=='desktop'){
				// 	$banner['pic_target'] = 'desktop';
				// }
				// else{
				// 	$banner['pic_target'] = 'mobile';
				// }
				if(!$this->input->post('img_id')){
					$this->admin_model->insert_row_data('tbl_images', $img_data);
					$this->session->set_flashdata('flashmsg','Added Successfully!'); 
				}
				else{
					$this->admin_model->update_row_data('tbl_images', $img_data, array('img_id'=>$img_id));
					$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
				}
				$res['status'] = 'success';
			}
			else{
				$error = array('error' => $this->upload->display_errors());
				$res['status'] = 'failed';
				// $res['msg'] = $_FILES['pic']['type'];
				$res['msg'] = $error['error'];
				// $error = array('error' => $this->upload->display_errors());
				// print_r($error);
				// die();
				// if($pic_target=='desktop'){
				// 	$res['error_p'] = 'error_pic_d';
				// }
				// else{
				// 	$res['error_p'] = 'error_pic_m';
				// }
			}
		}
		else{
			if(!$this->input->post('img_id')){
				$res['status'] = 'failed';
				$res['msg'] = 'Please enter a Valid image!';
				// if($pic_target=='desktop'){
				// 	$res['error_p'] = 'error_pic_d';
				// }
				// else{
				// 	$res['error_p'] = 'error_pic_m';
				// }
			}
			else{
				$this->admin_model->update_row_data('tbl_images', $img_data, array('img_id'=>$img_id));
				$res['status'] = 'success';
				$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
			}
		}
		echo json_encode($res);
	}


	public function image_edit_data(){
		$image_data = $this->admin_model->get_row_where_data('tbl_images', array('img_id'=>$this->input->post('img_id')));
		echo json_encode($image_data);
	}


	public function image_del(){
		// echo $this->input->post('img_id');
		// $banner_data = $this->admin_model->get_row_where_data('tbl_images', array('img_id'=>$this->input->post('img_id')));
		$this->admin_model->update_row_data('tbl_images', array('img_status'=>'inactive'), array('img_id'=>$this->input->post('img_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!'); 
		// print_r($banner_data);
		// echo json_encode($banner_data);
	}


	public function future_product_edit_data(){
		$products_data = $this->admin_model->get_row_where_data('tbl_future_products', array('product_id'=>$this->input->post('product_id')));
		echo json_encode($products_data);
	}

	public function future_product_add_edit(){
		$product_data = [];
		if($this->input->post('product_name')){$product_data['product_name'] = $this->input->post('product_name');}
		if(!$this->input->post('product_id')){
			$res = $this->admin_model->insert_row_data('tbl_future_products', $product_data);
			$this->session->set_flashdata('flashmsg','Added Successfully!'); 
		}
		else{
			$res = $this->admin_model->update_row_data('tbl_future_products', $product_data, array('product_id'=>$this->input->post('product_id')));
			$this->session->set_flashdata('flashmsg','Updated Successfully!');
		}
		if($res) echo json_encode(array('status'=>'success'));
		else echo json_encode(array('status'=>'failed'));
	}


	public function futute_product_del(){
		$this->admin_model->update_row_data('tbl_future_products', array('product_status'=>'inactive'), array('product_id'=>$this->input->post('product_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}

















	public function home_section1_save(){
		$home_section1_title = $this->input->post('home_section1_title');
		$home_section1_text = $this->input->post('home_section1_text');
		$home_section2_videoid = $this->input->post('home_section2_videoid');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section1_title), array('element_target'=>'home.php', 'element_title'=>'home_section1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section1_text), array('element_target'=>'home.php', 'element_title'=>'home_section1_text'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section2_videoid), array('element_target'=>'home.php', 'element_title'=>'home_section2_videoid'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function home_section2_save(){
		$home_section2_title = $this->input->post('home_section2_title');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section2_title), array('element_target'=>'home.php', 'element_title'=>'home_section2_title'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function home_timeline_year_add(){
		$timeline_section = '2';
		$data = array(
			'timeline_section'=>$timeline_section,
			'timeline_year'=>$this->input->post('home_timeline_year'),
			'timeline_text'=>$this->input->post('home_timeline_text'),
			'timeline_target'=>'home.php',
			'timeline_status'=>'active'
		);

		$this->admin_model->insert_row_data('tbl_timeline', $data);
		$this->session->set_flashdata('flashmsg','Added Successfully!');
	}


	public function home_timeline_data(){
		$timeline_data = $this->admin_model->get_row_where_data('tbl_timeline', array('timeline_id'=>$this->input->post('timeline_id')));
		echo json_encode($timeline_data);
	}


	public function home_timeline_year_update(){
		$timeline_section = '2';
		$timeline_id = $this->input->post('home_timeline_id_edit');
		$data = array(
			'timeline_section'=>$timeline_section,
			'timeline_year'=>$this->input->post('home_timeline_year_edit'),
			'timeline_text'=>$this->input->post('home_timeline_text_edit'),
			'timeline_target'=>'home.php',
			'timeline_status'=>'active'
		);

		$this->admin_model->update_row_data('tbl_timeline', $data, array('timeline_id'=>$timeline_id));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}

	public function home_timeline_del(){
		$this->admin_model->update_row_data('tbl_timeline', array('timeline_status'=>'inactive'), array('timeline_id'=>$this->input->post('timeline_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}


	public function home_section3_save(){
		$home_section3_title = $this->input->post('home_section3_title');
		$home_section3_text = $this->input->post('home_section3_text');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section3_title), array('element_target'=>'home.php', 'element_title'=>'home_section3_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$home_section3_text), array('element_target'=>'home.php', 'element_title'=>'home_section3_text'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function careers_section1_save(){
		$careers_section1_title = $this->input->post('careers_section1_title');
		$careers_section1_text = $this->input->post('careers_section1_text');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$careers_section1_title), array('element_target'=>'careers.php', 'element_title'=>'careers_section1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$careers_section1_text), array('element_target'=>'careers.php', 'element_title'=>'careers_section1_text'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function careers_section2_save(){
		$careers_section2_email = $this->input->post('careers_section2_email');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$careers_section2_email), array('element_target'=>'careers.php', 'element_title'=>'careers_section2_email'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}

	public function careers_section2_add(){
		$data = array(
			'job_title'=>$this->input->post('careers_section2_title'),
			'job_text'=>$this->input->post('careers_section2_text'),
			'job_target_page'=>'careers.php',
			'job_status'=>'active'
		);

		$this->admin_model->insert_row_data('tbl_jobs', $data);
		$this->session->set_flashdata('flashmsg','Added Successfully!');
	}


	public function careers_job_data(){
		$job_data = $this->admin_model->get_row_where_data('tbl_jobs', array('job_id'=>$this->input->post('job_id')));
		echo json_encode($job_data);
	}


	public function careers_section2_update(){
		$job_id = $this->input->post('careers_section2_id_edit');
		$data = array(
			'job_title'=>$this->input->post('careers_section2_title_edit'),
			'job_text'=>$this->input->post('careers_section2_text_edit'),
			'job_target_page'=>'careers.php',
			'job_status'=>'active'
		);

		$this->admin_model->update_row_data('tbl_jobs', $data, array('job_id'=>$job_id));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function careers_job_del(){
		$this->admin_model->update_row_data('tbl_jobs', array('job_status'=>'inactive'), array('job_id'=>$this->input->post('job_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}


	public function contact_section1_save(){
		$contact_section1_email = $this->input->post('contact_section1_email');
		$contact_section1_address1 = $this->input->post('contact_section1_address1');
		$contact_section1_address2 = $this->input->post('contact_section1_address2');
		$contact_section1_address3 = $this->input->post('contact_section1_address3');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$contact_section1_email), array('element_target'=>'contact.php', 'element_title'=>'contact_section1_email'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$contact_section1_address1), array('element_target'=>'contact.php', 'element_title'=>'contact_section1_address1'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$contact_section1_address2), array('element_target'=>'contact.php', 'element_title'=>'contact_section1_address2'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$contact_section1_address3), array('element_target'=>'contact.php', 'element_title'=>'contact_section1_address3'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function gallery_cat_add(){
		$gallery_data = array(
			'cat_name'=>$this->input->post('gallery_cat_name'),
			'cat_status'=>'active'
		);

		$this->admin_model->insert_row_data('tbl_gallery_category', $gallery_data);
		$this->session->set_flashdata('flashmsg','Added Successfully!');
	}

	public function gallery_cat_data_edit(){
		$cat_data = $this->admin_model->get_row_where_data('tbl_gallery_category', array('cat_id'=>$this->input->post('cat_id')));
		echo json_encode($cat_data);
	}

	public function gallery_cat_update(){
		$gallery_data = array(
			'cat_name'=>$this->input->post('gallery_cat_name_edit')
		);

		$this->admin_model->update_row_data('tbl_gallery_category', $gallery_data, array('cat_id'=>$this->input->post('gallery_cat_id')));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}

	public function gallery_cat_del(){
		$this->admin_model->update_row_data('tbl_gallery_category', array('cat_status'=>'inactive'), array('cat_id'=>$this->input->post('cat_id')));
		$this->admin_model->update_row_data('tbl_gallery', array('gallery_img_status'=>'inactive'), array('gallery_cat_id'=>$this->input->post('cat_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}


	public function gallery_image_data_edit(){
		$img_data = $this->admin_model->get_row_where_data('tbl_gallery', array('gallery_img_id'=>$this->input->post('gallery_img_id')));
		echo json_encode($img_data);
	}


	public function gallery_image_add_edit(){
		$config['file_name'] = time();
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'jpg|gif|jpeg|png';
		// $config['max_size'] = 10000;
		// $config['max_width'] = 2024;
		// $config['max_height'] = 768;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->input->post('gallery_img_id')){$gallery_img_id = $this->input->post('gallery_img_id');}
		// if($this->input->post('cat_id')){$img_data['gallery_cat_id'] = $this->input->post('cat_id');}
		if($this->input->post('gallery_image_text')){$img_data['gallery_img_text'] = $this->input->post('gallery_image_text');}
		if($this->input->post('gallery_image_category')){$img_data['gallery_img_category'] = $this->input->post('gallery_image_category');}
		// print_r($_FILES['pic']);
		// die();

		if(isset($_FILES['pic'])){
			if ($this->upload->do_upload('pic')){
				$data = array('upload_data' => $this->upload->data());
				$img_data['gallery_img_link'] = $data['upload_data']['file_name'];
				if(!$this->input->post('gallery_img_id')){
					$img_data['gallery_img_status'] = 'active';
					$this->admin_model->insert_row_data('tbl_gallery', $img_data);
					$this->session->set_flashdata('flashmsg','Added Successfully!');
				}
				else{
					$this->admin_model->update_row_data('tbl_gallery', $img_data, array('gallery_img_id'=>$gallery_img_id));
					$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
				}
				$res['status'] = 'success';
			}
			else{
				$res['status'] = 'failed';
				$res['msg'] = 'Please enter a valid image!';
			}
		}
		else{
			if(!$this->input->post('gallery_img_id')){
				$res['status'] = 'failed';
				$res['msg'] = 'Please enter a valid image!';
			}
			else{
				$this->admin_model->update_row_data('tbl_gallery', $img_data, array('gallery_img_id'=>$gallery_img_id));
				$res['status'] = 'success';
				$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
			}
		}
		echo json_encode($res);
	}


	public function gallery_image_del(){
		$this->admin_model->update_row_data('tbl_gallery', array('gallery_img_status'=>'inactive'), array('gallery_img_id'=>$this->input->post('gallery_img_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}


	public function csr_section1_save(){
		$csr_section1_title = $this->input->post('csr_section1_title');
		$csr_section1_text = $this->input->post('csr_section1_text');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$csr_section1_title), array('element_target'=>'csr.php', 'element_title'=>'csr_section1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$csr_section1_text), array('element_target'=>'csr.php', 'element_title'=>'csr_section1_text'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}

	public function about_section1_save(){
		$about_section1_quote1 = $this->input->post('about_section1_quote1');
		$about_section1_quote2 = $this->input->post('about_section1_quote2');

		$about_section1_company_title = $this->input->post('about_section1_company_title');
		$about_section1_company_text = $this->input->post('about_section1_company_text');

		$about_section1_family_title = $this->input->post('about_section1_family_title');
		$about_section1_family_text = $this->input->post('about_section1_family_text');

		$about_section1_logo_title = $this->input->post('about_section1_logo_title');
		$about_section1_logo_text = $this->input->post('about_section1_logo_text');

		$about_section1_boldtext1 = $this->input->post('about_section1_boldtext1');
		$about_section1_boldtext2 = $this->input->post('about_section1_boldtext2');
		$about_section1_boldtext3 = $this->input->post('about_section1_boldtext3');

		$about_section1_mission_text = $this->input->post('about_section1_mission_text');
		$about_section1_vision_text = $this->input->post('about_section1_vision_text');
		$about_section1_values_text = $this->input->post('about_section1_values_text');

		$about_section1_value1_title = $this->input->post('about_section1_value1_title');
		$about_section1_value1_text = $this->input->post('about_section1_value1_text');

		$about_section1_value2_title = $this->input->post('about_section1_value2_title');
		$about_section1_value2_text = $this->input->post('about_section1_value2_text');

		$about_section1_value3_title = $this->input->post('about_section1_value3_title');
		$about_section1_value3_text = $this->input->post('about_section1_value3_text');

		$about_section1_value4_title = $this->input->post('about_section1_value4_title');
		$about_section1_value4_text = $this->input->post('about_section1_value4_text');

		$about_section1_value5_title = $this->input->post('about_section1_value5_title');
		$about_section1_value5_text = $this->input->post('about_section1_value5_text');

		$about_section1_value6_title = $this->input->post('about_section1_value6_title');
		$about_section1_value6_text = $this->input->post('about_section1_value6_text');

		$about_section1_value7_title = $this->input->post('about_section1_value7_title');
		$about_section1_value7_text = $this->input->post('about_section1_value7_text');



		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_quote1), array('element_target'=>'about.php', 'element_title'=>'about_section1_quote1'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_quote2), array('element_target'=>'about.php', 'element_title'=>'about_section1_quote2'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_company_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_company_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_company_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_company_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_family_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_family_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_family_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_family_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_logo_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_logo_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_logo_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_logo_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_boldtext1), array('element_target'=>'about.php', 'element_title'=>'about_section1_boldtext1'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_boldtext2), array('element_target'=>'about.php', 'element_title'=>'about_section1_boldtext2'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_boldtext3), array('element_target'=>'about.php', 'element_title'=>'about_section1_boldtext3'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_mission_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_mission_text'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_vision_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_vision_text'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_values_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_values_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value1_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value1_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value1_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value2_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value2_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value2_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value2_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value3_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value3_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value3_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value3_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value4_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value4_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value4_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value4_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value5_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value5_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value5_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value5_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value6_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value6_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value6_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value6_text'));

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value7_title), array('element_target'=>'about.php', 'element_title'=>'about_section1_value7_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$about_section1_value7_text), array('element_target'=>'about.php', 'element_title'=>'about_section1_value7_text'));

		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function culture_section1_save(){
		$culture_section1_title = $this->input->post('culture_section1_title');
		$culture_section1_text1 = $this->input->post('culture_section1_text1');
		$culture_section1_text2 = $this->input->post('culture_section1_text2');
		$culture_section1_text3 = $this->input->post('culture_section1_text3');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$culture_section1_title), array('element_target'=>'culture.php', 'element_title'=>'culture_section1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$culture_section1_text1), array('element_target'=>'culture.php', 'element_title'=>'culture_section1_text1'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$culture_section1_text2), array('element_target'=>'culture.php', 'element_title'=>'culture_section1_text2'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$culture_section1_text3), array('element_target'=>'culture.php', 'element_title'=>'culture_section1_text3'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}


	public function achievements_section1_save(){
		$achievements_section1_title = $this->input->post('achievements_section1_title');
		$achievements_section1_text1 = $this->input->post('achievements_section1_text1');
		$achievements_section1_text2 = $this->input->post('achievements_section1_text2');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$achievements_section1_title), array('element_target'=>'achievements.php', 'element_title'=>'achievements_section1_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$achievements_section1_text1), array('element_target'=>'achievements.php', 'element_title'=>'achievements_section1_text1'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$achievements_section1_text2), array('element_target'=>'achievements.php', 'element_title'=>'achievements_section1_text2'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}




























































































	//News Page Functions (OLD)//

	public function news_article_add_edit(){
		$config['file_name'] = time();
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'jpg|gif|jpeg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->input->post('art_id')){$art_id = $this->input->post('art_id');}
		if($this->input->post('art_title')){$art_data['art_title'] = $this->input->post('art_title');}
		if($this->input->post('art_date')){$art_data['art_date'] = $this->input->post('art_date');}
		if($this->input->post('art_block_text')){$art_data['art_block_text'] = $this->input->post('art_block_text');}
		if($this->input->post('art_main_text')){$art_data['art_main_text'] = $this->input->post('art_main_text');}

		// print_r($_FILES['pic']);
		// die();

		if(isset($_FILES['pic'])){
			if ($this->upload->do_upload('pic')){
				$data = array('upload_data' => $this->upload->data());
				$art_data['art_image'] = $data['upload_data']['file_name'];
				// if($pic_target=='desktop'){
				// 	$banner['pic_target'] = 'desktop';
				// }
				// else{
				// 	$banner['pic_target'] = 'mobile';
				// }
				if(!$this->input->post('art_id')){
					$this->admin_model->insert_row_data('tbl_article', $art_data);
					$this->session->set_flashdata('flashmsg','Added Successfully!');
				}
				else{
					$this->admin_model->update_row_data('tbl_article', $art_data, array('art_id'=>$art_id));
					$this->session->set_flashdata('flashmsg','Updated Successfully!');
				}
				$res['status'] = 'success';
			}
			else{
				$res['status'] = 'failed';
				$this->session->set_flashdata('flashmsg','Please enter a valid image!');
			}
		}
		else{
			if(!$this->input->post('art_id')){
				$res['status'] = 'failed';
				$this->session->set_flashdata('flashmsg','Please enter a valid image!');
			}
			else{
				$this->admin_model->update_row_data('tbl_article', $art_data, array('art_id'=>$art_id));
				$res['status'] = 'success';
				$this->session->set_flashdata('flashmsg','Updated Successfully!');
			}
		}
		echo json_encode($res);
	}

	public function news_article_edit_data(){
		$news_data = $this->admin_model->get_row_where_data('tbl_article', array('art_id'=>$this->input->post('art_id')));
		echo json_encode($news_data);
	}

	public function news_article_del(){
		$this->admin_model->update_row_data('tbl_article', array('art_status'=>'inactive'), array('art_id'=>$this->input->post('art_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}

	public function news_block_save(){
		$news_block_title = $this->input->post('news_block_title');
		$news_block_text = $this->input->post('news_block_text');

		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$news_block_title), array('element_target'=>'news.php', 'element_title'=>'news_block_title'));
		$this->admin_model->update_row_data('tbl_element', array('element_content'=>$news_block_text), array('element_target'=>'news.php', 'element_title'=>'news_block_text'));
		$this->session->set_flashdata('flashmsg','Updated Successfully!');
	}










































	//New Functions 19-05-2022//
	public function testimonial_image_add_edit(){
		// print_r($this->input->post());die();
		$config['file_name'] = time();
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = '*';
		// $config['max_size'] = 10000;
		// $config['max_width'] = 2024;
		// $config['max_height'] = 768;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->input->post('testimonial_id')){$testimonial_id = $this->input->post('testimonial_id');}
		if($this->input->post('testimonial_name')){$testimonial_data['testimonial_name'] = $this->input->post('testimonial_name');}
		if($this->input->post('testimonial_text')){$testimonial_data['testimonial_text'] = $this->input->post('testimonial_text');}

		if(isset($_FILES['testimonial_image'])){
			if ($this->upload->do_upload('testimonial_image')){
				$data = array('upload_data' => $this->upload->data());
				$testimonial_data['testimonial_image_link'] = $data['upload_data']['file_name'];
				if(!$this->input->post('testimonial_id')){
					$this->admin_model->insert_row_data('tbl_testimonial', $testimonial_data);
					$this->session->set_flashdata('flashmsg','Added Successfully!');
				}
				else{
					$this->admin_model->update_row_data('tbl_testimonial', $testimonial_data, array('testimonial_id'=>$testimonial_id));
					$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
				}
				$res['status'] = 'success';
			}
			else{
				$res['status'] = 'failed';
				$res['msg'] = 'Please enter a valid image!';
			}
		}
		else{
			if(!$this->input->post('testimonial_id')){
				$this->admin_model->insert_row_data('tbl_testimonial', $testimonial_data);
				$this->session->set_flashdata('flashmsg','Added Successfully!');
			}
			else{
				$this->admin_model->update_row_data('tbl_testimonial', $testimonial_data, array('testimonial_id'=>$testimonial_id));
				$res['status'] = 'success';
				$this->session->set_flashdata('flashmsg','Updated Successfully!'); 
			}
		}
		echo json_encode($res);
	}








	public function testimonial_edit_data(){
		$testimonial_data = $this->admin_model->get_row_where_data('tbl_testimonial', array('testimonial_id'=>$this->input->post('testimonial_id')));
		echo json_encode($testimonial_data);
	}






	public function testimonial_del(){
		$this->admin_model->update_row_data('tbl_testimonial', array('testimonial_status'=>'inactive'), array('testimonial_id'=>$this->input->post('testimonial_id')));
		$this->session->set_flashdata('flashmsg','Deleted Successfully!');
	}





}