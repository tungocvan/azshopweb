<?php 
    $dataProduct = $data["getProductSlug"];
    //echo '<pre>';print_r($dataProduct);echo '</pre>';
    function show_banner_product() {
        return "
        <div class='ht__bradcaump__area' style='background: rgba(0, 0, 0, 0) url(./public/images/bg/2.jpg) no-repeat scroll center center / cover ;'>
            <div class='ht__bradcaump__wrap'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-12'>
                            <div class='bradcaump__inner text-center'>
                                <h2 class='bradcaump-title'>Product Details</h2>
                                <nav class='bradcaump-inner'>
                                    <a class='breadcrumb-item' href='index.html'>Home</a>
                                    <span class='brd-separetor'>/</span>
                                    <span class='breadcrumb-item active'>Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
    
    function show_product_detail_images($dataProduct) {
        $gallery_image = ""; $gallery_image_large = "";
        $imgLarge = $dataProduct["img"];
        if($dataProduct["gallery_image"]!=[]){
            foreach($dataProduct["gallery_image"] as $key => $value){
                if($key == 0 ) {$class = "class='active'" ; $classLarge = " show active ";} else{
                    $class = ""; $classLarge = "";
                }
                $gallery_image = $gallery_image . "
                <li role='presentation' class='pot-small-img'>
                    <a ".$class." href='#img-tab-".$key."' role='tab' data-toggle='tab'>
                        <img src='".$value."' alt='small-image'>
                    </a>
                </li>
                ";
                $gallery_image_large = $gallery_image_large . "
                <div role='tabpanel' class='tab-pane fade ".$classLarge." product-video-position' id='img-tab-".$key."'>
                <img src='".$imgLarge."' alt='full-image'>
                <div class='product-video'>
                    <a class='video-popup' href='https://www.youtube.com/watch?v=cDDWvj_q-o8'>
                        <i class='zmdi zmdi-videocam'></i> View Video
                    </a>
                </div>
                </div>
                ";
             }
        }else{
      
            $gallery_image_large = $gallery_image_large . "
            <div role='tabpanel' class='tab-pane fade show active product-video-position' id='img-tab-1'>
            <img src='".$imgLarge."' alt='full-image'>
            <div class='product-video'>
                <a class='video-popup' href='https://www.youtube.com/watch?v=cDDWvj_q-o8'>
                    <i class='zmdi zmdi-videocam'></i> View Video
                </a>
            </div>
            </div>
            ";
        }
        

        return "
        <div class='product__details__container'>
            <!-- Start Small images -->
            <ul class='product__small__images nav' role='tablist'>
                ".$gallery_image."                
            </ul>
            <!-- End Small images -->
            <div class='product__big__images'>
                <div class='portfolio-full-image tab-content'>
                    ".$gallery_image_large."
                </div>
            </div>
        </div>
        ";
    }

    function show_product_detail_content($dataProduct) {
        return "
        <div class='htc__product__details__inner'>
            <div class='pro__detl__title'>
                <h2>".$dataProduct['title']."</h2>
            </div>
            <div class='pro__dtl__rating'>
                <ul class='pro__rating'>
                    <li><span class='ti-star'></span></li>
                    <li><span class='ti-star'></span></li>
                    <li><span class='ti-star'></span></li>
                    <li><span class='ti-star'></span></li>
                    <li><span class='ti-star'></span></li>
                </ul>
                <span class='rat__qun'>(Based on 0 Ratings)</span>
            </div>
            <div class='pro__details'>            
                ".$dataProduct['short_description']."          
            </div>
            <ul class='pro__dtl__prize'>
                <li class='old__prize'>$".$dataProduct['regular_price']."</li>
                <li>$".$dataProduct['price']."</li>
            </ul>
            <div class='pro__dtl__color'>
                <h2 class='title__5'>Choose Colour</h2>
                <ul class='pro__choose__color'>
                    <li class='red'><a href='#'><i class='zmdi zmdi-circle'></i></a></li>
                    <li class='blue'><a href='#'><i class='zmdi zmdi-circle'></i></a></li>
                    <li class='perpal'><a href='#'><i class='zmdi zmdi-circle'></i></a></li>
                    <li class='yellow'><a href='#'><i class='zmdi zmdi-circle'></i></a></li>
                </ul>
            </div>
            <div class='pro__dtl__size'>
                <h2 class='title__5'>Size</h2>
                <ul class='pro__choose__size'>
                    <li><a href='#'>xl</a></li>
                    <li><a href='#'>m</a></li>
                    <li><a href='#'>ml</a></li>
                    <li><a href='#'>lm</a></li>
                    <li><a href='#'>xxl</a></li>
                </ul>
            </div>
            <div class='product-action-wrap'>
                <div class='prodict-statas'><span>Quantity :</span></div>
                <div class='product-quantity'>
                    <form id='myform' method='POST' action='#'>
                        <div class='product-quantity'>
                            <div class='cart-plus-minus'>
                                <input class='cart-plus-minus-box' type='text' name='qtybutton' value='02'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <ul class='pro__dtl__btn'>
                <li class='buy__now__btn'><a href='#'>buy now</a></li>
                <li><a href='#'><span class='ti-heart'></span></a></li>
                <li><a href='#'><span class='ti-email'></span></a></li>
            </ul>
            <div class='pro__social__share'>
                <h2>Share :</h2>
                <ul class='pro__soaial__link'>
                    <li><a href='#'><i class='zmdi zmdi-twitter'></i></a></li>
                    <li><a href='#'><i class='zmdi zmdi-instagram'></i></a></li>
                    <li><a href='#'><i class='zmdi zmdi-facebook'></i></a></li>
                    <li><a href='#'><i class='zmdi zmdi-google-plus'></i></a></li>
                </ul>
            </div>
        </div>
        ";
    }

    function show_product_detail($dataProduct) {
        $product_detail_images = show_product_detail_images($dataProduct);
        $product_detail_content = show_product_detail_content($dataProduct); 
        return "
        <section class='htc__product__details pt--120 pb--100 bg__white'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-6 col-xl-6 col-md-12 col-12'>
                        ".$product_detail_images."
                    </div>
                    <div class='col-lg-6 col-xl-6 col-md-12 col-12 smt-30 xmt-30'>
                        ".$product_detail_content."
                    </div>
                </div>
            </div>
        </section>
        ";
    }
    function show_product_tab($dataProduct) {
        return "
        <section class='htc__product__details__tab bg__white pb--120'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12 col-xl-12 col-md-12 col-12'>
                        <ul class='product__deatils__tab mb--60 nav' role='tablist'>
                            <li role='presentation'>
                                <a class='active' href='#description' role='tab' data-toggle='tab'>Description</a>
                            </li>
                            <li role='presentation'>
                                <a href='#sheet' role='tab' data-toggle='tab'>Data sheet</a>
                            </li>
                            <li role='presentation'>
                                <a href='#reviews' role='tab' data-toggle='tab'>Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='product__details__tab__content'>
                            <!-- Start Single Content -->
                            <div role='tabpanel' id='description' class='product__tab__content fade show active'>
                                <div class='product__description__wrap'>
                                 ".$dataProduct['description']."
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role='tabpanel' id='sheet' class='product__tab__content fade'>
                                <div class='pro__feature'>
                                        <h2 class='title__6'>Data sheet</h2>
                                        <ul class='feature__list'>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                            <li><a href='#'><i class='zmdi zmdi-play-circle'></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        </ul>
                                    </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role='tabpanel' id='reviews' class='product__tab__content fade'>
                                <div class='review__address__inner'>
                                    <!-- Start Single Review -->
                                    <div class='pro__review'>
                                        <div class='review__thumb'>
                                            <img src='./public/images/review/1.jpg' alt='review images'>
                                        </div>
                                        <div class='review__details'>
                                            <div class='review__info'>
                                                <h4><a href='#'>Gerald Barnes</a></h4>
                                                <ul class='rating'>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star-half'></i></li>
                                                    <li><i class='zmdi zmdi-star-half'></i></li>
                                                </ul>
                                                <div class='rating__send'>
                                                    <a href='#'><i class='zmdi zmdi-mail-reply'></i></a>
                                                    <a href='#'><i class='zmdi zmdi-close'></i></a>
                                                </div>
                                            </div>
                                            <div class='review__date'>
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                    <!-- Start Single Review -->
                                    <div class='pro__review ans'>
                                        <div class='review__thumb'>
                                            <img src='./public/images/review/2.jpg' alt='review images'>
                                        </div>
                                        <div class='review__details'>
                                            <div class='review__info'>
                                                <h4><a href='#'>Gerald Barnes</a></h4>
                                                <ul class='rating'>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star'></i></li>
                                                    <li><i class='zmdi zmdi-star-half'></i></li>
                                                    <li><i class='zmdi zmdi-star-half'></i></li>
                                                </ul>
                                                <div class='rating__send'>
                                                    <a href='#'><i class='zmdi zmdi-mail-reply'></i></a>
                                                    <a href='#'><i class='zmdi zmdi-close'></i></a>
                                                </div>
                                            </div>
                                            <div class='review__date'>
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class='rating__wrap'>
                                    <h2 class='rating-title'>Write  A review</h2>
                                    <h4 class='rating-title-2'>Your Rating</h4>
                                    <div class='rating__list'>
                                        <!-- Start Single List -->
                                        <ul class='rating'>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class='rating'>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class='rating'>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class='rating'>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class='rating'>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                            <li><i class='zmdi zmdi-star-half'></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                    </div>
                                </div>
                                <!-- End RAting Area -->
                                <div class='review__box'>
                                    <form id='review-form'>
                                        <div class='single-review-form'>
                                            <div class='review-box name'>
                                                <input type='text' placeholder='Type your name'>
                                                <input type='email' placeholder='Type your email'>
                                            </div>
                                        </div>
                                        <div class='single-review-form'>
                                            <div class='review-box message'>
                                                <textarea placeholder='Write your review'></textarea>
                                            </div>
                                        </div>
                                        <div class='review-btn'>
                                            <a class='fv-btn' href='#'>submit review</a>
                                        </div>
                                    </form>                                
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ";
    }
    function show_product($dataProduct) {
        $banner_product = show_banner_product();
        $product_detail = show_product_detail($dataProduct);
        $product_tab = show_product_tab($dataProduct);
        return "
        <!-- Start Bradcaump area -->
        ".$banner_product."
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        ".$product_detail."
        <!-- End Product Details -->
        <!-- Start Product tab -->
        ".$product_tab."
        <!-- End Product tab -->
        ";
    }


    echo show_product($dataProduct);
?>
