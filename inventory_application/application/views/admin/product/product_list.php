<script type="text/JavaScript">
function openPage1(pid,tablename,colid)
{
	var b = window.confirm('Are you sure, you want to Delete This ?');
	if(b==true){
		$.ajax({
			   type: "GET",
			   url: '<?php echo base_url()?>ouradminmanage/deleteData/'+tablename+'/'+colid,
			   data: "deleteId="+pid,
			   success: function() {
				  alert("Successfully saved");
				  window.location.reload(true);
				},
				error: function() {
				  alert("There was an error. Try again please!");
				}
		 });
	}
	else{
	 return;
	}
	 
}
</script>
<div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Patient Registration Details</h3>
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
                                    <h2>Total product (<?php echo $product_list->num_rows();?>)</h2>
                                    <h2 style="float:right"><a href="<?php echo base_url('ouradminmanage/product_registration');?>" class="btn btn-primary">New Product</a></h2>
                                    <div class="clearfix"></div>
                                   
                                </div>
                                <div class="x_content">
                                <div style="width:100%"><?php echo $this->session->flashdata('successMsg');?></div>
                                <div class="container">
                                  <table class="table table-striped" width="100%">
                                    <thead>
                                      <tr>
                                        <th width="2%">SI</th>
                                        <th width="34%">Product Name</th>
                                        <th width="24%">Supplier</th>
                                        <th width="22%">Product Category</th>
                                        <th width="18%">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$i=0;
                                    foreach($product_list->result() as $productData):
									$product_id=$productData->product_id;
									$productTitle=$productData->product_name;
									$supplier=$productData->supplier;
									$cat_id=$productData->cat_id;
									
									$catquery=$this->Index_model->getAllItemTable('category','caegory_title',$cat_id,'','','cid','desc');
									if($catquery->num_rows() > 0){
										foreach($catquery->result() as $cat_row);
										$cateName=$cat_row->cat_name;
									}
									else{
										$cateName='NULL';
										}
									
									$butikque=$this->Index_model->getAllItemTable('supplier','urlname',$supplier,'','','user_id','desc');
									if($butikque->num_rows() > 0){
										foreach($butikque->result() as $butikrow);
										$shopName=$butikrow->username;
									}
									else{
										$shopName='NULL';
										}
									
									$i++;
									?>
                                      <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $productTitle; ?></td>
                                        <td><?php echo $shopName; ?></td>
                                        <td><?php echo $cateName; ?></td>
                                         <td> 
                                         	<a href="<?php echo base_url('ouradminmanage/product_registration/'.$product_id);?>" class="btn btn-default btn-sm">
          										<span class="glyphicon glyphicon-edit"></span> Edit
                                            </a> 
                                            <a href="javascript:void();" onclick="openPage1('<?php echo $product_id;?>','product','product_id');" class="btn btn-default btn-sm">
          										<span class="glyphicon glyphicon-remove-circle"></span> Remove
                                            </a>
                                            </td>
                                      </tr>
                                    <?php
                                    endforeach;
									?>  
                                      
                                    </tbody>
                                  </table>
                                </div>
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
               