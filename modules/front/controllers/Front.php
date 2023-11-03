<?php
class Front extends MX_Controller{

	function __construct(){
		parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session','email','pagination','safe','upload'));
		$this->load->model('admin/admin_model');
	}


	function get_common_data(){
		$data['products_section1_pic_data_all'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'5', 'img_target_page'=>'products.php', 'img_status'=>'active'), null, null, 'img_id', 'asc', 'category');
		$data['future_products_all'] = $this->admin_model->get_rows_where_data('tbl_future_products', array('product_status'=>'active'));
		$data['contact_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'8', 'element_target'=>'contact.php'));
		return $data;
	}

	public function index(){
		$data = $this->get_common_data();
		// echo '<pre>';
		// print_r($data);
		// die();

		$data['active_page'] = 'home';

		$data['home_banner_desk_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'home_desk.php', 'img_status'=>'active'));
		$data['home_banner_mob_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'home_mob.php', 'img_status'=>'active'));
		$data['home_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'1', 'element_target'=>'home.php'));
		$data['home_section2_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'2', 'element_target'=>'home.php'));
		$data['home_timeline_data'] = $this->admin_model->get_rows_where_data('tbl_timeline', array('timeline_section'=>'2', 'timeline_target'=>'home.php', 'timeline_status'=>'active'),6,0,'timeline_year','DESC');
		// $data['home_section3_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'3', 'element_target'=>'home.php'));
		$data['home_section3_pic_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'3', 'img_target_page'=>'home_desk.php'));
		$data['home_section3_pic_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'3', 'img_target_page'=>'home_mob.php'));

		$this->load->view('home', $data);
	}


	public function leadership(){
		$data = $this->get_common_data();
		$data['active_page'] = 'leadership';

		$data['leadership_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'leadership_desk.php', 'img_status'=>'active'));
		$data['leadership_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'leadership_mob.php', 'img_status'=>'active'));
		$data['leadership_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'4', 'img_target_page'=>'leadership.php', 'img_status'=>'active'));
		
		$this->load->view('leadership', $data);
	}


	public function products(){
		$data = $this->get_common_data();
		$data['active_page'] = 'products';
		if($this->uri->segment(2)=='Primary_Product') $target = 'Primary Product';
        if($this->uri->segment(2)=='Allied_Products') $target = 'Allied Products';
        if($this->uri->segment(2)=='Value_added_Products') $target = 'Value added Products';
        if($this->uri->segment(2)=='Modified_Starches') $target = 'Modified Starches';

		$data['products_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_desk.php', 'img_status'=>'active'));
		$data['products_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_mob.php', 'img_status'=>'active'));
		$data['products_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'5', 'img_target_page'=>'products.php', 'img_status'=>'active', 'category'=>$target));
		

		$this->load->view('products', $data);
	}


	public function future_products(){
		$data = $this->get_common_data();
		$data['active_page'] = 'Future Products';

		$data['products_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_desk.php', 'img_status'=>'active'));
		$data['products_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'products_mob.php', 'img_status'=>'active'));
		
		$this->load->view('future_products', $data);
	}


	public function contact(){
		$data = $this->get_common_data();
		$data['active_page'] = 'contact';

		$data['contact_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'contact_desk.php', 'img_status'=>'active'));
		$data['contact_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'contact_mob.php', 'img_status'=>'active'));
		// $data['contact_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'8', 'element_target'=>'contact.php'));
		
		$this->load->view('contact', $data);
	}


	public function careers(){
		$data = $this->get_common_data();
		$data['active_page'] = 'careers';

		$data['careers_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'careers_desk.php', 'img_status'=>'active'));
		$data['careers_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'careers_mob.php', 'img_status'=>'active'));
		$data['careers_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'6', 'element_target'=>'careers.php'));
		$data['careers_section2_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'7', 'element_target'=>'careers.php'));
		$data['careers_job_data'] = $this->admin_model->get_rows_where_data('tbl_jobs', array('job_target_page'=>'careers.php', 'job_status'=>'active'));
		$data['careers_testimonial_data'] = $this->admin_model->get_rows_where_data('tbl_testimonial', array('testimonial_status'=>'active'));
		
		$this->load->view('careers', $data);
	}


	public function gallery(){
		$data = $this->get_common_data();
		$data['active_page'] = 'gallery';
		$page_limit = 4;
		$page_start_machines = 1;
		$page_start_people = 1;
		$category_target = 'machines';
		$row_start_people = 0;
		$row_start_machines = 0;
		$data['row_count_machines'] = $this->admin_model->row_count('tbl_gallery', array('gallery_img_status'=>'active', 'gallery_img_category'=>'Machines'));
		$data['row_count_people'] = $this->admin_model->row_count('tbl_gallery', array('gallery_img_status'=>'active', 'gallery_img_category'=>'People'));
		if(!empty($this->uri->segment(3)) && !empty($this->uri->segment(2))) {
			$page_start_machines = $this->uri->segment(3);
			$page_start_people = $this->uri->segment(3);
			$category_target = $this->uri->segment(2);
			$row_start_people = $page_limit*($page_start_people-1);
			$row_start_machines = $page_limit*($page_start_machines-1);
			if($this->uri->segment(2)=='machines') { $row_start_people = 0; $page_start_people=1; }
			if($this->uri->segment(2)=='people') { $row_start_machines = 0; $page_start_machines=1; }
		}
		$data['total_pages_machines'] = ceil($data['row_count_machines']/$page_limit);
		$data['total_pages_people'] = ceil($data['row_count_people']/$page_limit);

		$data['page_start_machines'] = $page_start_machines;
		$data['page_start_people'] = $page_start_people;

		// $row_count_machines = $this->admin_model->row_count('tbl_gallery', array('gallery_img_status'=>'active', 'gallery_img_category'=>'Machines'));
		// $config['base_url'] = base_url().'gallery/machines';
		// $config['total_rows'] = $row_count_machines;
		// $config['per_page'] = $page_limit;

		// $config['full_tag_open'] = "<ul class='pagination list--reset'>";
	 //    $config['full_tag_close'] = '</ul>';
	 //    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['num_tag_close'] = '</span></li>';
	 //    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
	 //    $config['cur_tag_close'] = '</span></li>';
	 //    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['prev_tag_close'] = '</span></li>';
	 //    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['first_tag_close'] = '</span></li>';
	 //    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['last_tag_close'] = '</span></li>';
	 //    $config['prev_link'] = 'Previous';
	 //    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['prev_tag_close'] = '</span></li>';
	 //    $config['next_link'] = 'Next';
	 //    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['next_tag_close'] = '</span></li>';

	 //    $this->pagination->initialize($config);
		// $data['machines_links'] = $this->pagination->create_links();


		// $row_count_people = $this->admin_model->row_count('tbl_gallery', array('gallery_img_status'=>'active', 'gallery_img_category'=>'People'));
		// $config2['base_url'] = base_url().'gallery/people';
		// $config2['total_rows'] = $row_count_people;
		// $config2['per_page'] = $page_limit;

		// $config2['full_tag_open'] = "<ul class='pagination list--reset'>";
	 //    $config2['full_tag_close'] = '</ul>';
	 //    $config2['num_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['num_tag_close'] = '</span></li>';
	 //    $config2['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
	 //    $config2['cur_tag_close'] = '</span></li>';
	 //    $config2['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['prev_tag_close'] = '</span></li>';
	 //    $config2['first_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['first_tag_close'] = '</span></li>';
	 //    $config2['last_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['last_tag_close'] = '</span></li>';
	 //    $config2['prev_link'] = 'Previous';
	 //    $config2['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['prev_tag_close'] = '</span></li>';
	 //    $config2['next_link'] = 'Next';
	 //    $config2['next_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config2['next_tag_close'] = '</span></li>';

	 //    $this->pagination->initialize($config2);
		// $data['people_links'] = $this->pagination->create_links();


		// if($this->session->userdata('cat_id') && $this->session->userdata('cat_id')!='all'){
		// 	$cat_id = $this->session->userdata('cat_id');
		// }
		// else{
		// 	$cat_id = null;
		// 	$this->session->set_userdata(array('cat_id'=>'all'));
		// }

		// $row_count = $this->admin_model->row_count('tbl_gallery', array('gallery_img_status'=>'active'));
		// $config['base_url'] = base_url().'gallery';
		// $config['total_rows'] = $row_count;
		// $config['per_page'] = $page_limit;

		// $config['full_tag_open'] = "<ul class='pagination list--reset'>";
	 //    $config['full_tag_close'] = '</ul>';
	 //    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['num_tag_close'] = '</span></li>';
	 //    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
	 //    $config['cur_tag_close'] = '</span></li>';
	 //    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['prev_tag_close'] = '</span></li>';
	 //    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['first_tag_close'] = '</span></li>';
	 //    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['last_tag_close'] = '</span></li>';
	 //    $config['prev_link'] = 'Previous';
	 //    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['prev_tag_close'] = '</span></li>';
	 //    $config['next_link'] = 'Next';
	 //    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
	 //    $config['next_tag_close'] = '</span></li>';

	 //    $this->pagination->initialize($config);
		// $data['links'] = $this->pagination->create_links();

		$data['gallery_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'gallery_desk.php', 'img_status'=>'active'));
		$data['gallery_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'gallery_mob.php', 'img_status'=>'active'));
		// $data['gallery_cat_data'] = $this->admin_model->get_rows_where_data('tbl_gallery_category', array('cat_status'=>'active'));
		$data['gallery_image_data_machines'] = $this->admin_model->get_gallery_data(null,null,$page_limit,$row_start_machines, 'Machines');
		$data['gallery_image_data_people'] = $this->admin_model->get_gallery_data(null,null,$page_limit,$row_start_people, 'People');
		
		$data['category_target'] = $category_target;

		$this->load->view('gallery', $data);
	}


	public function set_cat(){
		$res_html = '';
		$gallery_image_data = $this->admin_model->get_gallery_data($this->input->post('cat_id'));
		foreach ($gallery_image_data as $key => $val) {
			$res_html .= '<div class="col-md-6">
	                        <a href="'.base_url().'uploads/'.$val->gallery_img_link.'" class="img-pop-up">
	                          <div class="single-gallery-image" style="background: url('.base_url().'uploads/'.$val->gallery_img_link.');"></div>
	                        </a>
	                      </div>';
		}
		echo $res_html;
	}


	public function csr(){
		$data = $this->get_common_data();
		$data['active_page'] = 'CSR';
		$page_limit = 4;
		$page_start = $this->uri->segment(2);
		if(empty($page_start)){$page_start=0;}

		$data['csr_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'csr_desk.php', 'img_status'=>'active'));
		$data['csr_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'csr_mob.php', 'img_status'=>'active'));
		$data['csr_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'9', 'element_target'=>'csr.php'));
		// $data['csr_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'9', 'img_target_page'=>'csr.php', 'img_status'=>'active'));
		$data['csr_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'9', 'img_target_page'=>'csr.php', 'img_status'=>'active'), $page_limit, $page_start,'img_id','DESC');
		
		$row_count = $this->admin_model->row_count('tbl_images', array('img_section'=>'9', 'img_target_page'=>'csr.php', 'img_status'=>'active'));
		$config['base_url'] = base_url().'csr';
		$config['total_rows'] = $row_count;
		$config['per_page'] = $page_limit;

		$config['full_tag_open'] = "<ul class='pagination list--reset'>";
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['num_tag_close'] = '</span></li>';
	    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
	    $config['cur_tag_close'] = '</span></li>';
	    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['prev_tag_close'] = '</span></li>';
	    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['first_tag_close'] = '</span></li>';
	    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['last_tag_close'] = '</span></li>';
	    $config['prev_link'] = 'Previous';
	    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['prev_tag_close'] = '</span></li>';
	    $config['next_link'] = 'Next';
	    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
	    $config['next_tag_close'] = '</span></li>';

	    $this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		$this->load->view('csr', $data);
	}


	public function about(){
		$data = $this->get_common_data();
		$data['active_page'] = 'about';

		$data['about_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'about_desk.php', 'img_status'=>'active'));
		$data['about_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'about_mob.php', 'img_status'=>'active'));
		$data['about_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'10', 'element_target'=>'about.php'), null, null, 'element_id', 'asc');
		$data['about_section1_pic_data'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'10', 'img_target_page'=>'about.php', 'img_status'=>'active'));
		
		$this->load->view('about', $data);
	}


	public function culture(){
		$data = $this->get_common_data();
		$data['active_page'] = 'culture';

		$data['culture_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'culture_desk.php', 'img_status'=>'active'));
		$data['culture_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'culture_mob.php', 'img_status'=>'active'));
		$data['culture_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'11', 'element_target'=>'culture.php'));
		
		$this->load->view('culture', $data);
	}


	public function achievements(){
		$data = $this->get_common_data();
		$data['active_page'] = 'achievements';

		$data['achievements_banner_data_desk'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'achievements_desk.php', 'img_status'=>'active'));
		$data['achievements_banner_data_mob'] = $this->admin_model->get_rows_where_data('tbl_images', array('img_section'=>'0', 'img_target_page'=>'achievements_mob.php', 'img_status'=>'active'));
		$data['achievements_section1_data'] = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'12', 'element_target'=>'achievements.php'));
		
		$this->load->view('mission', $data);
	}


	public function send_email(){
		$contact_data = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'8', 'element_target'=>'contact.php', 'element_title'=>'contact_section1_email'));
		$to_emails = explode(',', $contact_data[0]->element_content);

		//Receiver Mail//
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to($to_emails);
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('message'));
		$this->email->send();

		//Sender Mail//
		$this->email->from($to_emails[0]);
		$this->email->to($this->input->post('email'));
		$this->email->subject('Regaal Resources Pvt. Ltd.');
		$this->email->message('Thank you for contacting us, we will get back to you soon.');
		$this->email->send();

		$this->session->set_userdata(array('mail_status'=>'yes'));

		// redirect('contact');
	}

	public function send_email_careers(){
		$config['file_name'] = time();
		$config['upload_path'] = 'attachments/';
		$config['allowed_types'] = 'jpg|gif|jpeg|png|pdf|doc|docx';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$careers_data = $this->admin_model->get_rows_where_data('tbl_element', array('element_section'=>'7', 'element_target'=>'careers.php', 'element_title'=>'careers_section2_email'));
		$to_emails = explode(',', $careers_data[0]->element_content);
		// print_r($_FILES['attach']);

		//Sender Mail//
		$this->email->from($to_emails[0]);
		$this->email->to($this->input->post('email'));
		$this->email->subject('Regaal Resources Pvt. Ltd.');
		$this->email->message('Thank you for applying for the job, we will get back to you soon.');
		$this->email->send();

		//Receiver Mail//
		$msg_html = '<h3>Job Application Details:</h3>
					<p><strong>Name: </strong>'.$this->input->post('name').'</p>
					<p><strong>Email: </strong>'.$this->input->post('email').'</p>
					<p><strong>Contact Number: </strong>'.$this->input->post('number').'</p>
					<p><strong>Position Applied For: </strong>'.$this->input->post('job').'</p>
					<p><strong>Date: </strong>'.date('d-M-Y').'</p>';

		$this->email->set_mailtype("html");
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to($to_emails);
		$this->email->subject('New Job Application');
		$this->email->message($msg_html);
		if(isset($_FILES['attach'])){
			if ($this->upload->do_upload('attach')){
				$data = array('upload_data' => $this->upload->data());
				$attach = $data['upload_data']['file_name'];
				$this->email->attach(base_url().'attachments/'.$attach);
			}
		}
		$this->email->send();

		$this->session->set_userdata(array('mail_status'=>'yes'));

		// redirect('careers');
	}


}