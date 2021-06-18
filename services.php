<?php
    $pageTitle = "Services";
    $pageDescription = "";
    $headerImg = "assets/img/sylhexexpress-service-bg.jpg";
    include "header.php";
?>

<main>
    <!-- page header section start -->
    <section class="page-hero"
        style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $headerImg;?>);">
        <div class="wrapper">
            <div class="page-header">
                <h2 class="page-title">Our Services</h2>
                <div class="page-brucm"> <a href="./">Home</a> > <?php echo $pageTitle ?> </div>
            </div>
        </div>
    </section>
    <!-- page header section end -->

    <section class="service-page-block">
        <div class="wrapper">
            <div class="service-grid">
                <div class="service-item">
                    <img src="assets/img/sylhex-courian-service.jpg" alt="" class="grid-img">
                </div>
                <div class="service-item">
                    <div class="grid-content">
                        <h3 class="grid-service-title">
                            Courier Service
                        </h3>
                        <p class="grid-text">
                            We do provide all kinds of internation courier service. You can send any kind of leagal
                            items to your desired destination at a low cost. Often we need to ship our goods over the
                            seas, but we don't know the proper and reliable way. Sylhex Express comes here to solve your
                            problem. You do not need to package your items, just bring it to our office we will do the
                            rest.
                        </p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="assets/img/sylhex-parcel-service.jpg" alt="" class="grid-img">
                </div>
                <div class="service-item">
                    <div class="grid-content">
                        <h3 class="grid-service-title">
                            Parcel Service
                        </h3>
                        <p class="grid-text">
                            Our reliable parcel service is able to ship your gift items to you loving persons.
                        </p>
                    </div>
                </div>
                <div class="service-item">
                    <img src="assets/img/sylhex-mailing-service.jpg" alt="" class="grid-img">
                </div>
                <div class="service-item">
                    <div class="grid-content">
                        <h3 class="grid-service-title">
                            Mailing Service
                        </h3>
                        <p class="grid-text">
                            We have our specialized mailing service for your valueable document. We understand how
                            valueable your document and for this reason we always give the priority on document mailing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php 
    include 'footer.php';
?>