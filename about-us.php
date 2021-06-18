<?php
    $pageTitle = "About Us";
    $pageDescription = "";
    $headerImg = "assets/img/sylhexexpress-about-us.jpg";
    include "header.php";
?>

<main>
    <!-- page header section start -->
    <section class="page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $headerImg;?>);">
        <div class="wrapper">
            <div class="page-header">
                <h2 class="page-title">About Us</h2>
                <div class="page-brucm"> <a href="./">Home</a> > <?php echo $pageTitle ?> </div>
            </div>
        </div>
    </section>
    <!-- page header section end -->

    <!-- about section start -->
    <section class="about-section-page">
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
                        The Flourishing of Sylhex Express
                    </h2>
                    <p class="section-text">
                        Sylhex Express, began its journey as an international courier service provider in Sylhet about 10 years ago. And since then we kept our promise providing you a quality service. But our journey to reach the current position was not always sweetfull, this company faced many crises. In our critical moments, our clients were our best friends. So we are always thankful to them and always committed to provide them a better service than anytime before.
                    </p>
                </div>
            </div>
            <h2 class="content-title">Our Strength</h2>
            <p class="content-text">
                What we always care about is our customer's best satisfaction, and this is our strongest part of the business. Our goal is to deliver your shipment with safety and reliability. But at the same time, we also need to pay attention to the clients' budgets. We understand, how hard it is to earn money. That is why we always try to give you the best service without failing your budget, rather often we provide a discount.
            </p>
            <p class="content-text">
                Our company currently in logistic agentship with the world's most reputable international courier service providers like Aramex, UPS. As a result, we can ensure the most reliable international logistics service. But we all know, brands come with a value. Keeping this fact in mind, we also have our economy shipping service which costs very low but reliable. Though these services take some time but good for your wallet.
            </p>
            <p class="content-text">
                Finally, we are always trying to improve our service every day with your best support.
            </p>
        </div>
    </section>

    <!-- about section end -->

</main>

<?php 
    include 'footer.php';
?>