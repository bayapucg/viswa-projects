
<?php include("header.php");?>
	
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
    
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery sm-hide">
            
                <div class="product-gallery-featured">
                 <img class="img-fluid" src="assets/img/cards/walmart.jpg" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                
              
                <div class="product-description mb-5 sm-hide">
               
                  <h2 >Description</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas
                    necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda
                    ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto,
                    perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error
                    consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?</p>
                </div>
             
              </div>
            </div>
            <div class="product-payment-details">
				<div class="info-wrap bg-white w-100 p-lg-5  w-100   cust-pd-mar">
										<h3 class="mb-4 text-center">Check Balance</h3>
										<form method="POST" id="contactForm" class="contactForm">
											<div class="row">
												
												<div class="col-md-12">
													<div class="form-group">
													
														<input type="text" class="form-control" name="subject"  placeholder="Enter Walmart Card Number">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													
														<input type="password" class="form-control" name="subject"  placeholder="Enter Pin here">
													</div>
												</div>
												
												<div class="col-md-12">
												<div class="row">
													<div class="form-group col-md-6 col-6 cus-btn">
														<input type="submit" value="submit" class="btn btn-info">
														
													</div>
													<div class="text-center  bg-white col-md-6 col-6 cus-btn">
										<a href="https://www.walmart.com/" target="_blank"  class="btn btn-outline-success" style="background:green">Buy Now</a>
									</div>
												</div>
												</div>
											</div>
										</form>
									</div>
									<div class="product-gallery-featured md-hide">
                 <img class="img-fluid" src="assets/img/cards/walmart.jpg" alt="">
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include("footer.php");?>
<script>
// select all thumbnails
const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
// select featured
const galleryFeatured = document.querySelector(".product-gallery-featured img");

// loop all items
galleryThumbnail.forEach((item) => {
  item.addEventListener("mouseover", function () {
    let image = item.children[0].src;
    galleryFeatured.src = image;
  });
});

// show popover
$(".main-questions").popover('show');

</script>
	<main>
	<section class="ftco-section " style="background:#f9f9f9">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="">
							<div class="row  d-flex justify-content-center">
								
								<div class="col-md-5 ">
									
									
								</div>
								
								
								</div>
								
						</div>
					</div>
				</div>
    	</div>
    </section>
	</main>
