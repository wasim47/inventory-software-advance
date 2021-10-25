<?php 

class Dashboard_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function validate($username,$password)
    {
       $this->db->where('a_username',$username);
	   $this->db->where('a_password',$password);
	   
	   $query=$this->db->get('administrator');
	   
	   if($query->num_rows()==1)
	   {
	   		$row=$query->row();
			
			$data=array(
				'a_id' => $row->a_id,
				'a_username' => $row->a_username,
				'a_password' => $row->a_password,
				'a_fullname' => $row->a_fullname,
				'a_designation' => $row->a_designation,
				'a_image' => $row->a_image,
				'a_createdate' => $row->a_createdate,
				'a_viewdate' => $row->a_viewdate,
				'validated' =>true
			);
			$this->session->set_userdata($data);
			return true;
	   }
	   return false;
	   
    }
	
	function product()
	{
		$query=$this->db->query("SELECT product.p_id,product.p_category,category.c_id,category.c_id,c_name FROM product LEFT JOIN category ON product.p_category=category.c_id GROUP BY product.p_category ORDER BY product.p_category");
		return $query->result();
	}
	
	
	function branch()
	{
	
		$uid=$this->session->userdata('store_id');
		$com_id=$this->session->userdata('com_id');
		$admin_id=$this->session->userdata('a_id');
		$showroom_id=$this->session->userdata('bh_admin_hub');
		
		
		$query=$this->db->query("SELECT * FROM business_hub WHERE bh_id!='$showroom_id' ORDER BY bh_name");
		return $query->result();
	}
	
	function store_admin()
	{
		$uid=$this->session->userdata('store_id');
		$query=$this->db->query("SELECT * FROM store_admin WHERE bh_admin_id!='$uid' ORDER BY bh_admin_name");
		return $query->result();
	}
	
	function company_admin()
	{
		$com_id=$this->session->userdata('com_id');
		$query=$this->db->query("SELECT * FROM store_acc WHERE bh_admin_id!='$com_id' ORDER BY bh_admin_name");
		return $query->result();
	}
	
	function admin()
	{
		$query=$this->db->query("SELECT * FROM administrator ORDER BY a_fullname");
		return $query->result();
	}
	
	function messagePost($data)
	{
		$this->db->insert('sendbox',$data);
		$this->db->insert('message',$data);
	}
	
	function messageCount()
	{
		$query=$this->db->query("SELECT * FROM message WHERE type='Administrator' AND status='1'");
		return $query->num_rows();
	}
	
	function messageCountUser()
	{
		$uid=$this->session->userdata('bh_admin_id');
		$result=$this->db->query("SELECT * FROM business_hub_admin WHERE bh_admin_id='$uid'");
		$rows=$result->row();
		$srid=$rows->bh_admin_hub;
		
		$query=$this->db->query("SELECT * FROM message WHERE type='Showroom' AND status='1' AND bid='$srid'");
		return $query->num_rows();
	}
	
	function messageCountStore()
	{
		$query=$this->db->query("SELECT * FROM message WHERE type='Store Administrator' AND status='1'");
		return $query->num_rows();
	}
	
	function messageCountCom()
	{
		$query=$this->db->query("SELECT * FROM message WHERE type='Company Office Account' AND status='1'");
		return $query->num_rows();
	}
	
	function hubCount()
	{
		$query=$this->db->query("SELECT * FROM business_hub");
		return $query->num_rows();
	}
	
	function productCount()
	{
		$query=$this->db->query("SELECT * FROM product");
		return $query->num_rows();
	}
	
	function categoryCount()
	{
		$query=$this->db->query("SELECT * FROM category");
		return $query->num_rows();
	}
	
	/*function stockPrize()
	{
		$query=mysql_query("SELECT * FROM admin_stock ORDER BY as_id");
		$aa=0;
		while($data=mysql_fetch_array($query)){
		$as_proid=$data['as_proid'];
		$as_qty=$data['as_qty'];
		
			$prize=mysql_query("SELECT * FROM product WHER p_id='$as_proid'");
			$r=mysql_fetch_array($prize);
			$p_pri=$r['p_prize'];
			
			$main=($as_qty * $p_pri);$aa=$aa + ($as_qty * $p_pri);
			
		}
		
		return $aa;
	}*/
}

?>