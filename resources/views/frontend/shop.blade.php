@extends('layouts.pageCover')
@section('title')
Shop
@endsection
@section('content')

<!-- ----------------------------------------------------------------------- -->
<!--                             Heading Section                             -->
<section id="heading">
    <div class="container">
        <div class="col-lg-12 col-12 d-flex">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadCrumb">
                <ol class="breadcrumb align-items-center">
                    <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}"><iconify-icon
                                icon="material-symbols-light:home-outline" width="24"
                                height="24"></iconify-icon></a></li>
                    <li class="breadcrumb-item" aria-current="page">Shop</li>
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
                <a href="{{ route('item', ['id' => 1]) }}">Shop Now <iconify-icon icon="solar:arrow-right-outline"></iconify-icon></a>
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
                                            <label for="range">Price range:</label>
                                            <div class="price-range">
                                                <div class="slider-track"></div>

                                                <input type="range" id="minRange" min="0" max="10000" value="500" step="1">
                                                <input type="range" id="maxRange" min="0" max="10000" value="5000" step="1">
                                            </div>

                                            <div class="price-values">
                                                <span>৳<span id="minValue">500</span></span>
                                                <span>৳<span id="maxValue">5000</span></span>
                                            </div>
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
                            <a href="{{ route('item', ['id' => 1]) }}"><img src="{{ asset('frontend/images/red chilli.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 3]) }}"><img src="{{ asset('frontend/images/potato.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 4]) }}"><img src="{{ asset('frontend/images/cabbage.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 5]) }}"><img src="{{ asset('frontend/images/corn.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 2]) }}"><img src="{{ asset('frontend/images/tom tom.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 6]) }}"><img src="{{ asset('frontend/images/begun.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 1]) }}"><img src="{{ asset('frontend/images/fulkopi.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 7]) }}"><img src="{{ asset('frontend/images/big image1.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 8]) }}"><img src="{{ asset('frontend/images/aamm.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 3]) }}"><img src="{{ asset('frontend/images/capcicum.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 9]) }}"><img src="{{ asset('frontend/images/kaca jhal.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 4]) }}"><img src="{{ asset('frontend/images/cucumba.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 7]) }}"><img src="{{ asset('frontend/images/big image1.png') }}" class="img-fluid" alt=""></a>
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
                            <a href="{{ route('item', ['id' => 2]) }}"><img src="{{ asset('frontend/images/litucce.png') }}" class="img-fluid" alt=""></a>
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


@endsection