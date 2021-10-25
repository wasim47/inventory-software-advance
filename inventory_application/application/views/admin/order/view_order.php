<script type="text/javascript">
function update_status(pid){
/*var status = document.getElementById("status"+id).value;
window.location.href='<?php echo base_url();?>ouradminmanage/update_status?status='+status+"&&id="+pid+"&&table="+'orders';*/
		
		var invoiceid = document.getElementById("invoiceid").value;
		//alert(invoiceid);
		var status = document.getElementById("status").value;
		var order_number = document.getElementById("order_number").value;
		var customer_id = document.getElementById("customer_id").value;
		var total_price = document.getElementById("total_price").value;
		var shipping_id = document.getElementById("shipping_id").value;
		var pay_id = document.getElementById("pay_id").value;
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


 <?php
  foreach($order_q->result() as $rowq);
  $order_id=$rowq->order_id;
  $order_number=$rowq->order_number;
  $order_time=$rowq->order_time;
  $customer_id=$rowq->customer_id;
  $status=$rowq->status;
  $total_price=$rowq->total_price;
  
  foreach($customerQ->result() as $rowc);
  $customer_id=$rowc->user_id;
  $acc_email=$rowc->email;
  $acc_contact=$rowc->mobile;
  $acc_name=$rowc->username;
  $acc_address=$rowc->address;
  
  foreach($shipping->result() as $rows);
  $shipping_id=$rows->ship_id;
  $ship_name=$rows->name;
  $ship_address=$rows->address;
  $ship_contact=$rows->contact;
  $ship_email=$rows->email;
  $ship_locality=$rows->locality;
  $ship_city=$rows->city;
  
  if($payment->num_rows() > 0){
	  foreach($payment->result() as $rowp);  
	  $pay_method=$rowp->pay_method;
	  $payId=$rowp->pay_id;
  }
  else{
	  $pay_method="";
	  $payId='';
	 }
?>



<?php
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
  
	?>
    
    <input type="hidden" name="order_number" value="<?php echo $order_time;?>" id="order_number" />
    <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>" id="customer_id" />
    <input type="hidden" name="total_price" value="<?php echo $total_price;?>" id="total_price" />
    <input type="hidden" name="shipping_id" value="<?php echo $shipping_id;?>" id="shipping_id" />
    <input type="hidden" name="pay_id" value="<?php echo $payId;?>" id="pay_id" />
    
    
<div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Order Details</h3>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">




    





                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="float:right">
                                    <?php echo form_open('ouradminmanage/new_invoice','name="ordersubmitform" id="ordersubmitform"');?>
                                     <input type="hidden" name="order_id" id="order_id" value="<?php echo $order_id;?>" />
                                     <input type="hidden" name="orderNumber" id="orderNumber" value="<?php echo $order_number;?>" />
                                     <input type="hidden" name="cust_id" id="cust_id" value="<?php echo $customer_id;?>" />
                                     <input type="hidden" name="ship_id" id="ship_id" value="<?php echo $shipping_id;?>" />
                                     <input type="hidden" name="payId" id="payId" value="<?php echo $payId;?>" />
                                     <input type="submit" name="invoiceCreate" id="invoiceCreate" value="Get Invoice"class="btn btn-primary" />
                                    <?php echo form_close();?>
                                    </h2>
                                    <div class="clearfix"></div>
                                    
                                   
                                </div>
                                <div class="x_content">
                                <div style="width:100%"><?php echo $this->session->flashdata('failedMsg');?></div>
                                <div class="container">
                                  <table width="100%" border="0" cellspacing="3" cellpadding="3">
                                      <tr>
                                        <td width="26%"><h3>Account Info</h3></td>
                                        <td width="2%">&nbsp;</td>
                                        <td width="33%"><h3>Customer Information</h3></td>
                                        <td width="2%">&nbsp;</td>
                                        <td width="36%"><h3>Shipping Address</h3></td>
                                        <td width="1%">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td height="43" valign="top">
                                            <table width="98%" border="0" cellspacing="1" cellpadding="1">
                                              <tr>
                                                <td><?php echo $acc_name;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $acc_email;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $acc_contact;?></td>
                                              </tr>
                                            </table>    </td>
                                        <td>&nbsp;</td>
                                        <td valign="top">
                                            <table width="98%" border="0" cellspacing="1" cellpadding="1">
                                              <tr>
                                                <td><?php echo $acc_name;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $acc_address;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $acc_email;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $acc_contact;?></td>
                                              </tr>
                                            </table>    </td>
                                        <td>&nbsp;</td>
                                        <td valign="top">
                                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                              <tr>
                                                <td><?php echo $ship_name;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $ship_address;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $ship_locality.' , '.$ship_city;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $ship_email;?></td>
                                              </tr>
                                              <tr>
                                                <td><?php echo $ship_contact;?></td>
                                              </tr>
                                            </table>    </td>
                                        <td>&nbsp;</td>
                                      </tr>
                                     <tr>
                                        <td colspan="6">&nbsp;</td>
                                      </tr> 
                                     <tr>
                                        <td><h3>Order Status</h3></td>
                                        <td>&nbsp;</td>
                                        <td><h3>Payment Method</h3></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td valign="top">
                                            <select name="status" id="status" class="form-control" 
                                            style="width:60%;border:1px solid <?php echo $bgco;?>; color:<?php echo $bgco;?>; float:left; margin:3px;" <?php echo $disable;?>>
                                                <option value="<?php echo $status;?>"><?php echo $status;?></option>
                                                <option value="Processing">Processing</option>
                                                <option value="Cancelled">Cancelled</option>
                                                <option value="Successfull Delivery">Successfull Delivery</option>
                                            </select>
                                             <button type="button" onclick="update_status(<?php echo $order_id;?>);" class="btn btn-primary" style="margin:3px;" <?php echo $disable;?>>
                                             Save</button>  
                                        </td>
                                        <td>&nbsp;</td>
                                        <td valign="top">
                                            <table width="99%" border="0" cellspacing="1" cellpadding="1">
                                              <tr>
                                                <td><?php echo $pay_method;?></td>
                                              </tr>
                                               
                                            </table>    </td>
                                        <td>&nbsp;</td>
                                        <td valign="top">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr><td colspan="6"  height="5"><div style="border-bottom:1px solid #CCCCCC"></div></td></tr>
                                      <tr><td colspan="6"  height="40" bgcolor="#FFFFFF"><h3 style="padding:0; margin:0">Order Details</h3></td></tr>
                                      <tr><td colspan="6"  height="5"><div style="border-bottom:1px solid #CCCCCC"></div></td></tr>
                                      <tr>
                                        <td colspan="5" valign="top">
                                            <table width="100%" cellpadding="2" cellspacing="1" class="table_round">
                                              
                                              <tr>
                                                <td width="34" height="36" align="center" bgcolor="#e5e5e5"class="table_header"><span class="style2">SI</span></td>
                                                <td width="183" align="center" bgcolor="#e5e5e5" class="table_header">Name</td>
                                                <td width="103" align="center" bgcolor="#e5e5e5" class="table_header">Product</td>
                                                <td width="109" align="center" bgcolor="#e5e5e5" class="table_header">Product Code</td>
                                                <td width="180" align="center" bgcolor="#e5e5e5" class="table_header">Quantity</td>
                                                <td width="159" align="center" bgcolor="#e5e5e5" class="table_header">Price</td>
                                                <td width="126" align="center" bgcolor="#e5e5e5" class="table_header"><span class="style2">Total Price</span></td>
                                                </tr>
                                              <?php
                                       $i=0;
                                       $grand_total=0;
                                     
                                      
                                      $order_q=$this->db->query("select * from orders_products where order_id ='".$order_id."'");
                                      foreach($order_q->result() as $rowq){
                                      $order_id=$rowq->order_id;
                                      $product_id=$rowq->product_id;
                                      $qty=$rowq->qty;
                                      $unit_price=$rowq->unit_price;
                                      $sub_total=$rowq->total_price;
                                      
                                          $order_pro=$this->db->query("select * from product where product_id ='".$product_id."'");
                                          foreach($order_pro->result() as $rowpro);
                                          $main_image=$rowpro->main_image;
                                          $product_name=$rowpro->product_name;
                                          $pro_code=$rowpro->pro_code;
                                          $grand_total=$grand_total+$sub_total;
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
                                             <tr class="table_hover" bgcolor="<?php echo $c; ?>" >
                                                <td height="44" align="center"><h6><?php echo $i;?></h6></td>
                                                <td align="left" class="section"><h6><?php echo $product_name;?></h6></td>
                                                <td align="left" class="section">
                                               <img src="<?php echo base_url()?>uploads/images/product/main_img/<?php echo $main_image;?>" width="80" height="100" />
                                                </td>
                                                <td align="left" class="section"><h6><?php echo $pro_code;?></h6></td>
                                                <td align="center" class="section"><h6><?php echo $qty;?></h6></td>
                                                <td align="left" class="section"><h6><?php echo $unit_price;?></h6></td>
                                                <td align="center" class="section"><h6>TK&nbsp;<?php echo $sub_total;?></h6></td>
                                                </tr>
                                              <?php
                                      }
                                      ?>
                                      <tr><td colspan="7"><div style="border-bottom:1px solid #CCCCCC"></div></td></tr>
                                            <tr>
                                                <td height="44" colspan="2" align="left"><h2><strong>Grand Total</strong></h2></td>
                                                 <td align="left" class="section">&nbsp;</td>
                                                <td align="center" class="section">&nbsp;</td>
                                                <td align="left" class="section">&nbsp;</td>
                                                 <td align="left" class="section">&nbsp;</td>
                                                <td align="right"><h2><strong>TK&nbsp;&nbsp;<?php echo number_format($grand_total);?></strong></h2></td>
                                                </tr>
                                            </table>    
                                            </td>
                                        <td>&nbsp;</td>
                                      </tr>
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
               