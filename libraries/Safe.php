<?php
class Safe
{
	function current_date()
	{
		date_default_timezone_set('Asia/Kolkata');
	    return date('Y-m-d');
	}

	function current_month()
	{
		date_default_timezone_set('Asia/Kolkata');
	    $monthNo = date('m');
	    return $monthNo;
	}

	function pagination_config()
	{
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        return $config;
	}

	function pagination_per_page_limit()
	{
		return 12;
	}

	function image_src(){
		return 'uploads/';
	}
	
}
