 <?php
class Admin_model extends CI_Model{
	public function insert_row_data($table_name,$data)
	{
		$query = $this->db->insert($table_name,$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function get_max_id($table_name,$column_name){
		$this->db->select_max($column_name);
		$query = $this->db->get($table_name);
		return $query->row_array();
	}

	public function get_data($table_name){
		$query = $this->db->get($table_name);
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
	}

	public function get_column_data($table_name,$column_name){
		$this->db->select($column_name);
		$query = $this->db->get($table_name);
		$num = $query->num_rows();
		if($num>0){
			$codes = [];
			foreach ($query->result() as $key => $val) {
				$codes[] = $val->applicant_code;
			}
			return $codes;
		}
	}

	public function get_row_where_data($table_name,$data){
		$query = $this->db->get_where($table_name,$data);
		$num = $query->num_rows();
		if($num>0){
			return $query->row();
		}
	}

	public function get_rows_where_data($table_name=null,$data=null,$limit=null,$start=null,$orderby=null,$ordertype=null,$groupBy=null){
		$this->db->limit($limit,$start);
		$this->db->order_by($orderby,$ordertype);
		if($groupBy) $this->db->group_by($groupBy);
		$query = $this->db->get_where($table_name,$data);
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
	}

	public function update_row_data($table_name,$data,$where_val){
		$this->db->where($where_val);
		$query = $this->db->update($table_name,$data);
		return $query;
	}

	public function row_count($table_name,$where_val){
		$this->db->where($where_val);
		$query = $this->db->get($table_name);
		$num = $query->num_rows();
		return $num;
	}

	public function get_search_data($table_name,$target_col,$search_text,$where_val=false){
		$this->db->from($table_name);
		$this->db->like($target_col, $search_text, 'after');
		$this->db->where($where_val);
		$search_data = $this->db->get();
		return $search_data->result();
	}
 












	public function get_gallery_data($cat_id=null,$where_data=null,$limit=null,$start=null,$category=null){
		$this->db->from('tbl_gallery')
		         // ->join('tbl_gallery_category', 'tbl_gallery_category.cat_id = tbl_gallery.gallery_cat_id')
		         ->where(array('gallery_img_status'=>'active'))
				 ->limit($limit,$start);
		if($category){
			$this->db->where(array('gallery_img_category'=>$category));
		}
		$this->db->order_by('gallery_img_id', 'asc');
		$query = $this->db->get();
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
	}






























	public function getDataLeaderboard($table_name=null,$data=null,$orderby=null){
		$sql="SELECT applicant.name as applicantName,
		applicant.gender,team.name as name,
		sum(CASE When daily_activity.running!=0 Then daily_activity.running_duration Else 0 End) as running_duration,
		sum(CASE When daily_activity.cycling!=0 Then daily_activity.cycling_duration Else 0 End) as cycling_duration,
		sum(CASE When daily_activity.swimming!=0 Then daily_activity.swimming_duration Else 0 End) as swimming_duration,
		sum(daily_activity.running) as trunning,sum(daily_activity.cycling) as tcycling,sum(daily_activity.swimming) as tswimming,(sum(daily_activity.running)+sum(daily_activity.cycling)+sum(daily_activity.swimming)) as total,
		sum(CASE When daily_activity.distance!=0 Then daily_activity.duration Else 0 End) as total_duration
		FROM `daily_activity`
		join applicant on applicant.applicant_code=daily_activity.applicant
		join team on team.teamcode=applicant.team";


		$sql.=" where `activity_status`='".$data['activity_status']."' and applicant.status='active' ";
		if(isset($data['gender'])){
			$sql.="and `gender`='".$data['gender']."' ";
		}

		$sql.=" group by `applicant` ";

		if($orderby=='0'){
			$sql.="ORDER BY total DESC, total_duration ASC";
		}else{
			if($orderby=='running'){
				$or='trunning';
				$or2='running_duration';
			}else if($orderby=='cycling'){
				$or='tcycling';
				$or2='cycling_duration';
			}else  if($orderby=='swimming'){
				$or='tswimming';
				$or2='swimming_duration';
			}
			$sql.="ORDER BY ".$or." DESC, ".$or2." ASC";
		}


		$query = $this->db->query($sql);
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
	}




	public function getProfileTotal($table_name=null,$where_val=null){
		$sql="SELECT 
		sum(daily_activity.running) as trunning,sum(daily_activity.cycling) as tcycling,sum(daily_activity.swimming) as tswimming,(sum(daily_activity.running)+sum(daily_activity.cycling)+sum(daily_activity.swimming)) as total
		FROM `daily_activity`
		join applicant on applicant.applicant_code=daily_activity.applicant
		join team on team.teamcode=applicant.team";


		$sql.=" where daily_activity.applicant='".$where_val['applicant']."' ";


		$query = $this->db->query($sql);
		$num = $query->num_rows();
		if($num>0){
			return $query->row_array();
		}
	}










	public function getDataLeaderboard_team($table_name=null,$data=null,$orderby=null){
		$sql="SELECT team.name as teamname, team.teamcode,
		sum(daily_activity.running) as trunning,sum(daily_activity.cycling) as tcycling,sum(daily_activity.swimming) as tswimming,(sum(daily_activity.running)+sum(daily_activity.cycling)+sum(daily_activity.swimming)) as total
		FROM `daily_activity`
		join applicant on applicant.applicant_code=daily_activity.applicant and applicant.status='active'
		join team on team.teamcode=applicant.team where `activity_status`='approved' group by `team`.`name` ORDER BY total desc";

		$query = $this->db->query($sql);
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
	}






	public function checkExide($where){
		$this->db->select('sum(running');
		$this->db->from('daily_activity');
		$this->db->where('daily_activity');
		$this->db->get();
		return $query->row();

	}
}