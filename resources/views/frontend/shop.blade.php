<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobazar - Categories</title>
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
    <section id="heading">
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
    <!--                            top data section                             -->
    <section id="topData">
        <div class="container">
            <div class="row">
                <div class="col-lg col">
                    <p>Best Deals</p>
                    <h3>Sale of the Month</h3>
                    <div class="countDown d-flex align-items-center" id="get-started">
                        <div class="box">
                            <h4 id="days">00</h4>
                            <p>Days</p>
                        </div>
                        <div class="box">
                            <h4 id="hours">00</h4>
                            <p>Hours</p>
                        </div>
                        <div class="box">
                            <h4 id="minutes">00</h4>
                            <p>Mins</p>
                        </div>
                        <div class="box">
                            <h4 id="seconds">00</h4>
                            <p>Secs</p>
                        </div>
                    </div>
                    <a href="#">Shop Now <iconify-icon icon="solar:arrow-right-outline"></iconify-icon></a>
                </div>
                <div class="offertag">
                    <h2>56%</h2>
                    <span>off</span>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                             Filter Section                              -->
    <section id="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <button class="btn filterBtn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Filter
                        <iconify-icon icon="lets-icons:filter-big" width="22" height="22"></iconify-icon></button>

                    <div class="offcanvas offcanvas-start showdown" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Filter <iconify-icon
                                    icon="lets-icons:filter-big" width="22" height="22"></iconify-icon></h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed btnshadow" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <b>All Categories</b>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <input name="category" type="radio" id="fruit"><label for="fruit">Fresh
                                                Fruit (25) <span>(134)</span></label><br><br>
                                            <input name="category" type="radio" id="veg"><label for="veg">Vegetables
                                                <span>(150)</span></label><br><br>
                                            <input name="category" type="radio" id="cook"><label for="cook">Cooking
                                                <span>(54)</span></label><br><br>
                                            <input name="category" type="radio" id="snack"><label for="snack">Snacks
                                                <span>(47)</span></label><br><br>
                                            <input name="category" type="radio" id="bever"><label for="bever">Beverages
                                                <span>(43)</span></label><br><br>
                                            <input name="category" type="radio" id="beauty"><label for="beauty">Beauty &
                                                Health <span>(38)</span></label><br><br>
                                            <input name="category" type="radio" id="bread"><label for="bread">Bread &
                                                Bakery</label><br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed btnshadow" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <b>Price</b>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="filter-container">
                                                <label for="amount">Price range:</label>
                                                <div class="price-inputs">
                                                    <input type="text" id="amount-min" readonly>
                                                    <input type="text" id="amount-max" readonly>
                                                </div>
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed btnshadow" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <b>Rating</b>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <input type="checkbox" id="5s">
                                            <label for="5s">
                                                <div class="ratings d-flex">
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <span>5.0</span>
                                                </div>
                                            </label><br><br>
                                            <input type="checkbox" id="4s">
                                            <label for="4s">
                                                <div class="ratings d-flex">
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <span>4.0 & up</span>
                                                </div>
                                            </label><br><br>
                                            <input type="checkbox" id="3s">
                                            <label for="3s">
                                                <div class="ratings d-flex">
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <span>3.0 & up</span>
                                                </div>
                                            </label><br><br>
                                            <input type="checkbox" id="2s">
                                            <label for="2s">
                                                <div class="ratings d-flex">
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <span>2.0 & up</span>
                                                </div>
                                            </label><br><br>
                                            <input type="checkbox" id="1s">
                                            <label for="1s">
                                                <div class="ratings d-flex">
                                                    <iconify-icon class="active"
                                                        icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                                    <span>1.0 & up</span>
                                                </div>
                                            </label><br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed btnshadow" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            <b>Popular Tag</b>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="tagsCon">
                                                <button>Healthy</button>
                                                <button>Vegetarian</button>
                                                <button class="active">Low Fat</button>
                                                <button>Kid Foods</button>
                                                <button>Vitamins</button>
                                                <button>Bread</button>
                                                <button>Meat</button>
                                                <button>Snacks</button>
                                                <button>Tiffin</button>
                                                <button>Lunch</button>
                                                <button>Dinner</button>
                                                <button>Breakfast</button>
                                                <button>Fruits</button>
                                            </div>
                                        </div>
                                    </div>
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
    <!--                            Veg Menu Section                             -->
    <section id="vegMenu">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/red chilli.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Red Chili</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/potato.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Potato</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="./item.html"><img src="./images/cabbage.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Chinese Cabbage</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/corn.png" class="img-fluid" alt=""></a>
                                <div class="stkout">Out of Stock</div>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Corn</p>
                                <h5>$14.99 <span>$20.99</span></h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/tom tom.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Red Tomato</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/begun.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Eggplant</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/fulkopi.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Fresh Cauliflower</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/big image1.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Apple</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/aamm.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Fresh Mango</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/capcicum.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Capsicum</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/kaca jhal.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Chili</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/cucumba.png" class="img-fluid" alt=""></a>
                                <div class="sale">Sale 50%</div>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Cucumber</p>
                                <h5>$14.99 <span>$20.99</span></h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/big image1.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Apple</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="parent">
                        <div class="child">
                            <div class="childImg">
                                <a href="#"><img src="./images/litucce.png" class="img-fluid" alt=""></a>
                                <ul class="link">
                                    <li><a href="#" class="heart"><iconify-icon
                                                icon="solar:heart-linear"></iconify-icon></a></li>
                                    <li><a href="#" class="eye"><iconify-icon icon="lucide:eye"></iconify-icon></a></li>
                                </ul>
                            </div>
                            <div class="childContent">
                                <p>Green Lettuce</p>
                                <h5>$14.99</h5>
                                <div class="clientsRating">
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols:star"></iconify-icon>
                                </div>
                                <a href="#" class="bagwati"><iconify-icon icon="streamline:shopping-bag-hand-bag-2"
                                        width="17" height="17"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- ----------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------- -->
    <!--                               Pagination                                -->
    <nav aria-label="Page navigation example">
        <ul class="pagination pg_num">
            <li class="page-item">
                <a class="page-lin" href="#" aria-label="Previous">
                    <span class="move" aria-hidden="true"><iconify-icon icon="oui:arrow-left" width="20"
                            height="20"></iconify-icon></span>
                </a>
            </li>
            <li class="page-item"><a class="page-link present" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-lin" href="#" aria-label="Next">
                    <span class="move" aria-hidden="true"><iconify-icon icon="oui:arrow-right" width="20"
                            height="20"></iconify-icon></span>
                </a>
            </li>
        </ul>
    </nav>
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
                            congue nec.</p>
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
