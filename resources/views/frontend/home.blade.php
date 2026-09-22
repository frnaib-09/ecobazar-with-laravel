@extends('layouts.pageCover')
@section('title')
Home
@endsection
@section('content')
<!-- ----------------------------------------------------------------------- -->
    <!--                                 pop up                                  -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <div class="container">
                <div class="row">
                    <span id="close"><iconify-icon icon="ix:cancel" width="24" height="24"></iconify-icon></span>
                    <div class="col-lg-5 col-12">
                        <img src="{{ asset('frontend/images/BG.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="popright">
                            <h3>Subscribe to Our <br class="d-lg-block d-none"> Newsletter</h3>
                            <p>Subscribe to our newlletter and Save your <span>20% <br> money</span> with discount code today.</p>
                            <div class="subs">
                                <input type="text" name="" id="" placeholder="Enter your email">
                                <button>Subscribe</button>
                            </div>
                            <div class="checkbox_wrapper">
                                <input type="checkbox" name="" id="never_appear">
                                <label for="never_appear">Do not show this window</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Banner Section                              -->
    <section id="banner">
        <div class="container">
            <div class="banner_slider">
                <div class="slider_content_wrapper">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <h6>Welcome to shopery</h6>
                            <h1>Fresh & Healthy Organic Food</h1>
                            <h4>Sale up to <span>30% OFF</span></h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop Now <iconify-icon icon="solar:arrow-right-outline" width="24" height="24"></iconify-icon></a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('frontend/images/hero1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="slider_content_wrapper">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <h6 style="font-family: Segoe Script, sans-serif;">Welcome to shopery</h6>
                            <h2>Guaranteed Natural & Organic Food</h2>
                            <h4>Sale up to <span>50% OFF</span></h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop Now <iconify-icon icon="solar:arrow-right-outline" width="24" height="24"></iconify-icon></a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('frontend/images/hero2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="slider_content_wrapper">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <h6>Welcome to shopery</h6>
                            <h2>Fresh & Healthy Organic Food</h2>
                            <h4>Sale up to <span>30% OFF</span></h4>
                            <p>Free shipping on all your order. we deliver, you enjoy</p>
                            <a href="#">Shop Now <iconify-icon icon="solar:arrow-right-outline" width="24" height="24"></iconify-icon></a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('frontend/images/hero3.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Other Services                              -->
    <section id="otherService">
       <div class="container">
           <div class="row justify-content-center otherservicesBg">
               <div class="col-lg-12">
                   <div class="row ">
                       <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="freeShip d-block d-lg-flex text-center text-lg-start align-items-center">
                               <span><img src="{{ asset('frontend/images/delivery-truck 1.png') }}" alt="" class="img-fluid"></span>
                               <div class="freeShipCnt">
                                   <h6>Free Shipping</h6>
                                   <p>Free shipping on all your order</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="freeShip d-block d-lg-flex text-center text-lg-start align-items-center">
                               <span><img src="{{ asset('frontend/images/headphone.png') }}" alt="" class="img-fluid"></span>
                               <div class="freeShipCnt">
                                   <h6>Customer Service 24/7</h6>
                                   <p>Instant access to support</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="freeShip d-block d-lg-flex text-center text-lg-start align-items-center">
                               <span><img src="{{ asset('frontend/images/shopping-bag.png') }}" alt="" class="img-fluid"></span>
                               <div class="freeShipCnt">
                                   <h6>100% Secure Payment</h6>
                                   <p>We ensure your money is safe</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="freeShip d-block d-lg-flex text-center text-lg-start align-items-center">
                               <span><img src="{{ asset('frontend/images/package.png') }}" alt="" class="img-fluid"></span>
                               <div class="freeShipCnt">
                                   <h6>Money Back Guarantee</h6>
                                   <p>30 days money back guarantee</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                            Featured Section                             -->
    <section id="featured">
        <div class="container">
            <div class='heading'>
                <h2>Feature Product</h2>
                <img src="{{ asset('frontend/images/Line.png') }}" alt="" class="img-fluid">
            </div>
            <div class="featureSlider">
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct1.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/big image1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#" class="productNames">Green Apple</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct2.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/featureProduct2.png') }}"  class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#" class="productNames">Chainise Cabbage</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct3.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/featureProduct3.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./item.html" class="productNames">Green Lettuce</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct4.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/featureProduct4.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#" class="productNames">Green Chilli</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct5.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/featureProduct5.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#" class="productNames">Corn</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="featureProCard">
                        <div class="featureImg">
                            <a href="#"><img src="{{ asset('frontend/images/featureProduct1.png') }}" class="img-fluid" alt=""></a>
                            <ul class="quicklinks">
                                <li><a class="wishList"><iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon></a></li>
                                <li><a href="{{ asset('frontend/images/featureProduct1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" width="20" height="20"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#" class="productNames">Green Apple</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                            <a href="#" class="featureCardBtn">
                                <iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-evenly mt-lg-5 featureProductSecondContainer">
                <div class="col-lg-3 col-10 col-md-3">
                    <h5>Hot Deals</h5>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 d-md-flex align-items-md-center col-5 _img">
                                    <img src="{{ asset('frontend/images/hot1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Green Apple</a>
                                            <p>$14.99</p>
                                            <div class="reviews">
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="#"><iconify-icon icon="solar:heart-linear" ></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/featureProduct1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" ></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/hot2.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Red Tomato</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="#"><iconify-icon icon="solar:heart-linear" ></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/hot2.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear" ></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/hot3.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Indian Malta</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/hot3.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-10 col-md-3">
                    <h5>Best Seller</h5>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/best1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Eggplant</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/best1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/best2.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Big Potato</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/best2.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mb-lg-0 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/best3.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Okra</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/best3.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-10 col-md-3">
                    <h5>Top Rated</h5>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/top1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="./item.html" class="productNames">Green Lettuce</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/top1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-3 mb-lg-3 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/top2.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Corn</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/top2.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mb-lg-0 me-lg-0">
                        <div class="col-lg-12 second_cnt_wrapper">
                            <div class="row">
                                <div class="col-lg-5 col-5 d-md-flex align-items-md-center">
                                    <img src="{{ asset('frontend/images/top3.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-7 col-7 px-md-0 justify-content-md-start d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <div class="cnt">
                                        <a href="#" class="productNames">Fresh Cauliflower</a>
                            <p>$14.99</p>
                            <div class="reviews">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Links">
                                <ul>
                                    <li><a href="#"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a></li>
                                    <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="{{ asset('frontend/images/top3.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="sale_banner">
                        <div>
                            <h6>SUMMER SALE </h6>
                        <h2>75% off</h2>
                        <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
     </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                              Top Category                               -->
    <section id="top_category">
       <div class="container">
           <div class='heading'>
               <h2>Top Category</h2>
               <img src="{{ asset('frontend/images/Line.png') }}" alt="" class="img-fluid">
           </div>
           <div class="top_cat_slider">
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/Vegetable.png') }}" class="img-fluid" alt="">
                   <h6>Vegetable</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/fruits.png') }}" class="img-fluid" alt="">
                   <h6>Fresh Fruits</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/fish.png') }}" class="img-fluid" alt="">
                   <h6>River Fish</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/meat.png') }}" class="img-fluid" alt="">
                   <h6>Meat</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/soft-drink.png') }}" class="img-fluid" alt="">
                   <h6>Water and Drinks</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/meat.png') }}" class="img-fluid" alt="">
                   <h6>Meat</h6>
                   <p>165 Products</p>
                   </a>
               </div>
               <div class="top_cat_slider_cnt">
                   <a href="#">
                       <img src="{{ asset('frontend/images/Vegetable.png') }}" class="img-fluid" alt="">
                   <h6>Vegetable</h6>
                   <p>165 Products</p>
                   </a>
               </div>
           </div>
           <div class="leftArrow"><iconify-icon icon="solar:arrow-left-linear"></iconify-icon></div>
           <div class="rightArrow"><iconify-icon icon="solar:arrow-right-linear"></iconify-icon></div>
       </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                               Cot Section                               -->
    <section id="cot">
       <div class="container">
           <div class="row">
               <div class="col-lg mb-4 mb-lg-0 cot_bg1">
                   <h6>BEST DEAL</h6>
                   <h3>Sale of the month</h3>
                   <div class="row justify-content-center">
                       <div class="col-lg-8 d-flex justify-content-sm-center justify-content-between cot_sale_timer" id="cot_sale_timer">

                       </div>
                   </div>
                   <a href="#">Shop Now</a>
               </div>
               <div class="col-lg mb-4 mb-lg-0 cot_bg2">
                   <h6>BEST DEAL</h6>
                   <h3>Low-Fat Meat</h3>
                   <p>Up to <span class='span_1'>64% OFF</span></p>
                   <a href="#">Shop Now</a>
               </div>
               <div class="col-lg mb-lg-0 cot_bg3">
                   <h6>BEST DEAL</h6>
                   <h3>100% Fresh Fruit</h3>
                   <p>Starting from <span class="span_2">$79.99</span></p>
                   <a href="#">Shop Now</a>
               </div>
           </div>
       </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Newest Section                              -->
    <section id="home_new">
       <div class="container">
           <div class="row heading justify-content-between align-items-md-center mb-4">
               <div class="col-lg-4 col-md-4">
                   <h4>Newest Products</h4>
                   <img src="{{ asset('frontend/images/Line.png') }}" alt="">
               </div>
               <div class="col-lg-2 col-md-4 text-md-end">
                   <a href="{{ route('shop') }}">View All <iconify-icon icon="solar:arrow-right-outline"></iconify-icon></a>
               </div>
           </div>
           <div class="row">
               <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                   <div class="newProCard">
                       <div class="newProdImg">
                           <img src="{{ asset('frontend/images/newPro1.png') }}" class="img-fluid" alt="">
                           <ul class="newProCardLinks">
                               <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                               <li><a href="{{ asset('frontend/images/newPro1.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                           </ul>
                       </div>
                       <div class="newProdCnt">
                           <a href="#">Green Apple</a>
                           <p>$14.99</p>
                           <div class="newProReviews">
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                           </div>
                           <a href="#" class="newProcartBtn"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a>
                       </div>
                   </div>
               </div>
               <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                   <div class="newProCard">
                       <div class="newProdImg">
                           <img src="{{ asset('frontend/images/newPro2.png') }}" class="img-fluid" alt="">
                           <ul class="newProCardLinks">
                               <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                               <li><a href="{{ asset('frontend/images/newPro2.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                           </ul>
                       </div>
                       <div class="newProdCnt">
                           <a href="#">Cabbage</a>
                           <p>$14.99</p>
                           <div class="newProReviews">
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                           </div>
                           <a href="#" class="newProcartBtn"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a>
                       </div>
                   </div>
               </div>
               <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                   <div class="newProCard">
                       <div class="newProdImg">
                           <img src="{{ asset('frontend/images/newPro3.png') }}" class="img-fluid" alt="">
                           <ul class="newProCardLinks">
                               <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                               <li><a href="{{ asset('frontend/images/newPro3.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                           </ul>
                       </div>
                       <div class="newProdCnt">
                           <a href="#">Lettuce</a>
                           <p>$14.99</p>
                           <div class="newProReviews">
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                           </div>
                           <a href="#" class="newProcartBtn"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a>
                       </div>
                   </div>
               </div>
               <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                   <div class="newProCard">
                       <div class="newProdImg">
                           <img src="{{ asset('frontend/images/newPro4.png') }}" class="img-fluid" alt="">
                           <ul class="newProCardLinks">
                               <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                               <li><a href="{{ asset('frontend/images/newPro4.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                           </ul>
                       </div>
                       <div class="newProdCnt">
                           <a href="#">Capsicum</a>
                           <p>$14.99</p>
                           <div class="newProReviews">
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                           </div>
                           <a href="#" class="newProcartBtn"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a>
                       </div>
                   </div>
               </div>
               <div class="col-6 col-md col-lg">
                   <div class="newProCard">
                       <div class="newProdImg">
                           <img src="{{ asset('frontend/images/newPro5.png') }}" class="img-fluid" alt="">
                           <ul class="newProCardLinks">
                               <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a></li>
                               <li><a href="{{ asset('frontend/images/newPro5.png') }}" class="venobox" data-gall="gallery01"><iconify-icon icon="solar:eye-linear"></iconify-icon></a></li>
                           </ul>
                       </div>
                       <div class="newProdCnt">
                           <a href="#">Corn</a>
                           <p>$14.99</p>
                           <div class="newProReviews">
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                               <iconify-icon icon="material-symbols:star"></iconify-icon>
                           </div>
                           <a href="#" class="newProcartBtn"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="17" height="17"></iconify-icon></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                          Client Review Section                          -->
    <section id="clientsReview">
        <div class="container">
            <div class="heading mb-4">
                <h4>Client Testimonial</h4>
                <img src="{{ asset('frontend/images/Line.png') }}" alt="">
            </div>
            <div class="clientsReviewSlider">
                <div class="clientsReviewCnt">
                    <img src="{{ asset('frontend/images/semicolon.png') }}" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque culpa ex cum, nihil maxime eligendi dolore, error provident, expedita delectus vitae saepe! Assumenda, dolorum alias.</p>
                    <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="clientsDetails">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/images/clientImg.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="clientsRating">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clientsReviewCnt">
                    <img src="{{ asset('frontend/images/semicolon.png') }}" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque culpa ex cum, nihil maxime eligendi dolore, error provident, expedita delectus vitae saepe! Assumenda, dolorum alias.</p>
                    <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="clientsDetails">
                                <div class="row">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/images/clientImg.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="clientsRating">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clientsReviewCnt">
                    <img src="{{ asset('frontend/images/semicolon.png') }}" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus et nemo nobis veritatis quae, molestiae odit ipsum quos! Sunt, hic quia ullam labore perferendis aspernatur!</p>
                    <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="clientsDetails">
                                <div class="row">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/images/clientImg.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="clientsRating">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clientsReviewCnt">
                    <img src="{{ asset('frontend/images/semicolon.png') }}" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus et nemo nobis veritatis quae, molestiae odit ipsum quos! Sunt, hic quia ullam labore perferendis aspernatur!</p>
                    <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="clientsDetails">
                                <div class="row">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/images/clientImg.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="clientsRating">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clientsReviewCnt">
                    <img src="{{ asset('frontend/images/semicolon.png') }}" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, nam. Quisquam distinctio hic reprehenderit laudantium, dicta nemo aspernatur aliquid molestiae repudiandae rerum deleniti officiis adipisci.</p>
                    <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="clientsDetails">
                                <div class="row">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/images/clientImg.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="clientsRating">
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clientsleftArrow d-none d-md-block d-lg-block"><iconify-icon icon="solar:arrow-left-linear"></iconify-icon></div>
            <div class="clientsrightArrow d-none d-md-block d-lg-block"><iconify-icon icon="solar:arrow-right-linear"></iconify-icon></div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                            Instagram Section                            -->
    <section id="ig_follow">
        <div class="container">
            <div class="heading">
                <h4>Follow Us On Instagram</h4>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost1.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost5.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost2.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost3.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost4.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                    <div class="ig_cta">
                        <img src="{{ asset('frontend/images/igPost5.png') }}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="overlay_info">
                                <a href="#"><iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- ----------------------------------------------------------------------- -->

   

@endsection
