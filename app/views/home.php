<div class="container">
<div class="main_search">
    <div class="row hide-m text-center" style="height:100px">
        <div class="c8 mx-auto hero-content">
            <h2 class="hero-title-h2">
                <?=T::hero1; ?>
            </h2>
            <h3 class="hero-title-h3">
                <?=T::hero2; ?>
            </h3>
        </div>
    </div>


    <section id="search" class="hero lazy" data-src="<?=root;?>uploads/slider/1.jpg" style="border-radius:10px;">
        <div class="container">
            <div class="row">
                <div class="c12">
                    <div class="search">
                        <ul class="row-rtl">
                            <li class="HOTELS">
                                <input id="HOTELS" type="radio" hidden checked name="module">
                                <label for="HOTELS"><i class="mdi mdi-hotel"></i> <?=T::hotels_hotels; ?> </label>
                                <?php include 'modules/hotels/search.php';?>
                            </li>
                            <li class="FLIGHTS">
                                <input id="FLIGHTS" type="radio" hidden name="module">
                                <label for="FLIGHTS"><i class="mdi mdi-airplane"></i> <?=T::flights_flights; ?> </label>
                                <?php include 'modules/flights/search.php';?>
                            </li>
                            <li class="BUS">
                                <input id="BUS" type="radio" hidden name="module">
                                <label for="BUS"><i class="mdi mdi-bus"></i> Bus</label>
                                <?php include 'modules/bus/search.php';?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
$(".hero,input,.select2-search").click(function() {
 $('html, body').animate({
  scrollTop: $("#search").offset().top
 }, 1);
});
</script>

</div>
<!-- hero section end -->
<!-- main start -->
<div class="offers pt-150 mb-30 second">
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="c4 offers">
                <a href="<?=root;?>offer">
                <img src="<?=root;?>assets/img/offer.jpg" alt="offer" />
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="hotels-feature">
    <div class="section-subtitle">
        <h2><?=T::hotels_featured_hotels; ?></h2>
        <h3><?=T::hotels_featured_hotels_t1; ?> </h3>
        <h3><?=T::hotels_featured_hotels_t2; ?> </h3>
    </div>
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="c4">
                <a href="<?=root;?>hotels/details">
                    <div class="hotels-feature-items">
                        <figure class="item-image">
                            <div
                                class="hotel-image"
                                style='background-image: url("<?=root;?>assets/img/hotel.jpg");'
                                ></div>
                        </figure>
                        <div class="item-info rtl-align-right">
                            <div class="item-info-title">
                                <h4>Shangri La Hotel Dubai</h4>
                            </div>
                            <div class="item-rating">
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                            </div>
                            <div class="item-location my-10">
                                <i class="icon-location"></i>
                                <p>Dubai, United Arab Emarates</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="top-destinations">
    <div class="section-subtitle pt-50">
        <h2>Popular destinations during this month</h2>
        <h3>
            Book the best hotels we have chosen for you at the best price
        </h3>
        <h3>Find out the best hotels to the world's most famous cities</h3>
    </div>
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
            <div class="col-lg-5-2">
                <div class="country-recommendation" style="background-image: url('<?=root;?>assets/img/dest.jpg');">
                    <h1 class="country-name">Mecca</h1>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="top-airlines">
    <div class="section-subtitle">
        <h2><?=T::flights_featured_flights; ?></h2>
        <h3><?=T::flights_featured_flights_t1; ?></h3>
    </div>
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="c4">
                <div class="airline-card">
                    <a href="#saudi">
                        <label for="airline-<?=$i ?>">
                            <div class="card-header">
                                <div class="flex items-center row-rtl">
                                    <div class="airline_img rtl-align-right">
                                        <img  alt="airline_img" class="img-fluid" src="<?=root;?>assets/img/flight.png">
                                    </div>
                                    <div class="airline-name">
                                        <span class="active">Saudi Arabian Airlines</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="airline-<?=$i ?>" type="checkbox" hidden>
                        <div class="tab-panel">
                            <div class="airline-card-body">
                                <div  class="itenary flex flex-content-between items-center">
                                    <span class="origin">Riyadh</span>
                                    <img  alt="" src="<?=root;?>assets/img/rout_en.png">
                                    <span class="destination">Jeddah</span>
                                </div>
                                <div  class="itenary flex flex-content-between items-center">
                                    <span class="origin">Riyadh</span>
                                    <img  alt="" src="<?=root;?>assets/img/rout_en.png">
                                    <span class="destination">Jeddah</span>
                                </div>
                                <div  class="itenary flex flex-content-between items-center">
                                    <span class="origin">Riyadh</span>
                                    <img  alt="" src="<?=root;?>assets/img/rout_en.png">
                                    <span class="destination">Jeddah</span>
                                </div>
                                <div  class="itenary flex flex-content-between items-center">
                                    <span class="origin">Riyadh</span>
                                    <img  alt="" src="<?=root;?>assets/img/rout_en.png">
                                    <span class="destination">Jeddah</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<section class="features">
    <div class="section-subtitle">
        <h2>Features</h2>
    </div>
    <div class="container">
        <div class="row flex-content-center">
            <div class="c2 text-center feature-item">
                <img alt="" src="assets/img/airlineCount.svg">
                <p> Over 500 Airlines </p>
            </div>
            <div class="c2 text-center feature-item">
                <img alt="" src="assets/img/hotelsCount.svg">
                <p> Over 1 Million Hotels </p>
            </div>
            <div class="c2 text-center feature-item">
                <img alt="" src="assets/img/point-of-service.svg">
                <p>Best Fares Guaranty</p>
            </div>
            <div class="c2 text-center feature-item">
                <img alt="" src="assets/img/debit-card.svg">
                <p>Secure Payments </p>
            </div>
        </div>
    </div>
</section>