<?php
if($productUpdate->num_rows()>0){
	foreach($productUpdate->result() as $productData);
	$product_id=$productData->product_id;
	$product_name=$productData->product_name;
	$class_id=$productData->classes;
	$cat_id=$productData->cat_id;
	$scat_id=$productData->scat_id;
	$lcat_id=$productData->lcat_id;
	$pro_code=$productData->pro_code;
	$boutique=$productData->supplier;
	$pro_price=$productData->price;
	$market_price=$productData->market_price;
	$qty=$productData->qty;
	$details=$productData->details;
	$gift_wrap=$productData->gift_wrap;
	$home_delivery=$productData->home_delivery;
	$hot_deals=$productData->hot_deals;
	$main_image=$productData->main_image;
	$thumbImg=$productData->thumb;
	$photo1=$productData->photo1;
	$photo2=$productData->photo2;
	$photo3=$productData->photo3;
	$color=$productData->color;
	$size=$productData->size;
	$installmentPayment=$productData->installmentPayment;
	$wholesell=$productData->wholesell;
	$advanceOrder=$productData->advanceOrder;
	$trending_pro=$productData->trending_pro;
	
}
else{
	$product_id='';
	$product_name='';
	$details='';
	$class_id='';
	$cat_id='';
	$scat_id='';
	$lcat_id='';
	$pro_code='';
	$boutique='';
	$pro_price='';
	$market_price='';
	$qty='';
	$gift_wrap='';
	$home_delivery='';
	$hot_deals='';
	$details='';
	$main_image='';
	$thumbImg='';
	$photo1='';
	$photo2='';
	$photo3='';
	$color='';
	$size='';
	$installmentPayment='';
	$wholesell='';
	$advanceOrder='';
	$trending_pro='';
	}
