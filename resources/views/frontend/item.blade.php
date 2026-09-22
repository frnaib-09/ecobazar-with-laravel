@extends('layouts.pageCover')
@section('title')
Item Details
@endsection
@section('content')
    
    <!-- ----------------------------------------------------------------------- -->
    <!--                         Product Details Seciton                         -->
    <section id="pro_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <div class="productDemo">
                        <a href="#"><img src="{{ asset('frontend/images/product demo.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/product demo(1).png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/product demo(2).png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/product demo(3).png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="productImg">
                        <img src="{{ asset('frontend/images/Product Image.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="productCnt">
                        <h2>Chinese Cabbage <span>In Stock</span></h2>
                        <div class="stars d-flex align-items-center">
                            <iconify-icon icon="material-symbols:star" width="18" height="18"></iconify-icon>
                            <iconify-icon icon="material-symbols:star" width="18" height="18"></iconify-icon>
                            <iconify-icon icon="material-symbols:star" width="18" height="18"></iconify-icon>
                            <iconify-icon icon="material-symbols:star" width="18" height="18"></iconify-icon>
                            <iconify-icon icon="material-symbols:star" width="18" height="18"></iconify-icon>
                            <p>4 Reviews</p>
                            <span>â€¢</span>
                            <h6>SKU: <span>2,51,594</span></h6>
                        </div>
                        <h3><del>$48.00</del><span>$17.28</span> <span class="off">64% Off</span></h3>
                        <hr>
                        <div class="brand d-flex align-items-center justify-content-between">
                            <div class="brandLeft col-lg-4 d-flex align-items-center">
                                <p>Brand: </p>
                                <img src="{{ asset('frontend/images/brand logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="brandRight col-lg-8 d-flex align-items-center">
                                <p>Share item:</p>
                                <ul class="d-flex">
                                    <li><a href="#"><iconify-icon icon="fa7-brands:facebook-f" width="20"
                                                height="20"></iconify-icon></a></li>
                                    <li><a href="#"><iconify-icon icon="mdi:twitter" width="20"
                                                height="20"></iconify-icon></a></li>
                                    <li><a href="#"><iconify-icon icon="fa6-brands:pinterest-p" width="20"
                                                height="20"></iconify-icon></a></li>
                                    <li><a href="#"><iconify-icon icon="mdi:instagram" width="20"
                                                height="20"></iconify-icon></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prgrph">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a
                            consequat pulvinar.</p>
                    </div>
                    <hr>
                    <div class="addtocart d-flex align-items-center justify-content-between">
                        <div class="limit col-lg-3">
                            <button class="minus">-</button>
                            <input id="quantity" type="number" value="1" min="1">
                            <button class="plus">+</button>
                        </div>
                        <div class="addcart col-lg-7 justify-content-center d-flex">
                            <button>Add to Cart <iconify-icon icon="heroicons:shopping-bag" width="24"
                                    height="24"></iconify-icon></button>
                        </div>
                        <div class="wishlist col-lg-2">
                            <button><iconify-icon icon="solar:heart-linear" width="20"
                                    height="20"></iconify-icon></button>
                        </div>
                    </div>
                    <hr>
                    <div class="btm">
                        <p>Category: <span>Vegetables</span></p>
                        <div class="detTag">
                            <h6>Tag: </h6>
                            <ul class="d-flex">
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Healthy</a></li>
                                <li><a href="#" class="pwr">Chinese Cabbage</a></li>
                                <li><a href="#">Green Cabbage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#desc" type="button">Descriptions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#info" type="button">Additional
                            Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#feedback" type="button">Customer
                            Feedback</a>
                    </li>
                </ul>
                <div class="nav-link active" id="desc" data>
                    <div class="description d-flex gap-4">
                        <div class="desLeft col-lg-6">
                            <p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at
                                mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor
                                lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum
                                sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et
                                condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a
                                convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec
                                convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.</p>
                            <br>
                            <p>Nulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus
                                faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi
                                eget nulla. Proin luctus elementum neque et pharetra. </p>
                            <br>
                            <ul class="checklist">
                                <li>100 g of fresh leaves provides.</li>
                                <li>Aliquam ac est at augue volutpat elementum.</li>
                                <li>Quisque nec enim eget sapien molestie.</li>
                                <li>Proin convallis odio volutpat finibus posuere.</li>
                            </ul>
                            <br>
                            <p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non
                                turpis lobortis iaculis at ut massa. </p>
                        </div>
                        <div class="defRight col-lg-6">
                            <img src="{{ asset('frontend/images/sobjiwala.png') }}" alt="" class="img-fluid">
                            <div class="ajaira">
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="{{ asset('frontend/images/damer tag.png') }}" alt="" class="img-fluid">
                                            <ul>
                                                <li><b>64% Discount</b></li>
                                                <li>Save your 64% money with us</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="{{ asset('frontend/images/pata.png') }}" alt="" class="img-fluid">
                                            <ul>
                                                <li><b>100% Organic</b></li>
                                                <li>100% Organic Vegetables</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-link" id="info" data>
                    <div class="informaiton d-flex gap-4">
                        <div class="infoLeft col-lg-6">
                            <h6>Weight: <span>03</span></h6>
                            <h6>Color: <span>Green</span></h6>
                            <h6>Type: <span>Organic</span></h6>
                            <h6>Category: <span>Vegetables</span></h6>
                            <h6>Stock Status: <span>Available <span>(5,413)</span></span></h6>
                            <h6 class="d-flex gap-2">Tags: <p><a href="#">Vegetables</a>, <a href="#">Healthy</a>, <a
                                        href="#" class="pwr">Chinese Cabbage</a>, <a href="#">Green Cabbage</a></p>
                            </h6>
                        </div>
                        <div class="defRight col-lg-6">
                            <img src="{{ asset('frontend/images/sobjiwala.png') }}" alt="" class="img-fluid">
                            <div class="ajaira">
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="{{ asset('frontend/images/damer tag.png') }}" alt="" class="img-fluid">
                                            <ul>
                                                <li><b>64% Discount</b></li>
                                                <li>Save your 64% money with us</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="{{ asset('frontend/images/pata.png') }}" alt="" class="img-fluid">
                                            <ul>
                                                <li><b>100% Organic</b></li>
                                                <li>100% Organic Vegetables</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-link" id="feedback" data>
                    <p>This is Customer Feedback</p>
                </div>

                <section id="home_new" class="relate">
                    <div class="container">
                        <div class="row heading justify-content-between align-items-md-center mb-4">
                            <div class="col-lg-4 col-md-4">
                                <h4>Related Products</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 text-md-end">
                                <a href="#">View All <iconify-icon icon="solar:arrow-right-outline"></iconify-icon></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                                <div class="newProCard">
                                    <div class="newProdImg">
                                        <img src="{{ asset('frontend/images/newPro1.png') }}" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="{{ asset('frontend/signIn.html') }}"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="{{ asset('frontend/images/newPro1.png') }}" class="venobox"
                                                    data-gall="gallery01"><iconify-icon
                                                        icon="solar:eye-linear"></iconify-icon></a></li>
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
                                        <a href="#" class="newProcartBtn"><iconify-icon
                                                icon="streamline:shopping-bag-hand-bag-2" width="17"
                                                height="17"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                                <div class="newProCard">
                                    <div class="newProdImg">
                                        <img src="{{ asset('frontend/images/newPro2.png') }}" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="{{ asset('frontend/signIn.html') }}"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="{{ asset('frontend/images/newPro2.png') }}" class="venobox"
                                                    data-gall="gallery01"><iconify-icon
                                                        icon="solar:eye-linear"></iconify-icon></a></li>
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
                                        <a href="#" class="newProcartBtn"><iconify-icon
                                                icon="streamline:shopping-bag-hand-bag-2" width="17"
                                                height="17"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                                <div class="newProCard">
                                    <div class="newProdImg">
                                        <img src="{{ asset('frontend/images/newPro3.png') }}" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="{{ asset('frontend/signIn.html') }}"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="{{ asset('frontend/images/newPro3.png') }}" class="venobox"
                                                    data-gall="gallery01"><iconify-icon
                                                        icon="solar:eye-linear"></iconify-icon></a></li>
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
                                        <a href="#" class="newProcartBtn"><iconify-icon
                                                icon="streamline:shopping-bag-hand-bag-2" width="17"
                                                height="17"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md col-lg mb-2 mb-lg-0">
                                <div class="newProCard">
                                    <div class="newProdImg">
                                        <img src="{{ asset('frontend/images/newPro4.png') }}" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="{{ asset('frontend/signIn.html') }}"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="{{ asset('frontend/images/newPro4.png') }}" class="venobox"
                                                    data-gall="gallery01"><iconify-icon
                                                        icon="solar:eye-linear"></iconify-icon></a></li>
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
                                        <a href="#" class="newProcartBtn"><iconify-icon
                                                icon="streamline:shopping-bag-hand-bag-2" width="17"
                                                height="17"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md col-lg">
                                <div class="newProCard">
                                    <div class="newProdImg">
                                        <img src="{{ asset('frontend/images/newPro5.png') }}" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="{{ asset('frontend/signIn.html') }}"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="{{ asset('frontend/images/newPro5.png') }}" class="venobox"
                                                    data-gall="gallery01"><iconify-icon
                                                        icon="solar:eye-linear"></iconify-icon></a></li>
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
                                        <a href="#" class="newProcartBtn"><iconify-icon
                                                icon="streamline:shopping-bag-hand-bag-2" width="17"
                                                height="17"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

@endsection