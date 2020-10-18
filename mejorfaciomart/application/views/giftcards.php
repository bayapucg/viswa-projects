<main>
	<section class="category-area section-padding30" style="background:#f9f9f9">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-4">
                            <h2>Are you looking for Gift cards
</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
				   <div class="col-md-12">
						<div id="blogCarousel" class="carousel slide" data-ride="">
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_1) && !empty($giftcardsinfo_1) && count($giftcardsinfo_1)>0){
										foreach($giftcardsinfo_1 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
												</div>
											</div>
										</a>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_2) && !empty($giftcardsinfo_2) && count($giftcardsinfo_2)>0){
										foreach($giftcardsinfo_2 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
												</div>
											</div>
										</a>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_3) && !empty($giftcardsinfo_3) && count($giftcardsinfo_3)>0){
										foreach($giftcardsinfo_3 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
												</div>
											</div>
										</a>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_4) && !empty($giftcardsinfo_4) && count($giftcardsinfo_4)>0){
										foreach($giftcardsinfo_4 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
												</div>
											</div>
										</a>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_5) && !empty($giftcardsinfo_5) && count($giftcardsinfo_5)>0){
										foreach($giftcardsinfo_5 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
												</div>
											</div>
										</a>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="">
								<div class="row">
									<?php if(isset($giftcardsinfo_6) && !empty($giftcardsinfo_6) && count($giftcardsinfo_6)>0){
										foreach($giftcardsinfo_6 as $gcard){
									?>
									<div class="col-md-4">
										<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
											<div class="shadow-sm single-category mb-30">
												<div class="hov-img0 category-img">
													<img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="<?php echo ucfirst($gcard->gcname); ?>">
												</div>
												<div class="text-center mt-2 mb-2">
													<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="btn btn-outline-primary medium genric-btn">Buy / Check Balance</a>
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
            </div>
        </section>
</main>
	