?>
<style>
.required{
	color:#f00;
}
</style>
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		return xmlhttp;
	}
	
	function getCategory(strURL) {		
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	
	function getClassCategory(strURL) {		
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('clsdiv').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	
	function getCity_size(strURL) {		
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv_size').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	
	function getSubCategory(strURL) {		
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('lastcat').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}	
	
	function producttypeChange(){
		var product_type=document.getElementById('product_type').value;
		if(product_type=='wholesell'){
			document.getElementById('wholesell').style.display='inline';
		}
		else{
			document.getElementById('wholesell').style.display='none';
		}
	}
	
	
	function installmentChange(){
		var installmentPayment=document.getElementById('installmentPayment');
		if(installmentPayment.checked){
			document.getElementById('installmentDetails').style.display='inline';
		}
		else{
			document.getElementById('installmentDetails').style.display='none';
		}
	}
</script>
<div class="right_col" role="main">
  <div>
    <div class="clearfix"></div>
                    <div class="row">




    





                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="width:93%; float:left">Product Registraion Form</h2>
                                   <h2 style="width:7%; float:right"><a href="<?php echo base_url();?>english/ouradminmanage/product_registration" class="btn btn-info" target="_blank"><strong>English</strong></a></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php echo form_open_multipart('', 'class="form-horizontal form-label-left"');?>
                                   <div id="registration_form">	
                                  	  <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                 <h4 class="panel-title">
                                                   product Information </h4>
                                                 </a>
                                            </div>
                                            
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Type<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                           
                                                <select name="product_type" id="product_type" class="form-control col-md-7 col-xs-12" onchange="producttypeChange();">
                                                   <option value="general">General products</option>
                                                   <option value="1To99">1-99 Products</option>
                                                   <option value="package">Package Products</option>
                                                   <option value="wholesell">Whole Sell Products</option>
                                            </select>
                                  			 <?php echo form_error('cat_id', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<div  style="display:none" id="wholesell">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Whole Sell Description<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <textarea name="wholesell"  class="form-control"><?php echo $wholesell;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php
                                          $queryImg=$this->Index_model->getAllItemTable('supplier','urlname',$boutique,'','','user_id','desc');
												foreach($queryImg->result() as $row_scat);
													$boutiqueusername=$row_scat->username;
													 $bouUpdateId=$row_scat->urlname;
											?>
                                                <select name="supplier" id="supplier" class="form-control col-md-7 col-xs-12">
                                                <option value="<?php echo $bouUpdateId;?>"><?php echo $boutiqueusername;?></option>
                                                 <option value="well-shop">Well Shop</option>
                                                <?php
                                                   foreach($supplier->result() as $boutiRow){
                                                   $shopname=$boutiRow->username;
												   $shopurl=$boutiRow->urlname;
                                                ?>
                                                    <option value="<?php echo $shopurl; ?>"><?php echo $shopname; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                  			 <?php echo form_error('cat_id', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Class<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php
                                         		    $queryImg=$this->Index_model->getAllItemTable('classes','cid',$class_id,'','','cid','desc');
													foreach($queryImg->result() as $row_scat);
													$class_name=$row_scat->class_name;
													$clsid=$row_scat->cid;
											?>
                                                <select name="classid" id="classid" class="form-control col-md-7 col-xs-12" 
                                                onChange="getClassCategory('<?php echo base_url();?>ouradminmanage/ajaxCategory?class_id='+this.value);">
                                                <option value="<?php echo $clsid;?>"><?php echo $class_name;?></option>
                                                <?php
                                                   foreach($classesdata->result() as $clsrow){
                                                   $classid=$clsrow->cid;
                                                   $clsname=$clsrow->class_name;
                                                ?>
                                                    <option value="<?php echo $classid; ?>"><?php echo $clsname; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                  			 <?php echo form_error('cat_id', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Category<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <div id="clsdiv">
                                                    <select name="cat_id" id="cat_id" class="form-control col-md-7 col-xs-12" required>
                                                    <option value="<?php echo $cat_id;?>"><?php echo $cat_id;?></option>
                                                   <?php /*?> <?php
                                                    foreach($allcategory->result() as $row){
                                                    $caegory_title=$row->caegory_title;
                                                    $cat_name=$row->cat_name;
                                                    ?>
                                                        <option value="<?php echo $caegory_title; ?>"><?php echo $cat_name; ?></option>
                                                    <?php
                                                    }
                                                    ?><?php */?>
                                                    </select>
                                                 </div>
                                  			 <?php echo form_error('cat_id', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="citydiv">
                                                     <select name="subcat_id" id="subcat_id" class="form-control col-md-7 col-xs-12"> 
                                                                <option value="<?php echo $scat_id;?>"><?php echo $scat_id;?></option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Category</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="lastcat">
                                                     <select name="lastcat_id" id="lastcat_id" class="form-control col-md-7 col-xs-12"> 
                                                                <option value="<?php echo $lcat_id;?>"><?php echo $lcat_id;?></option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sponcer</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="sponcer[]" id="sponcer" class="form-control" multiple="multiple">
                                            <?php
											$i=0;
                                            foreach($sponcer->result() as $spon){
                                            $sponcer_name=$spon->sponcer_name;
                                            $sponcer_id=$spon->sponcer_id;
											$i++;
											if($i%2!=0){
												$color='#fff';
											}
											else{
												$color='#eaeaea';
											}
                                            ?>
                                            <option value="<?php echo $sponcer_id; ?>" 
                                            style="background:<?php echo $color?>; text-align:left; padding:5px; cursor:pointer"><?php echo $sponcer_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="pro_name" required class="form-control col-md-7 col-xs-12" 
                                                placeholder='Product Name' value="<?php echo $product_name; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='Product Name'">
                                             <?php echo form_error('pro_name', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Code<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="pro_code" required class="form-control col-md-7 col-xs-12" 
                                                placeholder='Product Code' value="<?php echo $pro_code; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='Product Code'">
                                             <?php echo form_error('pro_code', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Size<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="citydiv_size">
                             <select name="pro_size[]" id="size_id" class="form-control" multiple="multiple"  style="min-height:150px">
                                                        <?php 
															$expval=explode(',',$size);
															foreach($expval as $val){
															?>
															<option value="<?php echo $val;?>" selected="selected"><?php echo $val;?></option>
															<?php
															}
															?>
                                                          
                                                          
                                                        </select>
                                                 </div>
                                             <?php echo form_error('pro_size', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Color<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="citydiv_size">
                                                    <select name="pro_color[]" class="form-control" multiple="multiple" style="min-height:150px">
                                                           <option value="#ff0000">Red</option>
                                                           <option value="#60BA41">Green</option>
                                                           <option value="#4F16E4">Blue</option>
                                                           <option value="#000000">Black</option>
                                                           <option value="#ffffff">White</option>
                                                           <option value="#E16FEE">Pink </option>
                                                           <option value="#FFFF00">Yellow</option>
                                                           <option value="#800080">Purple</option>
                                                           <option value="#A52A2A">Brown</option>
                                                           <option value="#808080">Gray </option>
                                                           <option value="#DCDCDC">Ash</option>
                                                           <option value="#ADFF2F">GreenYellow </option>
                                                        </select>
                                                 </div>
                                             <?php echo form_error('pro_size', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Details<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea type="text" name="full_description" class="form-control col-md-7 col-xs-12 ckeditor"><?php echo $details; ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Product Main Image</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="file" name="main_images">
                                            </div>
                                            <?php
                                            if($main_image!=""){
												?>
                                            <div class="col-md-1 col-sm-1">
                                                <img src="<?php echo base_url()?>uploads/images/product/main_img/<?php echo $main_image;?>"  style="height:auto; width:100%;" />
                                            </div>
                                            <?php
											}
											?>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Photo 2</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="file" name="photo1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Photo 2</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="file" name="photo2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Photo 2</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="file" name="photo3">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="quantity" required class="form-control col-md-7 col-xs-12" 
                                                placeholder='Quantity' value="<?php echo $qty; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='Quantity'">
                                             <?php echo form_error('quantity', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="pro_price" required class="form-control col-md-7 col-xs-12" 
                                                placeholder='Product Price' value="<?php echo $pro_price; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='Product Price'">
                                             <?php echo form_error('pro_price', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Market Price
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="market_price" class="form-control col-md-7 col-xs-12" 
                                                placeholder='Market Price' value="<?php echo $market_price; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='Market Price'">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Trending Product</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="trending_pro" value="1" <?php if($trending_pro==1){?> checked="checked" <?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hot Deals</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="hot_deals" value="1" <?php if($hot_deals==1){?> checked="checked" <?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Home Delivery</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="home_delivery" value="1" <?php if($gift_wrap==1){?> checked="checked" <?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Gift Wrapping</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="gift_wrap" value="1" <?php if($home_delivery==1){?> checked="checked" <?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Advance Order</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="advanceOrder" value="1" <?php if($advanceOrder==1){?> checked="checked" <?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Installment</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" name="installmentPayment" id="installmentPayment" onchange="installmentChange();">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<div style="display:none" id="installmentDetails">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Installment Details</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php //echo json_decode($installmentPayment);?>
                                                   <input type="text" name="installment" class="form-control" style="width:25%; float:left" placeholder='Installment ?' />
                                                   <input type="text" name="duration" class="form-control" style="width:20%; float:left" placeholder='Duration' />
                                                   <select name="durationType" class="form-control" style="width:25%; float:left;">
                                                        <option value="week">Week</option>
                                                        <option value="month">Month</option>
                                                        <option value="year">Year</option>
                                                   </select>
                                                   <input type="text" name="price" class="form-control" style="width:30%; float:left" placeholder='Installment Price' />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="status" class="form-control">
                                                    <option value="1">Enable</option>
                                                    <option value="0">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                                        
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                               	     </div>
                                   </div> 
                                    
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="hidden" name="product_id" value="<?php echo $product_id;?>" />
                                        <input type="hidden" name="mainImg" value="<?php echo $main_image;?>" />
                                        <input type="hidden" name="thumbImg" value="<?php echo $thumbImg;?>" />
                                        <input type="hidden" name="photo1" value="<?php echo $photo1;?>" />
                                        <input type="hidden" name="photo2" value="<?php echo $photo2;?>" />
                                        <input type="hidden" name="photo3" value="<?php echo $photo3;?>" />

                                            <input type="reset" class="btn btn-primary" value="Reset">
                                            <input type="submit" name="registration" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>
                               <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.date-picker').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>

                </div>
               