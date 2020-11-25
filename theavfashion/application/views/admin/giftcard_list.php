<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2><?=$page_title;?></h2>
		<ol class="breadcrumb">
			<li><a href="<?=base_url();?>/admin/settings/product_lists">Home</a></li>
			<li class="active"><strong><?=$page_title;?></strong></li>
		</ol>
    </div>
	<div class="col-lg-2"> </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5><?=$page_title;?></h5>
					<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url();?>admin/settings/add_giftcard" type="button" style="margin-top: -5px;" >Add Gift Card</a>
                </div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables" >
							<thead>
								<tr>
									<th>Sr No.</th>
									<th>Name</th>
									<th>Image</th>
									<th>Description</th>
									<th>Status</th>
									<th>Manage</th>
								</tr>
							</thead>
							<tbody>
								<?php  $s=0; foreach ($details as $row){ ?>
									<tr>
										<td><?php echo ++$s;?></td>
										<td><?php echo ucfirst($row->gcname); ?></td>
										<td><?php echo ucfirst($row->description);?></td>	
										<td>
											<?php												
												if(isset($row->gcimage) && $row->gcimage!=""){
													$sImage = $row->gcimage;
												}else{
													$sImage = 'noicon.png';
												}												
												
											?>
												<img src="<?=base_url();?>giftcards_images/<?php echo $sImage;?>" width="100">
										</td>
										<td>
											<?php if($row->status == 1){ ?>
												<input value="Active" type="button" id="cat_actions" name="cat_actions" class="btn btn-primary btn-xs" onClick="check_actions('<?php echo $row->gcid; ?>',0);">
											<?php } ?>
											<?php if($row->status == 0){ ?>
												<input value="Inactive" type="button" id="cat_actions" name="cat_actions" class="btn btn-danger btn-xs " onClick="check_actions('<?php echo $row->gcid; ?>',1);">
											<?php } ?>
										</td>
										<td>
											<a href="<?php echo base_url();?>admin/settings/edit_giftcard?id=<?php echo $row->gcid;?>"><button type="button" class="btn btn-xs btn-success" value="<?php echo $row->gcid?>"><i class="fa fa-edit"></i> Edit</button></a>
											<!--<input value="Delete" type="button" id="cat_actions" name="cat_actions" class="btn btn-danger btn-xs " onClick="check_actions('<?php echo $row->gcid; ?>',2);">-->
										</td>
									</tr>
								<?php }  ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
    </div>
 </div>
<?php 
$this->load->view('admin/includes/footer');
?>

<script type="text/javascript">
	function check_actions(catid,st){
		if(st==0){
			swal({
				title: "Are you sure?",
				text: "You want to Change the Status!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, change it!",
				closeOnConfirm: false
			},
			function(){
				window.location= "<?php echo base_url()?>admin/settings/giftcard_actions/" + catid +"/0";
			});
		}else if(st==1){
			swal({
				title: "Are you sure?",
				text: "You want to Change the Status!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, change it!",
				closeOnConfirm: false
			},
			function(){
				window.location= "<?php echo base_url()?>admin/settings/giftcard_actions/" + catid +"/1";
			});
		}else if(st==2){
			swal({
				title: "Are you sure?",
				text: "You want to Delete entire data related to this!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false
			},
			function(){
				window.location= "<?php echo base_url()?>admin/settings/giftcard_actions/" + catid +"/2";
			});
		}
	}
</script>