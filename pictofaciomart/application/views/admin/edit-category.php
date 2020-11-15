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
						<input type="hidden" id="h_cat_id" name="h_cat_id" value="<?php echo $catdetails->cat_id; ?>">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<div class="col-xs-4">
								<p class="margin-top-10">Name <sup style="color:red">*</sup></p>
							</div>
							<div class="col-xs-8">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input form-control" id="category_name" type="text" name="category_name" value="<?php echo $catdetails->category_name; ?>">
									<span id="error_category_name" style="color:red"></span>
								</div>
							</div> 
							<div class="clearfix"></div> <br>
							<?php 
								$catimg = "";$catthumbimg = "";
								if(isset($catdetails->catimg) && $catdetails->catimg!=""){ 
									$catimg = $catdetails->catimg;
								}
								if(isset($catdetails->catthumbimg) && $catdetails->catthumbimg!=""){ 
									$catthumbimg = $catdetails->catthumbimg;
								}
							?>
							<input type="hidden" id="h_catimg" name="h_catimg" value="<?php echo $catimg; ?>">
							<input type="hidden" id="h_catthumbimg" name="h_catthumbimg" value="<?php echo $catthumbimg; ?>">
							<div class="col-xs-4">
							<p class="margin-top-10">Images <?php if($catimg!=""){ ?><sup style="color:red">*</sup><?php } ?> </p>
							</div>
							<?php if(isset($catdetails->catimg) && $catdetails->catimg!=""){  ?>
								<div class="col-xs-6"> 
									<input accept="image/*" type="file" name="file" id="catimg" class="form-control" />
									<span id="error_catimg" style="color:red;"></span>
								</div>
								<div class="col-xs-2"> 
									<?php												
										if(isset($catdetails->catimg) && $catdetails->catimg!=""){
											$sImage = $catdetails->catimg;
											$sysRoot = $_SERVER["DOCUMENT_ROOT"];
											$sFolderLoc = "/faciostore/product_images/";
											$thisFileName = $sImage;
											$thisFullName = $sysRoot.$sFolderLoc.$thisFileName;
											if (file_exists($thisFullName)) { $sImage  = $thisFileName; }else{ $sImage  = 'noicon.png'; } 
										}else{
											$sImage = 'noicon.png';
										}									
									?>
									<img src="<?=base_url();?>product_images/<?php echo $sImage;?>" width="100">
								</div>
							<?php }else{ ?>
								<div class="col-xs-8"> 
									<input accept="image/*" type="file" name="file" id="catimg" class="form-control" />
									<span id="error_catimg" style="color:red;"></span>
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
			var flag = true;
			var category_name = $("#category_name").val();
			var catimg = $("#catimg").val();
			var catthumbimg = $("#catthumbimg").val();
			var cat_discount_per = $("#cat_discount_per").val();
			var cat_dis_fixed_amt = $("#cat_dis_fixed_amt").val();
			var cat_offer_type = $("input[name='cat_offer_type']:checked").val();
			if(category_name==""){
				flag = false;
				$("#error_category_name").html("Category is required.");
			}else{
				$("#error_category_name").html("");
			}
			<?php if(isset($catdetails->catimg) && $catdetails->catimg==""){  ?>
				if(catimg==""){
					flag = false;
					$("#error_catimg").html("Category image is required.");
				}else{
					$("#error_catimg").html("");
				}
			<?php } ?>
			
			if(flag==false){
				return false;
			}else{
				$("#cate_form").submit();
			}
		}
		function checkVal(val){
			if(val==0){
				$("#cat_discount_per").val(0);
				$("#hid_fix").hide();
				$("#hid_dis").show();
			}else{
				$("#cat_dis_fixed_amt").val(0);
				$("#hid_fix").show();
				$("#hid_dis").hide();
			}
		}
	</script>