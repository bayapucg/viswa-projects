<?php include("header.php");?>
 <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container-fluid">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="assets/img/icon/header_icon.png" alt="">
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">USA</option>
                                                <option value="">SPN</option>
                                                <option value="">CDA</option>
                                                <option value="">USD</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <ul class="contact-now">     
                                    <li>+777 2345 7886</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                               <ul>                                          
                                   <li><a href="login.html">My Account </a></li>
                                   <li><a href="product_list.html">Wish List  </a></li>
                                   <li><a href="cart.html">Shopping</a></li>
                                   <li><a href="cart.html">Cart</a></li>
                                   <li><a href="checkout.html">Checkout</a></li>
                               </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                              <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>                                                
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="Catagori.html">Catagori</a></li>
                                        <li class="hot"><a href="#">Latest</a>
                                            <ul class="submenu">
                                                <li><a href="product_list.html"> Product list</a></li>
                                                <li><a href="single-product.html"> Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="cart.html">Card</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="confirmation.html">Confirmation</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Product Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                 </li>
                                <li class=" d-none d-xl-block">
                                    <div class="favorit-items">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                               <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Sign in</a></li>
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
  </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Confirmation</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- slider Area End-->

  <!--================ confirmation part start =================-->
  <section class="confirmation_part section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <span>Thank you. Your order has been received.</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>order info</h4>
            <ul>
              <li>
                <p>order number</p><span>: 60235</span>
              </li>
              <li>
                <p>data</p><span>: Oct 03, 2017</span>
              </li>
              <li>
                <p>total</p><span>: USD 2210</span>
              </li>
              <li>
                <p>mayment methord</p><span>: Check payments</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Billing Address</h4>
            <ul>
              <li>
                <p>Street</p><span>: 56/8</span>
              </li>
              <li>
                <p>city</p><span>: Los Angeles</span>
              </li>
              <li>
                <p>country</p><span>: United States</span>
              </li>
              <li>
                <p>postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>shipping Address</h4>
            <ul>
              <li>
                <p>Street</p><span>: 56/8</span>
              </li>
              <li>
                <p>city</p><span>: Los Angeles</span>
              </li>
              <li>
                <p>country</p><span>: United States</span>
              </li>
              <li>
                <p>postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Order Details</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span>$2160.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">shipping</th>
                  <th><span>flat rate: $50.00</span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col" colspan="3">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include("footer.php");?>