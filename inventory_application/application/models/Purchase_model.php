<?php 

class Purchase_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function get_data($search)
    {
		if($search!=""){
			$query=$this->db->query("SELECT * FROM product WHERE (product_name LIKE '%$search' OR product_name LIKE '$search%' OR product_name LIKE '%$search%') ORDER BY product_name");
			return $query->result();
		}
		else
		{
			$query=$this->db->query("SELECT * FROM product ORDER BY cat_id,product_name");
			return $query->result();
		}
	}
	
	function stock_pro($id)
	{
		$this->db->where('p_id',$id);
		
		$query=$this->db->get('product');
		return $query->result();
	}
	
	function stock_pro_stock($id)
	{
		$this->db->where('as_proid',$id);
		
		$query=$this->db->get('admin_stock');
		return $query->result();
	}
	
	function check_data()
	{
		$query=$this->db->query("SELECT * FROM product");
		return $query->num_rows();
	}
	
	function stock_check($product_id,$qty)
	{
		$query=mysql_query("SELECT * FROM admin_stock WHERE as_proid='$product_id'");
		$data=mysql_fetch_array($query);
		$qty1=$data['as_qty'];
		
		$mainqty=$qty1-$qty;
		
		if($qty1 < $qty)
		{
			return 0;
		}
		else
		{
			return 1;
		}
		
	}
	
	
	function stock_insert($product_id,$as_procatid,$as_qty,$as_challan,$as_date,$as_vd)
    {
		
		$uid=$this->session->userdata('a_id');
		
		$query=mysql_query("SELECT * FROM admin_stock WHERE as_proid='$product_id'");
		$data=mysql_fetch_array($query);
		$qty=$data['as_qty'];
		$as_proid12=$data['as_proid'];
		
		$mainqty=$qty +$as_qty;
		
		
		if($product_id==$as_proid12)
		{
			$update=mysql_query("UPDATE admin_stock SET as_qty='$mainqty' WHERE as_proid='$product_id'");
			
			$insert=mysql_query("INSERT INTO admin_stock_history VALUES('','$product_id','$uid','$as_procatid','$as_qty','$as_challan','Plus','$as_date','$as_vd')");
		}
		else
		{
			$insert=mysql_query("INSERT INTO admin_stock VALUES('','$product_id','$as_qty','$as_date','$as_vd')");
			
			$insert=mysql_query("INSERT INTO admin_stock_history VALUES('','$product_id','$uid','$as_procatid','$as_qty','$as_challan','Plus','$as_date','$as_vd')");
		}
	}
	
	
	
	function stock_update($product_id,$as_procatid,$as_qty,$as_challan,$as_date,$as_vd)
    {
		$uid=$this->session->userdata('a_id');
		
		$query=mysql_query("SELECT * FROM admin_stock WHERE as_proid='$product_id'");
		$data=mysql_fetch_array($query);
		$qty=$data['as_qty'];
		$as_proid12=$data['as_proid'];
		
		$mainqty=$qty-$as_qty;
		
		
		if($product_id==$as_proid12)
		{
			$update=mysql_query("UPDATE admin_stock SET as_qty='$mainqty' WHERE as_proid='$product_id'");
			
			$insert=mysql_query("INSERT INTO admin_stock_history VALUES('','$product_id','$uid','$as_procatid','$as_qty','$as_challan','Minus','$as_date','$as_vd')");
		}
	}
	
	/*
	================================ Report ============================
	*/
	
	function check_hub()
	{
		$query=$this->db->query("SELECT * FROM business_hub WHERE bh_publish='1' ORDER BY bh_name");
		return $query->result();
	}
	
	function invoice()
    {
		$query=mysql_query("SELECT inv_id FROM bh_invoice ORDER BY inv_id");
		$data=mysql_fetch_array($query);
		$inv_id=$data['inv_id'];
		
		if($inv_id=='')
		{
			$result=$inv_id +1;
		}
		
		return $result;
		
	}
	
	function ajaxData($idSelect)
	{
		
		$sql = "SELECT p_name FROM `product` WHERE p_name LIKE '".$idSelect."%'";
		$data=mysql_query($sql);
		$arrcnt = -1;
		$dataArray = array();
			while($temp = mysql_fetch_assoc($data)):
				foreach($temp as $key=>$val)
				 {
				$temp[$key] = stripslashes($val);
				$arrcnt++;
				  }
				$dataArray[$arrcnt] = $temp;
			endwhile;
			//return $dataArray ;
	
			foreach ($dataArray as $key => $value) {
		
				echo $value['supplier_name']."\n";
		
			}
		}
		
	function view_data()
	{
		$query=$this->db->query("SELECT product.*,category.c_id,category.c_name,admin_stock.as_proid,admin_stock.as_qty FROM product LEFT JOIN category ON product.p_category=category.c_id LEFT JOIN admin_stock ON product.p_id=admin_stock.as_proid ORDER BY category.c_id,product.p_name");
		return $query->result();
	}
}

?>