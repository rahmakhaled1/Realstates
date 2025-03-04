
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../media/tap-icon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="../media/tap-icon.svg" />
    <link rel="apple-touch-icon" href="../media/tap-icon.svg" />
    <meta name="color-scheme" content="light only">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="../js/swiper-bundle.min.css">
    <link rel="stylesheet" href="../scss/style.css">
    <title>Project</title>
</head>

<body>
<!-- Start Nav -->
<nav>
    <div class="box f-s">
        <a href="../index.html" class="logo">
            <img src="../media/logo.png" alt="">
        </a>
        <div class="links">
            <div class="ls">
                <ul class="mainLinks">
                    <li><a class="link active" href="./home.html">Home</a></li>
                    <li><a class="link" href="./about.html">about</a></li>
                    <li><a class="link" href="./posts.html">Posts</a></li>
                    <li><a class="link" href="./services.html">services</a></li>
                </ul>
            </div>
        </div>
        <div class="last">
            <div class="mLinks">
                <a href="./contact.html">
                    Contact us
                </a>
            </div>
            <button class="menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
<!-- End Nav -->


<!-- Start Home -->
<div class="home">
    <img class="homeImg" src="../media/home.jpg" alt="">
    <div class="box homeContent">
        <div class="head">
            <h1>Find Your Perfect Home</h1>
            <span>IT’S GREAT TO BE HOME!</span>
        </div>
        <div class="filter">
            <div class="filtLinks">
                <a href="##">Buy</a>
                <a class="active" href="##">Rent</a>
                <a href="##">Sold</a>
            </div>
            <form action="">
                <div class="fTwo">
                    <div class="input2">
                        <span>TYPE</span>
                        <select name="" id="">
                            <option value="0">Properity Type</option>
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>
                    <div class="input2">
                        <span>LOCATION</span>
                        <select name="" id="">
                            <option value="0">All Cities</option>
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>
                </div>
                <div class="fTwo">
                    <div class="input2">
                        <span>SEARCH</span>
                        <input type="text" placeholder="Enter Keywords">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </div>
                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i> SEARCH</button>
                </div>
            </form>
        </div>
    </div>
    <a class="goDown" href="#about">
        <i class="fa-solid fa-angle-down"></i>
    </a>
</div>
<!-- End Home -->

<!-- Start About -->
<div class="about" id="about">
    <div class="box aboutBox">
        <div class="aboutText">
            <div class="text">
                <h1>About Us</h1>
                <p>is simply dummy text of the print ingand typesetting industry. Lorem Ipsumhas been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop
                    publishing software like AldusPageMakerincludingversions of Lorem Ipsum
                </p>
            </div>
            <img src="../media/about1.jpg" alt="">
        </div>
        <div class="i2">
            <img src="../media/about2.jpg" alt="">
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Services -->
<div class="center" id="services">
    <div class="box services">
        <div class="service">
            <div class="serv-img">
                <img src="../media/icons/rent.png" alt="">
            </div>
            <div class="serv-text">
                Affordable rental units
                with modern amenities.
            </div>
            <a href="./rent.html">For Rent</a>
        </div>
        <div class="service">
            <div class="serv-img">
                <img src="../media/icons/rent.png" alt="">
            </div>
            <div class="serv-text">
                Investment opportunity:
                Prime real estate for sale.
            </div>
            <a href="./sell.html">For Sale</a>
        </div>
        <div class="service">
            <div class="serv-img">
                <img src="../media/icons/rent.png" alt="">
            </div>
            <div class="serv-text">
                Affordable rental units
                with modern amenities.
            </div>
            <a href="./buy.html">For Buy</a>
        </div>
    </div>
</div>
<!-- End Services -->


<!-- Start Top Houses -->
<div class="center pb100" id="posts">
    <div class="box fdc">
        <h1>Top Homes For Sale , Rent , Buy.</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Rent</div>
                        <img src="../media/images/house1.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Buy</div>
                        <img src="../media/images/house2.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Sell</div>
                        <img src="../media/images/house1.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Rent</div>
                        <img src="../media/images/house1.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Buy</div>
                        <img src="../media/images/house2.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./details.html" class="house">
                        <div class="for">For Sell</div>
                        <img src="../media/images/house1.jpg" alt="">
                        <div class="house-text">
                            <h3>Home in Mansoura city</h3>
                            <p>3 rooms , 2 bathrooms , 1 kitchen , Small Garden , 2 Floor</p>
                            <span>250 sqm</span>
                        </div>
                        <div class="price"><span>EGP 2.000.000</span> <button><i class="fa-regular fa-plus"></i> Add to
                                favourite</button></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Top Houses -->

<!-- start footer -->
<footer>
</footer>
<!-- end footer -->

</body>
<script src="../js/main.js"></script>
<script src="../js/filter.js"></script>
<script src="../js/footer.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/swiper.js"></script>
<div>
    <a href="{{ route('logout') }}" class="btn btn-primary" id="logout-link" role="button">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
            event.preventDefault();  // يمنع الرابط من فتح صفحة جديدة
            document.getElementById('logout-form').submit();  // إرسال النموذج باستخدام POST
        });
    </script>
</div>
</html>
