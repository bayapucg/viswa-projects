<main>


	<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Giftcards </h1>
					
				</div>
			</div>
		</div>
	</section>

	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				 <div class="container ">
            
           
			<div class="row  mb-4 d-flex justify-content-center ">
				
			<?php if(isset($giftcardsinfo_1) && !empty($giftcardsinfo_1) && count($giftcardsinfo_1)>0){
										foreach($giftcardsinfo_1 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_2) && !empty($giftcardsinfo_2) && count($giftcardsinfo_2)>0){
										foreach($giftcardsinfo_2 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                           
                             <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_3) && !empty($giftcardsinfo_3) && count($giftcardsinfo_3)>0){
										foreach($giftcardsinfo_3 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                           
                             <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_4) && !empty($giftcardsinfo_4) && count($giftcardsinfo_4)>0){
										foreach($giftcardsinfo_4 as $gcard){
									?>
									
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_5) && !empty($giftcardsinfo_5) && count($giftcardsinfo_5)>0){
										foreach($giftcardsinfo_5 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                           
                             <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_6) && !empty($giftcardsinfo_6) && count($giftcardsinfo_6)>0){
										foreach($giftcardsinfo_6 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning  text-white rounded-0" style="position:relative;z-index:1;border:1.5px solid #fff;-webkit-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);-moz-box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);box-shadow: -1px 2px 24px -12px rgba(0,0,0,0.75);"> Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				
            </div>
        </div>
        </div>
			</div>
		</div>
		
		
	
	
	
	
</main>
	
