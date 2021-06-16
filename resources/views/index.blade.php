<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="undefined" crossorigin="anonymous">

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}

    

    <!-- ***** datepicker ***** -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />

    <!-- ***** Dancing script ***** -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />


    <title>Klassy</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <div class="logo">
                            <a href="{{ route('index') }}" class="logo">
                                <img src="./klassy-logo.png" align="klassy cafe html template">
                            </a>
                        </div>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('index') }}" class="active">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#chefs">Chefs</a></li>
                            <li><a href="#features" class="Features">Features <i class="fa fa-chevron-down"
                                        aria-hidden="true" style="font-size:10px; color:rgb(131, 126, 127)"></i></a>
                                <ul>
                                    <li><a href="#"> Page 1</a></li>
                                    <li><a href="#"> Page 2</a></li>
                                    <li><a href="#"> Page 3</a></li>
                                    <li><a href="#"> Page 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                        <!-- ***** Menu End ***** -->

                    </nav>
                </div>
                <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid" style="margin-left:0px">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="reserve-btn">
                                <a href="#reservation" class="active">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/slide-01.jpg" alt="slide-01" height="700px">
                            </div>
                            <div class="carousel-item">
                                <img src="/slide-02.jpg" alt="slide-02" height="700px">
                            </div>
                            <div class="carousel-item">
                                <img src="/slide-03.jpg" alt="slide-03" height="700px">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slider" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#slider" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant"
                                target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS
                            framework. You can download and feel free to use this website template layout for your
                            restaurant business. You are allowed to use this template for commercial purposes.
                            <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload
                            website. Please contact us for more information.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="https://templatemo.com/templates/templatemo_558_klassy_cafe/assets/images/about-thumb-01.jpg"
                                    alt="">
                            </div>
                            <div class="col-4">
                                <img src="https://templatemo.com/templates/templatemo_558_klassy_cafe/assets/images/about-thumb-02.jpg"
                                    alt="">
                            </div>
                            <div class="col-4">
                                <img src="https://templatemo.com/templates/templatemo_558_klassy_cafe/assets/images/about-thumb-03.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="https://templatemo.com/templates/templatemo_558_klassy_cafe/assets/images/about-video-bg.jpg"
                                alt="cafe video" height="450px" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>

            {{-- <div class="slider owl-carousel">
                <div class="card">
                    <div class="card1">
                        <div class="img">

                        </div>
                        <div class="content">
                            <div class="title">
                                Briana Tozour
                            </div>
                            <div class="sub-title">
                                Graphic Designer
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae
                                animi nihil minus sed unde voluptas cumque.
                            </p>
                            <div class="btn">
                                <button>Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card1">
                        <div class="img">

                        </div>
                        <div class="content">
                            <div class="title">
                                Briana Tozour
                            </div>
                            <div class="sub-title">
                                Graphic Designer
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae
                                animi nihil minus sed unde voluptas cumque.
                            </p>
                            <div class="btn">
                                <button>Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card1">
                        <div class="img">

                        </div>
                        <div class="content">
                            <div class="title">
                                Briana Tozour
                            </div>
                            <div class="sub-title">
                                Graphic Designer
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae
                                animi nihil minus sed unde voluptas cumque.
                            </p>
                            <div class="btn">
                                <button>Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-12 menu-list">
                <div class="col-xm-3 menu-box p-0">
                    <div class="price-box m-0 p-0">
                        <h1 class="text-white text-center">$7.25</h1>
                    </div>
                    <div class="menu-image">
                        <img src="/menu-item-01.jpg" class="img-fluid" alt="" >
                    </div>
                    <div class="menu-info">
                        <div class="info-head">
                            <h4>Klassic Cake</h4>
                        </div>
                        <div class="info-detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Vitae delectus fugit </p>
                        </div>
                    </div>
                </div>

                <div class="col-xm-3 menu-box p-0">
                    <div class="price-box m-0 p-0">
                        <h1 class="text-white text-center">$14</h1>
                    </div>
                    <div class="menu-image">
                        <img src="/menu-item-02.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="menu-info">
                        <div class="info-head">
                            <h4>Chocolate Cake</h4>
                        </div>
                        <div class="info-detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Vitae delectus fugit </p>
                        </div>
                    </div>
                </div>

                <div class="col-xm-3 offset-xm-3 menu-box p-0">
                    <div class="price-box m-0 p-0">
                        <h1 class="text-white text-center">$22</h1>
                    </div>
                    <div class="menu-image">
                        <img src="/menu-item-03.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="menu-info">
                        <div class="info-head">
                            <h4>Klassic Pancake</h4>
                        </div>
                        <div class="info-detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Vitae delectus fugit </p>
                        </div>
                    </div>
                </div>

                <div class="col-xm-3 menu-box p-0">
                    <div class="price-box m-0 p-0">
                        <h1 class="text-white text-center">$18</h1>
                    </div>
                    <div class="menu-image">
                        <img src="/menu-item-04.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="menu-info">
                        <div class="info-head">
                            <h4>Blueberry Cake</h4>
                        </div>
                        <div class="info-detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Vitae delectus fugit </p>
                        </div>
                    </div>
                </div>

                <div class="col-xm-3 menu-box p-0">
                    <div class="price-box m-0 p-0">
                        <h1 class="text-white text-center">$8.50</h1>
                    </div>
                    <div class="menu-image">
                        <img src="/menu-item-05.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="menu-info">
                        <div class="info-head">
                            <h4>Klassy CupCake</h4>
                        </div>
                        <div class="info-detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Vitae delectus fugit </p>
                        </div>
                    </div>
                </div>

            </div>
        {{-- </div>  --}}

    </section>
    <!-- ***** Menu Area Ends ***** -->
    <!-- ***** Chefs Area starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h5>Our Chefs</h5>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 single">
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="chefs-01.jpg"
                                alt="Chef #1">
                       
                        <div class="overlay">
                            <div class="social-icons">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-instagram" ></i>
                            </div>
                        </div>
                        </div>
                        <div class="text">
                            <h4>Randy Walker</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single">
                    <div class="chef-item">
                        <div class="thumb">
<img src="chefs-02.jpg"
                                alt="Chef #2">
                            <div class="overlay">
                                <div class="social-icons">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-behance" ></i>
                                </div>
                            </div>
                            
                        </div>
                        <div class="text">
                            <h4>David Martin</h4>
                            <span>Cookie Chef</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 single">
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="chefs-03.jpg"
                                alt="Chef #1">
                       
                        <div class="overlay">
                            <div class="social-icons">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-google" ></i>
                            </div>
                        </div>
                        </div>
                        <div class="text">
                            <h4>Randy Walker</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
    <!-- ***** Reservation Area starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                            sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select value="number-guests" name="number-guests" id="number-guests">
                                        <option value="number-guests">Number Of Guests</option>
                                        <option name="1">1</option>
                                        <option name="2">2</option>
                                        <option name="3">3</option>
                                        <option name="4">4</option>
                                        <option name="5">5</option>
                                        <option name="6">6</option>
                                        <option name="7">7</option>
                                        <option name="8">8</option>
                                        <option name="9">9</option>
                                        <option name="10">10</option>
                                        <option name="11">11</option>
                                        <option name="12">12</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">

                                    <div class="input-group date" data-date-format="dd/mm/yyyy" id='datepicker'>
                                        <input type='text' class="form-control" class="form-control"
                                            placeholder="dd/mm/yyyy" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select value="time" name="time" id="time">
                                        <option value="time">Time</option>
                                        <option name="Breakfast" id="Breakfast">Breakfast</option>
                                        <option name="Lunch" id="Lunch">Lunch</option>
                                        <option name="Dinner" id="Dinner">Dinner</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" rows="8" id="message" placeholder="Message"
                                        required=""></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="form-submit" class="main-button-icon">Make A
                                        Reservation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    <!-- ***** Offers Area Starts ***** -->
    <section class="section" id="offers">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h5>Klassy Week</h5>
                        <h2>This week's Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="menu-index">
                        <div class="tab1">
                            <div class="img">
                                <img src="/tab-icon-01.png" alt="">
                            </div>
                            <div class="info">
                                <a href="#tab1" class="active"> Breakfast</a>
                            </div>
                        </div>
                        <div class="tab2">
                            <div class="img">
                                <img src="/tab-icon-02.png" alt="">
                            </div>
                            <div class="info">
                                <a href="#tab2"> Lunch</a>
                            </div>
                        </div>
                        <div class="tab3">
                            <div class="img">
                                <img src="/tab-icon-03.png" alt="">
                            </div>
                            <div class="info">
                                <a href="#tab3"> Dinner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="menu-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="left-list">
                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-01.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Fresh Chicken Salad</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$10.50</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-02.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Orange Juice</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$8.50</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-03.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Fruit Salad</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$9.90</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="row">
                                <div class="right-list">
                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-04.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Eggs Omelette</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$6.50</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-05.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Dollma Pire</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$5.00</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="menu-item" style="display:flex">
                                            <div class="img">
                                                <img src="/tab-item-06.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h4>Omelette &amp; Cheese</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur <br>koit adipiscing elit, sed
                                                    do.
                                                </p>
                                            </div>
                                            <div class="price">
                                                <h6>$4.10</h6>
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
    <!-- ***** Offers Area Ends ***** -->
    <!-- ***** Footer Area Starts ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <p style="margin-top:12px">
                            <a href="#" style="padding-left:15px"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#" style="padding-right:20px; padding-left:12px"><i
                                    class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="center-content">
                        <img src="/white-logo.png" alt="white-klassy-logo" style="vertical-align: center">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <p>© Copyright Klassy Cafe Co.

                            <br>Designed by: Prativa Marasini
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area Ends ***** -->

    </div>
    </div>
    </div>
    </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- ***** scripts for datepicker ***** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script>
        // $(document).ready(function() {
        $(window).load() {
            $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());

        // $(".slider").owlCarousel({
        //     loop: true,
        //     autoplay: true,
        //     autoplayTimeout: 2000, //2000ms = 2s;
        //     autoplayHoverPause: true,
        // });
        $('.menu-toggle').click(function() {
            $('nav').toggleClass('active')
        });
        



        });

        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        });

    </script>
</body>

</html>
