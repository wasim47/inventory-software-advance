<?php 

class Requi_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function re_count()
	{
		$query=$this->db->query("SELECT * FROM requ_invoice");
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