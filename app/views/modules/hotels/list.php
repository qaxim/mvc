<div class="crumb">
  <div class="container h-100">
    <ul>
      <li class="breadcrumb-item"><a href="<?=root;?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=$lang = $url[0];;?>"><?=$lang = $url[0];;?></a></li>
      <li class="breadcrumb-item active"><?=$city = $url[3]; ?> </li>
    </ul>
  </div>
</div>

<div class="list-page" id="listing">
  <div class="edit-search">
    <div class="container">
      <div class="row mb-20 row-rtl">
        <div class="c10">
          <div class="left-side-info rtl-align-right">
            <span><strong>Lahore, Cairo, Egypt</strong></span>
            <div>
              <p><strong>1 Night </strong>( 11 Feb , 2020 - 12 Feb , 2020 )</p>
              <p>1 Traveler , 1 Room</p>
            </div>
          </div>
        </div>
        <div class="c2 modify-search">
          <div class="right-side-info">
            <label for="edit" class="btn prime-outline w100">Edit</label>
          </div>
        </div>
      </div>
      <input id="edit" type="checkbox" hidden>
      <div class="panel">
        <div class="search-form">
          <?php include 'search.php';?>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="wrapper">
    <div class="row row-rtl">
      <div class="c3">
        <aside>
          <section class="" id="stuff-filters">
            <div class="filter-section">
              <div class="filter-header">
                <h5>Filters</h5>
              </div>
              <div class="flex flex-content-between items-center pb-10 row-rtl">
                <span>Make search easier</span>
                <button id="clear-filters">Clear Filter</button>
              </div>
            </div>
            <input type="text" placeholder="Search for hotel name" id="search"/>
            <div class="filter-section mt-30 pb-10">
              <div class="filter-header">
                <h4>Price</h4>
                <div class="row mt-10">
                  <div class="c12">
                    <div class="bootstrap-slider">
                      <div class="filter-label text-center" style="margin-top:-32px;margin-bottom:30px"><span class="filter-selection"></span></div>
                      <input id="filter-weight" type="text" class="bootstrap-slider" value="" data-filter-group="weight">
                      <div class="clear"></div>
                      <div class="row mt-10 slider_values">
                        <div class="c6 text-left"><b>Min</b> USD 50</div>
                        <div class="c6 text-right"><b>Max</b> USD 100</div>
                      </div>
                    </div>
                  </div>
                  <div class="c12" style="display:none">
                    <div class="bootstrap-slider">
                      <span class="filter-label">Height Range: <span class="filter-selection"></span> </span>
                      <b>140</b>
                      <input id="filter-height" type="text" class="bootstrap-slider" value="" data-slider-step="1" data-filter-group="height">
                      <b>220</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="filter-section star-rating mt-30 pb-10">
              <div class="filter-header">
                <h4>Star Rating</h4>
              </div>
              <!--<?php foreach($listdata->response as $list){?>
                <label><input type="checkbox" value="<?= $list->rating ;?>" class="filter-item" /> <?= $list->rating ;?></label>&nbsp;&nbsp;
                <?php } ?>-->
              <div class="mt-10 row-rtl">
                <div class="filters filter-section">
                  <label class="btn" for="0" data-filter=""> <input type="radio" id="0" name="stars"/>
                  All
                  <strong>
                  <?php  if (!empty($totalhotel)){echo $totalhotel; }else{echo $totalempty;}?>
                  </strong>
                  </label>
                  <label class="btn" for="5" data-filter=".s5"> <input type="radio" id="5" name="stars"/>
                  <span class="stars star5"></span>
                  <strong>
                  <?php if (empty($listempty)) { echo $five_stars; }else{echo'0';} ?>
                  </strong>
                  </label>
                  <div class="clear"></div>
                  <label class="btn" for="4" data-filter=".s4"> <input type="radio" id="4" name="stars"/>
                  <span class="stars star4"></span>
                  <strong>
                  <?php if (empty($listempty)) { echo $four_stars; }else{echo'0';} ?>
                  </strong>
                  </label>
                  <div class="clear"></div>
                  <label class="btn" for="3" data-filter=".s3"> <input type="radio" id="3" name="stars"/>
                  <span class="stars star3"></span>
                  <strong>
                  <?php if (empty($listempty)) { echo $three_stars; }else{echo'0';} ?>
                  </strong>
                  </label>
                  <div class="clear"></div>
                  <label class="btn" for="2" data-filter=".s2"> <input type="radio" id="2" name="stars"/>
                  <span class="stars star2"></span>
                  <strong>
                  <?php if (empty($listempty)) { echo $two_stars; }else{echo'0';} ?>
                  </strong>
                  </label>
                  <div class="clear"></div>
                  <label class="btn" for="1" data-filter=".s1"> <input type="radio" id="1" name="stars"/>
                  <span class="stars star1"></span>
                  <strong>
                  <?php if (empty($listempty)) { echo $one_stars; }else{echo'0';} ?>
                  </strong>
                  </label>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
            <div class="filter-section chain-hotel pb-10">
              <div class="filter-header">
                <h5>Chain</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <label for="<?= $i; ?>"> <input type="checkbox" id="<?= $i; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="filter-section amenities pb-10">
              <div class="filter-header">
                <h5>Hotel Amenities</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($l = 1; $l <= 5; $l++) { ?>
                <label for="<?= $l; ?>"> <input type="checkbox" id="<?= $l; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="filter-section amenities pb-10">
              <div class="filter-header">
                <h5>Rooms Amenities</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($k = 1; $k <= 5; $k++) { ?>
                <label for="<?= $k; ?>"> <input type="checkbox" id="<?= $k; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="cover-bar"></div>
          </section>
          <button class="btn prime w100" style="margin-top:-70px"><span class="icon mdi mdi-search"></span> Search</button>
        </aside>
      </div>
      <div class="c9">
        <div class="row">
          <div class="c12">
            <div class="flex flex-content-between items-center mb-10 row-rtl">
              <div class="sortby">
                <small>sort by</small> <strong>Guest reviews (5-0)</strong>
                <div class="sortby-dropdown hide">
                  <span>Guest reviews (5-0)</span>
                  <ul>
                    <li>Price</li>
                    <li>Price</li>
                    <li>Hotel Rate (0-5)</li>
                    <li>Hotel Rate (5-0)</li>
                    <li>Name (A-Z)</li>
                    <li>Name (Z-A)</li>
                  </ul>
                </div>
              </div>
              <div>
                <div class="flex items-center">
                  <div>
                    <strong>
                    <?php  if (!empty($totalhotel)){echo $totalhotel .' '. $cityname;
                      }else{echo $totalempty .' '. $cityname;}?>
                    </strong>
                  </div>
                  <!--<div class="ml-30">
                    <strong> Cairo<span>℃</span> </strong>
                    <br />
                    <small class="text-muted">20/01/2020</small>
                    </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="products">
          <div class="filters filter-section">
          </div>
          <div id="hotels"></div>
          <?php if (empty($listempty)) {?>
          <script type="text/handlebars-template" id="handlebars-hotels">
            {{#hotels}}

             <div class="row row-rtl s{{rating}} product-block item hotelslist {{price}} small round red" data-height="100" data-weight="{{price}}">
                <div class="c12">
                  <div class="list-wrapper">
                    <div class="row row-rtl">
                      <div class="c-sm-5 c3 p-10">
                        <a href="{{link}}">
                        <img  class="main-img lazy" data-src="{{image}}" />
                        </a>
                      </div>
                      <div class="c-sm-7 c9">
                        <div class="row h-100 row-rtl">
                          <div class="c7 border-right rtl-align-right">
                            <div class="detail">
                              <h6 class="title"><a href="{{link}}"><strong>{{name}}</strong></a></h6>
                              <div class="rating mb-10 mt-10">
                              <span class="stars star{{stars}}"></span>
                              </div>
                              <small class="text-muted"><strong>{{address}}</strong></small><br>
                              <small class="text-muted">{{desc}}</small>
                            </div>
                            <!--<div class="aminities mt-10 hide-m">
                              <span>&#10070;</span>
                              <span>&#10070;</span>
                              <span>&#10070;</span>
                              <span>&#10070;</span>
                              </div>-->
                          </div>
                          <div class="c5 p-10">
                            <div class="flex flex-content-between row-rtl">
                              <div class="trust-you">
                                <p>{{rating}}</p>
                                <div class="vrified">
                                  <span>Fabulous</span>
                                </div>
                              </div>
                              <div class="social_share social-containerer">
                                <span class="share icon-share hide-m">&#9737;</span>
                              </div>
                            </div>
                            <span class="discount-precentage">Save 10 %</span>
                            <div class="total-price">
                              <span class="title hide-m">Total price for 1 <span>nights</span></span>
                              <h5 class="total-price-value">
                                <span class="total-price-value-before-discount">
                                  <!--<span class="price-before">250</span>
                                    <span class="currency-before-discount">USD</span>-->
                                </span>
                                <strong>{{price}}</strong> <span>{{currency}}</span>
                              </h5>
                            </div>
                            <div class="text-center mt-10">
                             <a class="btn prime-o hide-m w100" href="{{link}}">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            {{/hotels}}
          </script>
          <?php }else{echo $listempty;} ?>
        </div>
        <br><br><br><br><br>
        <p id="loading"></p>
      </div>
    </div>
  </div>
</div>

<script>

// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
$(document).ready( function() {

  // Create object to store filter for each group
  var buttonFilters = {};
  var buttonFilter = '*';
  // Create new object for the range filters and set default values,
  // The default values should correspond to the default values from the slider
  var rangeFilters = {
      'height': {'min':10, 'max': 400},
      'weight': {'min':10, 'max': 400}
    };

  // Initialise Isotope
  // Set the item selector
  var $grid = $('#hotels').isotope({
    itemSelector: '.item',
    layout: 'masonry',
    // use filter function
    filter: function() {
      var $this = $(this);
      var height = $this.attr('data-height');
      var weight = $this.attr('data-weight');
      var isInHeightRange = (rangeFilters['height'].min <= height && rangeFilters['height'].max >= height);
      var isInWeightRange = (rangeFilters['weight'].min <= weight && rangeFilters['weight'].max >= weight);
      //console.log(rangeFilters['height']);
      //console.log(rangeFilters['weight']);
      // Debug to check whether an item is within the height weight range
      //console.log('isInHeightRange:' +isInHeightRange + '\nisInWeightRange: ' + isInWeightRange );
      return $this.is( buttonFilter ) && (isInHeightRange && isInWeightRange);
    }
  });

  // Initialise Sliders
  // Set min/max range on sliders as well as default values
  var $heightSlider = $('#filter-height').slider({ tooltip_split: true, min: 130,  max: 220, range: true, value: [150, 180] });
  var $weightSlider = $('#filter-weight').slider({ tooltip_split: true, min: 40,  max: 150, range: true, value: [50, 90] });

  function updateRangeSlider(slider, slideEvt) {
    console.log('Current slider:' + slider);
    var sldmin = +slideEvt.value[0],
        sldmax = +slideEvt.value[1],
        // Find which filter group this slider is in (in this case it will be either height or weight)
        // This can be changed by modifying the data-filter-group="age" attribute on the slider HTML
        filterGroup = slider.attr('data-filter-group'),
        // Set current selection in variable that can be pass to the label
        currentSelection = sldmin + ' - ' + sldmax;

      // Update filter label with new range selection
      slider.siblings('.filter-label').find('.filter-selection').text(currentSelection);

      // Set min and max values for current selection to current selection
      // If no values are found set min to 0 and max to 100000
      // Store min/max values in rangeFilters array in the relevant filter group
      // E.g. rangeFilters['height'].min and rangeFilters['height'].max
      console.log('Filtergroup: '+ filterGroup);
      rangeFilters[filterGroup] = {
        min: sldmin || 0,
        max: sldmax || 100000
      };
      // Trigger isotope again to refresh layout
      $grid.isotope();

  }

  // Trigger Isotope Filter when slider drag has stopped
  $heightSlider.on('slideStop', function(slideEvt){
    var $this =$(this);
    updateRangeSlider($this, slideEvt);
  });
  $weightSlider.on('slideStop', function(slideEvt){
    var $this =$(this);
    updateRangeSlider($this, slideEvt);
  });

  // Look inside element with .filters class for any clicks on elements with .btn
  $('.filters').on( 'click', '.btn', function() {
    var $this = $(this);
    // Get group key from parent btn-group (e.g. data-filter-group="color")
    var $buttonGroup = $this.parents('.btn-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    buttonFilters[ filterGroup ] = $this.attr('data-filter');
    // Combine filters or set the value to * if buttonFilters
    buttonFilter = concatValues( buttonFilters ) || '*';
    // Log out current filter to check that it's working when clicked
    console.log( buttonFilter )
    // Trigger isotope again to refresh layout
    $grid.isotope();
  });

  // change is-checked class on btn-filter to toggle which one is active
  $('.btn-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', '.btn-filter', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $(this).addClass('is-checked');
      });
  });

});

// Flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

</script>

<script>document.getElementById("loading").innerHTML = '<div class="plane-loader"> <div class="cloud cloud1"></div> <div class="cloud cloud4"></div> <div class="cloud cloud3"></div> <div class="plane"></div> <div class="cloud cloud2"></div> <div class="steam steam1"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam2"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam3"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam4"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> </div>';</script>

<script src="<?=root.js;?>bootstrap-slider.min.js"></script>
<script src="<?=root.js;?>handlebars.min.js"></script>
<?=$hotels;?>

<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".hotelslist").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
  $(".filter-section .btn").click(function() {
  $('html, body').animate({
  scrollTop: $("#listing").offset().top
  }, 1);
  });
</script>