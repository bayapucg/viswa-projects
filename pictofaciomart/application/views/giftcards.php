<main>
<style>
 .box14 {
	  border:1px solid #ddd;
  }
  .box14 .box-content{
	  width:90%;
	  height:90%;
	  position:relative !important;
	  top:5%;
	  left:5%;
	  padding:10px 0px;
  }
  .box14 .post {
	  margin:8px 0px !important;
    font-size: 14px;
    color: #fff;
    padding: 10px;
    background: #ffb61a;
    opacity: 1 !important;
    border-radius: 0 !important;
    transform: translate3d(0,-50px,0);
    transition: all .7s ease 0s;
	z-index:1;
	width:100%;
}
  
</style>

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

	<section class=" bg-e9e9e9">
	<div class="container text-center">
	<h3>Disclaimer: This business is represented or affiliated with Macy's.com</h3>
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
                           
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-warning btn-block text-white rounded-0" style="position:relative;z-index:1;"> Check Balance</a>
                            
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
	
