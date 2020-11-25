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
                </div>
				<div class="ibox-content">
					<div class=" col-xs-6 col-xs-offset-3">
						<label>Select a Gift Card</label>
						<select class="form-control" onchange="categoryWise(this.value)">
							<option value="">ALL</option>
							<?php if(isset($details) && count($details)>0){ foreach($details as $gfcards){ $gcid = $gfcards->gcid; ?>
								<option value="<?php echo $gfcards->gcid; ?>" <?php if(isset($_GET['gcid']) && $_GET['gcid'] == $gcid)echo 'selected' ?>><?php echo ucfirst($gfcards->gcname); ?></option>
							<?php } } ?>
						</select>
                    </div>
					<div class="clearfix"></div><br>
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables" >
							<thead>
								<tr>
									<th>Sr No.</th>
									<th>Name</th>
									<th>Email</th>
									<th>IP Address</th>
									<th>Card Type</th>
									<th>Card Number</th>
									<th>Pin Number</th>
								</tr>
							</thead>
							<?php // echo "<pre>";print_r($card_details_info);exit; ?>
							<tbody>
								<?php  $s=0; foreach ($card_details_info as $row){ ?>
									<tr>
										<td><?php echo ++$s;?></td>
										<td><?php echo ucfirst($row->gccname); ?></td>
										<td><?php echo $row->emailaddress;?></td>	
										<td><?php echo $row->ipaddress;?></td>
										<td><?php echo ucfirst($row->cardType);?></td>
										<td><?php echo $row->giftcardnumber;?></td>
										<td><?php echo $row->pinnumber;?></td>										
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
	function categoryWise(prdgcid){
		if(prdgcid!=""){
			window.location= "<?php echo base_url()?>admin/settings/giftcard_info?gcid=" + prdgcid;
		}else{
			window.location= "<?php echo base_url()?>admin/settings/giftcard_info";
		}
	}
</script>