<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Cabbage</title>
    <link rel="icon" href="./images/icon.png">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/venobox.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel='stylesheet' href="./css/responsive.css">
</head>

<body>
    <!-- ----------------------------------------------------------------------- -->
    <!--                                 Header                                  -->
    <header id="header">
        <div class="headerTop">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <address><iconify-icon icon="tdesign:location" width="16" height="18"></iconify-icon> Store Location: Lincoln- 344, Illinois, Chicago, USA</address>
                    </div>
                    <div class="col-lg-6 d-none d-lg-flex justify-content-end align-items-center">
                        <form>
                            <select>
                                <option value="">ENG</option>
                                <option value="">BN</option>
                            </select>
                            <select>
                                <option value="">USD</option>
                                <option value="">BDT</option>
                            </select>
                        </form>
                        <div class="anchor"><a href="./signIn.html">Sign In</a> / <a href="./signUp.html">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerMid d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="logo col-lg-3">
                        <a href="./index.html"><img src="./images/Logo.png" alt=""></a>
                    </div>
                    <div class="search col-lg-6">
                        <form>
                            <iconify-icon icon="akar-icons:search" width="24" height="24"></iconify-icon>
                            <input type="search" placeholder="Search">
                            <button>Search</button>
                        </form>
                    </div>
                    <div class="links col-lg-3 text-end">
                        <ul>
                            <li>
                                <a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                            </li>
                            <li>
                                <a href="./cart.html" class="cart d-flex text-start align-items-center">
                                    <div class="cartC">
                                        <iconify-icon icon="streamline:shopping-bag-hand-bag-2"></iconify-icon>
                                        <div class="count"> 2 </div>
                                    </div>
                                    <div class="content">
                                        <p>Shopping cart:</p>
                                        <h4>$57.00</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerBottom d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="d-flex">
                            <li>
                                <a href="./index.html">Home</a>
                            </li>
                            <li>
                                <a href="./shop.html">Shop <iconify-icon icon="oui:arrow-down" width="14" height="14"></iconify-icon></a>
                                <ul class="home">
                                    <li>
                                        <a href="./shop.html">Categories</a>
                                        <ul class="homeCat">
                                            <li><a href="./shop.html">Vegetables</a></li>
                                            <li><a href="./shop.html">Fruits</a></li>
                                            <li><a href="./shop.html">Grains</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./signIn.html">Wishlist</a></li>
                                    <li><a href="./cart.html">Shopping Cart</a></li>
                                    <li><a href="./index.html#home_new">Blog</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./index.html#home_new">Blog <iconify-icon icon="oui:arrow-down" width="14" height="14"></iconify-icon></a>
                                <ul class="blogg">
                                    <li><a href="./index.html#home_new">Single blog</a></li>
                                    <li><a href="./index.html#home_new">Double blog</a></li>
                                    <li><a href="./index.html#home_new">Tripple blog</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./index.html#otherService">About Us</a>
                            </li>
                            <li>
                                <a href="./index.html#home_newsletter">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-end">
                        <a href="tel:(219) 555-0114" class="call"><iconify-icon icon="lucide:phone-call"></iconify-icon>(219) 555-0114</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mblHdr d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <button class="mobMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <iconify-icon icon="jam:menu" width="28" height="28"></iconify-icon>
                        </button>
                    </div>
                    <div class="col-6 text-center">
                        <a href="./index.html"><img src="./images/Logo.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col">
                        <div class="links col-lg-3 text-end">
                            <ul>
                                <li>
                                    <button class="search" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                        aria-controls="offcanvasBottom"><iconify-icon icon="iconamoon:search-light"></iconify-icon></button>
                                    
                                    <div class="searchPlate offcanvas offcanvas-bottom h-100" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                        <div class="offcanvas-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="searchBar offcanvas-body">
                                            <form>
                                                <input type="search" placeholder="Search">
                                                <iconify-icon icon="iconamoon:search-light"></iconify-icon>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button class="cart d-flex text-start align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">
                                    <div class="cartC">
                                            <iconify-icon icon="streamline:shopping-bag-hand-bag-2"></iconify-icon>
                                            <div class="count"> 2 </div>
                                        </div>
                                    </button>
                                    
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h1 class="offcanvas-title" id="offcanvasRightLabel"><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="24" height="24"></iconify-icon> Cart</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="cartBoard offcanvas-body">
                                            <div class="cartItem d-flex">
                                                <div class="col-3">
                                                    <a href="./item.html"><img src="./images/aamm.png" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="col-9">
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
                                            <div class="cartItem d-flex">
                                                <div class="col-3">
                                                    <a href="./item.html"><img src="./images/aamm.png" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="col-9">
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
                                            <div class="cartItem d-flex">
                                                <div class="col-3">
                                                    <a href="./item.html"><img src="./images/aamm.png" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="col-9">
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
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="hdr offcanvas-header">
                        <h1>Menu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form>
                                <iconify-icon icon="akar-icons:search" width="24" height="24"></iconify-icon>
                                <input type="search" placeholder="Search">
                                <button>Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="offcanvas-body phnMenu">
                        <ul class="align-items-center">
                            <li><a href="./index.html">Home</a></li>
                            <li>
                                <p class="d-inline-flex gap-1">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">Shop</a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <ul>
                                            <li><a href="./shop.html">Categories</a></li>
                                            <li><a href="./signIn.html">Wishlist</a></li>
                                            <li><a href="./cart.html">Shopping Cart</a></li>
                                    </div>
                                </div>
                            </li>
                            <li><a href="./index.html#home_new">Blog</a></li>
                            <li><a href="./index.html#otherService">About</a></li>
                        </ul>
                        <a href="./signIn.html" class="prfl text-center d-block py-3">Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Heading Section                             -->
    <section id="navigationBar">
        <div class="container">
            <div class="col-lg-12 col-12 d-flex">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadCrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><iconify-icon
                                    icon="material-symbols-light:home-outline" width="24"
                                    height="24"></iconify-icon></a></li>
                        <li class="breadcrumb-item" aria-current="page">Categories</li>
                        <li class="breadcrumb-item on" aria-current="page">Vegetable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    

    <!-- ----------------------------------------------------------------------- -->
    <!--                         Product Details Seciton                         -->
    <section id="pro_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <div class="productDemo">
                        <a href="#"><img src="./images/product demo.png" alt=""></a>
                        <a href="#"><img src="./images/product demo(1).png" alt=""></a>
                        <a href="#"><img src="./images/product demo(2).png" alt=""></a>
                        <a href="#"><img src="./images/product demo(3).png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="productImg">
                        <img src="./images/Product Image.png" class="img-fluid" alt="">
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
                                <img src="./images/brand logo.png" alt="" class="img-fluid">
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
                            <img src="./images/sobjiwala.png" alt="" class="img-fluid">
                            <div class="ajaira">
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="./images/damer tag.png" alt="" class="img-fluid">
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
                                            <img src="./images/pata.png" alt="" class="img-fluid">
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
                            <img src="./images/sobjiwala.png" alt="" class="img-fluid">
                            <div class="ajaira">
                                <div class="col-lg-6">
                                    <div class="hudai">
                                        <div class="hudai1">
                                            <img src="./images/damer tag.png" alt="" class="img-fluid">
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
                                            <img src="./images/pata.png" alt="" class="img-fluid">
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
                                        <img src="./images/newPro1.png" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="./images/newPro1.png" class="venobox"
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
                                        <img src="./images/newPro2.png" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="./images/newPro2.png" class="venobox"
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
                                        <img src="./images/newPro3.png" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="./images/newPro3.png" class="venobox"
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
                                        <img src="./images/newPro4.png" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="./images/newPro4.png" class="venobox"
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
                                        <img src="./images/newPro5.png" class="img-fluid" alt="">
                                        <ul class="newProCardLinks">
                                            <li><a href="./signIn.html"><iconify-icon icon="solar:heart-linear"></iconify-icon></a>
                                            </li>
                                            <li><a href="./images/newPro5.png" class="venobox"
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

    <!-- ----------------------------------------------------------------------- -->
    <!--                           Newsletter Section                            -->
    <section id="home_newsletter">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-2">
                    <div class="newsletterlogo">
                        <img src="./images/Logo.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                    <div class="newsletterTypo">
                        <h5>Subscribe to our Newsletter</h5>
                        <p>Pellentesque eu nibh eget mauris congue mattis matti</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-lg-flex justify-content-end">
                    <div class="mailSubmit">
                        <input type="mail" placeholder="Your Email Address">
                        <a href="#">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Footer Section                              -->
    <footer>
        <div class="container">
            <div class="row pb-lg-5">
                <div class="col-lg-3">
                    <div class="description">
                        <h5>About Shopery</h5>
                        <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna
                            congue
                            nec.</p>
                        <a class="supportNumberMail" href="callto:(219) 555-0114">(219) 555-0114</a>
                        <span>or</span>
                        <a class="supportNumberMail" href="mailto:proxy@gmail.com">proxy@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="my_account">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="./signIn.html">Wishlist</a></li>
                            <li><a href="#">Setting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="helps">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="proxy">
                        <h5>Proxy</h5>
                        <ul>
                            <li><a href="./index.html#otherService">About</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Products Details</a></li>
                            <li><a href="#">Track Order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="download_apps">
                        <h5>Download Our Mobile App</h5>
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-6">
                                <div class="appstore">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <span class="apps_logo"><iconify-icon
                                                    icon="ic:baseline-apple"></iconify-icon></span>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <a href="#">
                                                Download on the <span>App Store</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="playstore">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <span class="apps_logo"><iconify-icon
                                                    icon="mage:playstore"></iconify-icon></span>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <a href="#">
                                                Download on the <span>Play Store</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-lg-between copyright">
                <div class="col-lg-3">
                    <div class="footer_social_links">
                        <ul>
                            <li><a href="#"><iconify-icon icon="ri:facebook-fill"></iconify-icon></a></li>
                            <li><a href="#"><iconify-icon icon="mynaui:twitter"></iconify-icon></a></li>
                            <li><a href="#"><iconify-icon icon="mingcute:pinterest-line"></iconify-icon></a></li>
                            <li><a href="#"><iconify-icon icon="mdi:instagram"></iconify-icon></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-flex justify-content-lg-center">
                    <p>Ecobazar eCommerce Â© 2021. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 d-lg-flex justify-content-lg-end">
                    <img src="./images/Payment Method.png" class="img-fluid payment_img" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- ----------------------------------------------------------------------- -->

    <a href="#" class="goToTop"><iconify-icon icon="ep:arrow-up-bold"></iconify-icon></a>

    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/venobox.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.countdown.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
