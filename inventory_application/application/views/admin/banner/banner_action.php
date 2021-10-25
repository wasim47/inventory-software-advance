<?php
if($bannerUpdate->num_rows()>0){
	foreach($bannerUpdate->result() as $bannerData);
	$b_id=$bannerData->b_id;
	$bannerTitle=$bannerData->banner_name;
	$details=$bannerData->subtitle;
	$image=$bannerData->image;
	$bgcolor=$classData->bg_color;
}
else{
	$b_id='';
	$bannerTitle=set_value('banner_name');
	$subtitle=set_value('subtitle');
	$image='';
	$bgcolor='';
	}
?>
<link id="jquiCSS" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/colorpicker/evol.colorpicker.min.css" rel="stylesheet" /> 
<script src="<?php echo base_url();?>assets/colorpicker/evol.colorpicker.min.js" type="text/javascript"></script>

<div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>banner Registration Details</h3>
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
                                    <h2>Admin Registraion Form</h2>
                                    
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
                                                   banner Information </h4>
                                                 </a>
                                            </div>
                                            
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                        			    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Name<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="banner_name" required class="form-control col-md-7 col-xs-12" 
                                                placeholder='banner Name' value="<?php echo $bannerTitle; ?>"  onFocus="this.placeholder=''" onBlur="this.placeholder='banner Name'">
                                             <?php echo form_error('banner_name', '<p style="color:#ff0000;margin:0;">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">BG Color<span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-3 col-xs-12">
                                           <input id="frenchColor" name="bg_color" type="text" style="width:90%; float:left" value="<?php echo $bgcolor;?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Patient Photo</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="file" name="bannerPhoto">
                                            </div>
                                        </div>
                                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Details<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea type="text" name="subtitle" class="form-control col-md-7 col-xs-12"><?php echo $details; ?></textarea>
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
                                        <input type="hidden" name="b_id" value="<?php echo $b_id; ?>">
                                         <input type="hidden" name="stillimg" value="<?php echo $image; ?>">
                                            <input type="reset" class="btn btn-primary" value="Reset">
                                            <input type="submit" name="registration" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>
                               <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
               
               
                              <script>

$(document).ready(function(){
	// Change theme
	
    $('.css').on('click', function(evt){ 
        $('#jquiCSS').attr('href','http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/'+this.innerHTML+'/jquery-ui.css');
        $('.css').removeClass('sel');
        $(this).addClass('sel');
    });
	
	// Events demo
	$('#cp1').colorpicker({color:'#8db3e2'})
		.on('change.color', function(evt, color){
			$('#title').attr('style','color:'+color);
		})
		.on('mouseover.color', function(evt, color){
			$('#title').attr('style','background-color:'+color);
		});
	

	
	// Instanciate colorpickers
    $('#cpBoth').colorpicker();
    $('#cpDiv').colorpicker({color:'#31859b'});
    $('#cpFocus').colorpicker({showOn:'focus'});
    $('#cpButton').colorpicker({showOn:'button'});
    $('#cpOther').colorpicker({showOn:'none'});
	$('#show').click(function(evt){
		evt.stopImmediatePropagation();
		$('#cpOther').colorpicker("showPalette");
	});
	
	// No color indicator
	$('#noIndColor').colorpicker({
		displayIndicator: false
	});

	// French colorpicker
	$('#frenchColor').colorpicker({
		strings: "Couleurs de themes,Couleurs de base,Plus de couleurs,Moins de couleurs,Palette,Historique,Pas encore d'historique."
	});

});

</script>