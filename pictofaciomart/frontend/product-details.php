<?php include("header.php");?>
	
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
    
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-thumbnails">
                  <ol class="thumbnails-list list-unstyled">
                    <li><img src="assets/img/categori/product2.png" alt=""></li>
                    <li><img src="assets/img/categori/product3.png" alt=""></li>
                    <li><img src="assets/img/categori/product4.png" alt=""></li>
                    <li><img src="assets/img/categori/product5.png" alt=""></li>
                    <li><img src="assets/img/categori/product1.png" alt=""></li>
                  </ol>
                </div>
                <div class="product-gallery-featured">
                  <img class="img-fluid" src="assets/img/categori/product2.png" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                
                
                
                <div class="product-description mb-5">
               
                  <h4 class="site_head">Description</h4>
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
              <p class="last-sold text-muted"><small>145 items sold</small></p>
              <h4 class="product-title mb-2">T-shirt Nickony - XXL Black and White - 100% cotton - Limited Stock</h4>
              <h4 class="product-price site-head">$ 25.00</h4>
              <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
              <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
              <div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
            
			      <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>$5</p>
                </div>
             </div>
			  <div>
				   <h4 class="site-head">Features</h4>
                  <dl class="row mb-5">
                    <dt class="col-sm-3">Brand</dt>
                    <dd class="col-sm-9">Nickony</dd>
                    <dt class="col-sm-3">Color</dt>
                    <dd class="col-sm-9">Red</dd>
                    <dt class="col-sm-3">Size</dt>
                    <dd class="col-sm-9">XXL</dd>
                    <dt class="col-sm-3">Fabric</dt>
                    <dd class="col-sm-9">Cottom</dd>
                  </dl>
			  </div>
              <button class="btn btn-primary btn-lg btn-block">Buy Now</button>
              
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