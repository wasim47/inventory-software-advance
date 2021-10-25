<?php
/*$db = new PDO('mysql:host=localhost;dbname=wellshop_bangla;charset=utf8mb4', 'root', '');
	$stmt = $db->query('SELECT * FROM table');
	$row_count = $stmt->rowCount();
	echo $row_count.' rows selected';
	
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo $row['field1'].' '.$row['field2']; //etc...
	}
	foreach($db->query('SELECT * FROM table') as $row) {
    	echo $row['field1'].' '.$row['field2']; //etc...
	}
	*/
function proNameFunc($pid){
	$db = new PDO('mysql:host=localhost;dbname=wellshop_bangla;charset=utf8mb4', 'root', '');
	  $ordproductquery=$db->query("select * from orders_products where order_id='$pid' order by id asc");
	  foreach($ordproductquery as $ordpro){
		  $product_id=$ordpro['product_id'];

	   	  $productquery=$db->query("select * from product where product_id='".$product_id."' order by product_id asc");
		  foreach($productquery as $pro);
		  echo $pro['product_name'].'<br>';
	  }
}

function proQtyFunc($pid){
	$db = new PDO('mysql:host=localhost;dbname=wellshop_bangla;charset=utf8mb4', 'root', '');
	  $ordproductquery=$db->query("select * from orders_products where order_id='$pid' order by id asc");
	  foreach($ordproductquery as $ordpro){
		  echo $ordpro['qty'].'<br>';
	  }
}


function proCodeFunc($pid){
	  $db = new PDO('mysql:host=localhost;dbname=wellshop_bangla;charset=utf8mb4', 'root', '');
	  $ordproductquery=$db->query("select * from orders_products where order_id='$pid' order by id asc");
	  foreach($ordproductquery as $ordpro){
		  $product_id=$ordpro['product_id'];
		  
	   	  $productquery=$db->query("select * from product where product_id='".$product_id."' order by product_id asc");
		  foreach($productquery as $pro);
		  echo $pro['pro_code'].'<br>';
	  }
}



function supplierFunc($pid){
	$db = new PDO('mysql:host=localhost;dbname=wellshop_bangla;charset=utf8mb4', 'root', '');
	  $ordproductquery=$db->query("select * from orders_products where order_id='$pid' order by id asc");
	  foreach($ordproductquery as $ordpro){
		  $supplier_id=$ordpro['supplier'];
		  
		$supplierquery=$db->query("select * from supplier where user_id ='".$supplier_id."' order by user_id desc");
		  foreach($supplierquery as $supp);
			echo $supp['username'].'<br>';
	  }
}
?>

<div class="container">
                             <table class="table table-striped" width="100%">
                                            <tr bgcolor="#ccc">
                                              <th width="23%" height="34" align="left">Product Name</th>
                                              <th width="13%" height="34" align="left">Product Code</th>
                                               <th width="13%" align="left">Quantity</th>
                                              <th width="10%" height="34" align="left">Order No</th>
                                              <th width="10%" height="34" align="left">Invoice No</th>
                                              <th width="15%" align="left">Supplier</th>
                                              <th width="16%" colspan="2" align="right">Invoice Total</th>
                                            </tr>
                                            <?php
                                            $i=0;
                                            $costCount = 0;
											
                                            foreach($datewisOrder->result() as $payrow){
											 
											  //$today=date('Y-m-d');
											  $invoicequery=$this->db->query("select * from invoice where order_id='".$payrow->order_id."' order by inv_id desc");
											  foreach($invoicequery->result() as $inv);
											  $inv_id=$inv->inv_id;
																											  
                                            if($i%2==0){
                                                $clr='#fff';
                                            }
                                            else{
                                                $clr='#eaeaea';
                                            }
                                            $i++;
                                            
                                            ?>
                                            
                                            
                                            <tr bgcolor="<?php echo $clr;?>">
                                                <td height="31" align="left"><?php proNameFunc($payrow->order_id);?></td>
                                              <td align="left"><?php proCodeFunc($payrow->order_id);?></td>
                                               <td align="left"><?php proQtyFunc($payrow->order_id);?></td>
                                                <td align="left"><?php echo $payrow->order_number;?></td>
                                                <td align="left"><?php echo $payrow->inv_id;?></td>
                                                <td align="left"><?php supplierFunc($payrow->order_id);?></td>
                                                <td colspan="2" align="center" valign="bottom" style="bottom:0;"><?php echo $payrow->total_price; ?></td>
                               </tr>
                                            
                                            <?php
                                            $costCount = $costCount + $payrow->total_price;
                                            }	
                                            
                                            ?>
                                            
                                             <tr>
                                                 <th align="right" colspan="8">
                                                 <div style="float:right; font-size:18px">Total Amount = <?php echo 'TK '.number_format($costCount,2,'.',',').' /=';?></div></th>
                                              </tr>
                                            </table>
                            </div>