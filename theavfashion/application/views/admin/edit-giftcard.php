<style type="text/css">
	.avoid-clicks { pointer-events: none; }
</style>
<div class="row  border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?=$page_title;?></h2>
        <ol class="breadcrumb"> 
            <li>
                <a href="<?=base_url();?>/admin/settings/product_lists">Home</a>
            </li>
            <li class="active">
                <strong><?=$page_title;?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?=$page_title;?></h5>
                    <a class="btn btn-primary btn-sm pull-right" href="#" type="button" style="margin-top: -5px;" onclick="window.history.go(-1)"><i class="fa fa-angle-double-left"></i> Back</a>
                </div>
                <div class="ibox-content">
					<form method="POST" action="" enctype="multipart/form-data" id="cate_form" name="cate_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<div class="col-xs-4">
								<p class="margin-top-10">Name <sup style="color:red">*</sup></p>
							</div>
							<input type="hidden" id="h_gcid" name="h_gcid" value="<?php echo $catdetails->gcid; ?>">
							<div class="col-xs-8">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input form-control" id="gcname" type="text" name="gcname" value="<?php echo $catdetails->gcname; ?>">
									<span id="error_gcname" style="color:red"></span>
								</div>
							</div> 
							<div class="clearfix"></div> <br>
							<div class="col-xs-4">
								<p class="margin-top-10">Description <sup style="color:red">*</sup></p>
							</div>
							<div class="col-xs-8">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<textarea rows="10" cols="100" class="mdl-textfield__input form-control" id="description" name="description"><?php echo $catdetails->description; ?></textarea>
									<span id="error_description" style="color:red"></span>
								</div>
							</div> 
							<div class="clearfix"></div> <br>
							<?php 
								$gcimage = "";$catthumbimg = "";
								if(isset($catdetails->gcimage) && $catdetails->gcimage!=""){ 
									$gcimage = $catdetails->gcimage;
								}
							?>
							<input type="hidden" id="h_gcimage" name="h_gcimage" value="<?php echo $gcimage; ?>">
							<div class="col-xs-4">
							<p class="margin-top-10">Images <?php if($gcimage==""){ ?><sup style="color:red">*</sup><?php } ?> </p>
							</div>
							<?php if(isset($catdetails->gcimage) && $catdetails->gcimage!=""){  ?>
								<div class="col-xs-6"> 
									<input accept="image/*" type="file" name="file" id="gcimage" class="form-control" />
									<span id="error_gcimage" style="color:red;"></span>
								</div>
								<div class="col-xs-2"> 
									<?php												
										if(isset($catdetails->gcimage) && $catdetails->gcimage!=""){
											$sImage = $catdetails->gcimage;
											$sysRoot = $_SERVER["DOCUMENT_ROOT"];
											$sFolderLoc = "/faciostore/giftcards_images/";
											$thisFileName = $sImage;
											$thisFullName = $sysRoot.$sFolderLoc.$thisFileName;
											if (file_exists($thisFullName)) { $sImage  = $thisFileName; }else{ $sImage  = 'noicon.png'; } 
										}else{
											$sImage = 'noicon.png';
										}									
									?>
									<img src="<?=base_url();?>giftcards_images/<?php echo $sImage;?>" width="100">
								</div>
							<?php }else{ ?>
								<div class="col-xs-8"> 
									<input accept="image/*" type="file" name="gcimage" id="gcimage" class="form-control" />
									<span id="error_gcimage" style="color:red;"></span>
								</div>
							<?php } ?>
							<div class="clearfix"></div><br>	
						</div>
					</div>
					<div class="pull-right"><br>
					<input type="button" name="cat_submit" onClick="cat_validate();" value="Update" id="cat_submit" class="btn btn-success btn-round col-xs-12">
					</div>
					<div class="clearfix"></div>
					</form>
                </div>
            </div>
        </div>
    </div>
    <?php
		$this->load->view('admin/includes/footer');
    ?>
    <script>
		function cat_validate(){
			var flag    = true;
			var gcname  = $("#gcname").val();
			var gcimage = $("#gcimage").val();
			var description = $("#description").val();
			var h_gcimage = $("#h_gcimage").val();
			if(gcname==""){
				flag = false;
				$("#error_gcname").html("Gift Card is required.");
			}else{
				$("#error_gcname").html("");
			}
			if(description==""){
				flag = false;
				$("#error_description").html("Description is required.");
			}else{
				$("#error_description").html("");
			}
			if(h_gcimage!=""){
				flag = true;
			}else{
				if(gcimage==""){
					flag = false;
					$("#error_gcimage").html("Gift Card image is required.");
				}else{
					$("#error_gcimage").html("");
				}
			}			
			if(flag==false){
				return false;
			}else{
				$("#cate_form").submit();
			}
		}		
	</script>