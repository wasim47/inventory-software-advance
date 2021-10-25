<script type="text/javascript">
function update_status(pid){
/*var status = document.getElementById("status"+id).value;
window.location.href='<?php echo base_url();?>ouradminmanage/update_status?status='+status+"&&id="+pid+"&&table="+'orders';*/
		
		var invoiceid = document.getElementById("invoiceid").value;
		
		var status = document.getElementById("status"+pid).value;
		var order_number = document.getElementById("order_number"+pid).value;
		var customer_id = document.getElementById("customer_id"+pid).value;
		var total_price = document.getElementById("total_price"+pid).value;
		var shipping_id = document.getElementById("shipping_id"+pid).value;
		var pay_id = document.getElementById("pay_id"+pid).value;

		//alert(shipping_id);
		$.ajax({
			   type: "GET",
			   url: '<?php echo base_url()?>ouradminmanage/update_status',
			   //data: "status="+pid,
				data: {
					status : status,
					table  : 'orders',
					order_number : order_number,
					customer_id : customer_id,
					total_price : total_price,
					shipid : shipping_id,
					payid : pay_id,
					id : pid
				},
			   success: function() {
				  alert("Successfully saved");
				  if(status=="Successfull Delivery"){
				  	window.location.href="<?php echo base_url();?>ouradminmanage/invoice/"+invoiceid;
				  }
				},
				error: function() {
				  alert("There was an error. Try again please!");
				}
		 });
}
</script>
<div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Order Details</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">




    





                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="float:left">Total Order (<?php echo $order_list->num_rows();?>)</h2>
                                   
                                    <div class="clearfix"></div>
                                    
                                   
                                </div>
                                <div class="x_content">
                                <div style="width:100%"><?php echo $this->session->flashdata('successMsg');?></div>
                                <div class="container">
                                  <table width="100%" cellpadding="2" cellspacing="1" class="table_round">
          
          <tr>
            <td width="37" height="36" align="center" bgcolor="#e5e5e5"class="table_header"><span class="style2">SI</span></td>
            <td width="119" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Order </span></td>
            <td width="184" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Bill To</span></td>
            <td width="169" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Ship To</span></td>
            <td width="234" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Order On</span></td>
            <td width="278" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Status</span></td>
            <td width="137" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Total Price</span></td>
            <td width="99" align="center" bgcolor="#e5e5e5" class="table_header">&nbsp;</td>
            </tr>
          <?php
		  $i=0;
  foreach($order_list->result() as $rowq){
  $order_id=$rowq->order_id;
  $order_number=$rowq->order_number;
  $order_time=$rowq->order_time;
  $customer_id=$rowq->customer_id;
  $status=$rowq->status;
  $total_price=$rowq->total_price;
  
  
  if($status=="Successfull Delivery"){
  		$disable = 'disabled="disabled"';
		$bgco = '#009900';
  }
  elseif($status=="Processing"){
  		$disable = '';
		$bgco = '#330099';
  }
  elseif($status=="Cancelled"){
  		$disable = '"';
		$bgco = '#ff0000';
  }
  elseif($status=="Pending"){
  		$disable = '';
		$bgco = '#FFCC00';
  }
  
  $customerQ=$this->db->query("select * from customer where user_id='$customer_id'");
  if($customerQ->num_rows()>0){
	  $rowCCount=$customerQ->result();
	  foreach($rowCCount as $rowc);
	  $check_id=$rowc->user_id;
	  $name=$rowc->name;
  }
  else{
      $check_id='';
	  $name='';
  }
  
  $shipping=$this->db->query("select * from shipping_address where customer_id='$customer_id'");
  $rowSCount=$shipping->result();
  foreach($rowSCount as $rows);
  $shipping_id=$rows->ship_id;
  $names=$rows->name;
  
  $payment=$this->db->query("select * from payment_info where order_id='$order_id'");
  $rowPCount=$payment->result();
  foreach($rowPCount as $rowp);
  $pay_id=$rowp->pay_id;
  
  
	if($i%2!=0)
	{
	$c="#f5f5f5";
	}
	else
	{
	$c="#FFFFFF";
	}
	$i++;
	?>
    
    <input type="hidden" name="order_number" value="<?php echo $order_number;?>" id="order_number<?php echo $order_id;?>" />
    <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>" id="customer_id<?php echo $order_id;?>" />
    <input type="hidden" name="total_price" value="<?php echo $total_price;?>" id="total_price<?php echo $order_id;?>" />
    <input type="hidden" name="shipping_id" value="<?php echo $shipping_id;?>" id="shipping_id<?php echo $order_id;?>" />
    <input type="hidden" name="pay_id" value="<?php echo $pay_id;?>" id="pay_id<?php echo $order_id;?>" />
        
		 <tr class="table_hover" bgcolor="<?php echo $c; ?>" >
            <td height="44" align="center"><h6><?php echo $i;?></h6></td>
            <td align="left" class="section"><h6><?php echo $order_number;?></h6></td>
            <td align="left" class="section"><h6><?php echo $name;?></h6></td>
            <td align="center" class="section"><h6><?php echo $names;?></h6></td>
            <td align="left" class="section"><h6><?php echo $order_time;?></h6></td>
            <td align="center" valign="middle" class="section">
		  <select name="status" id="status<?php echo $order_id;?>" class="form-control" style="width:60%;border:1px solid <?php echo $bgco;?>; color:<?php echo $bgco;?>; float:left; margin:3px;" <?php echo $disable;?>>
                	<option value="<?php echo $status;?>"><?php echo $status;?></option>
                    <option value="Processing">Processing</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Successfull Delivery">Successfull Delivery</option>
                </select>
 		<button type="button" onclick="update_status(<?php echo $order_id;?>);" class="btn btn-primary" style="padding:5px; font-size:12px;" <?php echo $disable;?>>Save</button>            </td>
            <td align="center" class="section"><h6>TK&nbsp;<?php echo $total_price;?></h6></td>
            <td align="left" class="section">
            	<a href="<?php echo base_url();?>ouradminmanage/view_order/<?php echo $order_id;?>" class="btn btn-primary" style="padding:5px; font-size:12px;">View Order</a>
            </td>
		    </tr>
          <?php
  }
  ?>
        </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
                
          <?php
           	  $invoicequery=$this->db->query("select * from invoice order by inv_id desc limit 1");
			  foreach($invoicequery->result() as $inv);
			  $inv_id=$inv->inv_id;
		   ?>
           <input type="hidden" id="invoiceid" value="<?php echo $inv_id;?>"/>