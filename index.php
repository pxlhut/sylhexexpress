<?php
    $pageTitle = "Sylhex Express - Your Reliable Cargo Solution";
    $pageDescription = "Sylhex Express Bangladesh";
    include "header.php";
?>

<main>
    <!-- header hero section start -->
    <div class="header-hero">
        <div class="wrapper">
            <div class="flex-block hero-block">
                <div class="block-half">
                    <h2 class="hero-title">
                        First class logistics
                    </h2>
                    <div class="hero-cta">
                        <a class="primary-btn" href="">More About Us</a>
                        <a class="secondary-btn" href="">Our Services</a>
                    </div>
                </div>
                <div class="block-half">
                    <div class="hero-track-block">
                        <div class="track-block">
                            <h3 class="track-title">TRACK YOUR ORDER</h3>
                            <p class="track-text">ENTER YOUR TRACK ID FOR INSTANT SEARCH</p>
                            <form class="track-form" action="">
                                <input class="track-input" type="text" name="tracking-id" placeholder="Enter tracking number">
                                <input class="track-btn" type="submit" value="Track">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header hero section end -->

    <!-- about section start -->

    <section class="about-section">
        <div class="wrapper">
            <div class="about-block">
                <div class="about-img-block">
                    <img class="about-img-block" src="assets/img/sylhex-about-bg.JPG" alt="">
                    <div class="delivery-update">
                        <i class="flaticon-fast delivery-icon"></i>
                        <p class="delivery-text">10.6 K</p>
                        <p class="delivery-sub-text">Delivery Done</p>
                    </div>
                </div>
                <div class="about-content-block">
                    <h2 class="section-title">
                        Your Reliable Transport Solution
                    </h2>
                    <p class="section-text">
                        Sylhex Express, began its journey as an international courier service provider in Sylhet about 10 years ago. And since then we kept our promise providing you a quality service. But our journey to reach the current position was not always sweetfull, this company faced many crises. In our critical moments, our clients were our best friends. So we are always thankful to them and always committed to provide them a better service than anytime before.
                    </p>
                    <a href="/about-us.php" class="primary-btn about-cta">Explore More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service section start -->
    <section class="service-section">
        <div class="wrapper">
            <div class="section-header">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">We do all kinds of international courier services</p>
            </div>
            <div class="service-card-container">
                <div class="service-card-block">
                    <div class="service-card">
                        <i class="service-icon flaticon-delivery-courier"></i>
                        <i class="service-hover flaticon-delivery-courier"></i>
                        <h3 class="service-title">
                        Courier <br>
                        Service
                        </h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam ex natus sequi illo at, laborum voluptate, temporibus maiores pariatur consequatur nobis error cumque!
                        </p>
                    </div>
                </div>
                <div class="service-card-block">
                    <div class="service-card">
                        <i class="service-icon flaticon-parcel"></i>
                        <i class="service-hover flaticon-parcel"></i>
                        <h3 class="service-title">
                        Parcel <br>
                        Service
                        </h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam ex natus sequi illo at, laborum voluptate, temporibus maiores pariatur consequatur nobis error cumque! Voluptatem optio nisi maiores, molestias atque veritatis! Sequi ratione amet aspernatur possimus!
                        </p>
                    </div>
                </div>
                <div class="service-card-block">
                    <div class="service-card">
                        <i class="service-icon flaticon-mail"></i>
                        <i class="service-hover flaticon-mail"></i>
                        <h3 class="service-title">
                        Malling <br>
                        Service
                        </h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam ex natus sequi illo at, laborum voluptate, temporibus maiores pariatur consequatur nobis error cumque! Voluptatem optio nisi maiores, molestias atque veritatis! Sequi ratione amet aspernatur possimus!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- our partner section start -->
    <section class="our-partners">
        <div class="wrapper">
            <div class="section-header">
                <h2 class="section-title">Our Partners</h2>
                <p class="section-subtitle">You will have the best service with our most reliable and trusted pratners</p>
            </div>
            <div class="partners-list">
                <div class="partner-item">
                    <div class="partner">
                        <img src="assets/img/partners/dhl.png" alt="" class="partner-img">
                    </div>
                </div>
                <div class="partner-item">
                    <div class="partner">
                        <img src="assets/img/partners/fedex.png" alt="" class="partner-img">
                    </div>
                </div>
                <div class="partner-item">
                    <div class="partner">
                        <img src="assets/img/partners/ups.png" alt="" class="partner-img">
                    </div>
                </div>
                <div class="partner-item">
                    <div class="partner">
                        <img src="assets/img/partners/aramex.png" alt="" class="partner-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our partner section start -->
</main>
<?php 
    include 'footer.php';
?>